<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * API methods from AWS rekognition to detect camera pictures
 *
 * @package    quizaccess_quizproctoring
 * @subpackage quizproctoring
 * @copyright  2020 Mahendra Soni <ms@taketwotechnologies.com> {@link https://taketwotechnologies.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace quizaccess_quizproctoring\aws;

defined('MOODLE_INTERNAL') || die();
define('AWS_VERSION', 'latest');
define('AWS_REGION', 'us-east-1');

require_once($CFG->dirroot . '/mod/quiz/accessrule/quizproctoring/lib.php');
require_once($CFG->dirroot . '/mod/quiz/accessrule/quizproctoring/libraries/aws/aws-autoloader.php');

/**
 * API exposed by AWS, to be used by camera images.
 *
 * @package    quizaccess_quizproctoring
 * @subpackage quizproctoring
 * @copyright 2020 Mahendra Soni <ms@taketwotechnologies.com> {@link https://taketwotechnologies.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Provides all the functions for aws call
 */
class camera {
    /**
     * Initialize value amazonapikey
     *
     */
    private static $amazonapikey = null;
    /**
     * Initialize value amazonapisecret
     *
     */
    private static $amazonapisecret = null;

    /**
     * Initialize value client
     *
     */

    private static $client = null;

    /**
     * Initialize key and token
     *
     * @return null
     */
    public static function init() {
        global $CFG;
        // Amazonapikey set amazon api key.
        self::$amazonapikey = get_config('quizaccess_quizproctoring', 'aws_key');
        // Amazonapisecret set amazon api secret key.
        self::$amazonapisecret = get_config('quizaccess_quizproctoring', 'aws_secret');
        // Client set credentials with key and secret.
        self::$client = new \Aws\Rekognition\RekognitionClient([
            'version' => AWS_VERSION,
            'region' => AWS_REGION,
            'credentials' => [
                'key' => self::$amazonapikey,
                'secret' => self::$amazonapisecret
            ]
        ]);
    }

    /**
     * Validate the image captured
     *
     * @param Longtext $source data
     * @param Longtext $target data
     * @return string
     */
    public static function validate($source, $target = '') {
        global $CFG;
        $result = self::detect_faces($source);

        if (isset($result["FaceDetails"]) && count($result["FaceDetails"]) > 0) {
            $count = count($result["FaceDetails"]);
            if ($count > 1) {
                return QUIZACCESS_QUIZPROCTORING_MULTIFACESDETECTED;
            } else if ($count == 1) {
                $eyesopen = $result['FaceDetails'][0]['EyesOpen']['Value'];
                if (!$eyesopen) {
                    return QUIZACCESS_QUIZPROCTORING_EYESNOTOPENED;
                } else if ($target !== '') {
                    $compareresult = self::compare_faces($source, $target);
                    if (!$compareresult || $compareresult < QUIZACCESS_QUIZPROCTORING_FACEMATCHTHRESHOLD) {
                        return QUIZACCESS_QUIZPROCTORING_FACESNOTMATCHED;
                    } else {
                        return self::check_protective_equipment($source);
                    }
                } else {
                    return self::check_protective_equipment($source);
                }
            } else {
                return null;
            }
        } else {
            return QUIZACCESS_QUIZPROCTORING_NOFACEDETECTED;
        }
    }

    /**
     * Detect faces
     *
     * @param Longtext $source data
     * @return string
     */
    public static function detect_faces($source) {
        $result = self::$client->detectFaces([
            'Image' => [
                'Bytes' => $source
            ],
            'Attributes' => ['ALL']
        ]);
        return $result;
    }

    /**
     * Compare faces
     *
     * @param Longtext $source data
     * @param Longtext $target data
     * @return string
     */
    public static function compare_faces($source, $target) {
        $result = self::$client->CompareFaces([
            'SourceImage' => [
                'Bytes' => $source
            ],
            'TargetImage' => [
                'Bytes' => $target
            ]
        ]);
        if (isset($result["FaceMatches"]) && isset($result["FaceMatches"][0]) && isset($result["FaceMatches"][0]["Similarity"])) {
            return $result["FaceMatches"][0]["Similarity"];
        }
        return false;
    }

    /**
     * Check protective equipment
     *
     * @param Longtext $source data
     * @return null
     */
    public static function check_protective_equipment($source) {
        $resprotectiveequipment = self::detect_protective_equipment($source);
        if (isset($resprotectiveequipment["Persons"]) && count($resprotectiveequipment["Persons"]) > 0) {
            $persons = $resprotectiveequipment["Persons"];
            foreach ($persons as $person) {
                $bodyparts = $person['BodyParts'];
                if (!empty($bodyparts)) {
                    foreach ($bodyparts as $bodypart) {
                        if ($bodypart['Name'] == 'FACE') {
                            if (empty($bodypart['EquipmentDetections'])) {
                                return null;
                            } else {
                                return QUIZACCESS_QUIZPROCTORING_FACEMASKDETECTED;
                            }
                        }
                    }
                }
            }
        }
        return null;
    }

    /**
     * Dectect  protective equipment
     *
     * @param Longtext $source data
     * @return string
     */
    public static function detect_protective_equipment($source) {
        $result = self::$client->detectProtectiveEquipment([
            'Image' => [
                'Bytes' => $source
            ],
            'SummarizationAttributes' => [
                'MinConfidence' => QUIZACCESS_QUIZPROCTORING_FACEMASKTHRESHOLD,
                'RequiredEquipmentTypes' => [
                    'FACE_COVER'
                ]
            ]
        ]);

        return $result;
    }
}
