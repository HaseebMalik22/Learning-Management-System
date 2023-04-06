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
 * Proctoring observers.
 *
 * @package    quizaccess_quizproctoring
 * @subpackage quizproctoring
 * @copyright  2020 Mahendra Soni <ms@taketwotechnologies.com> {@link https://taketwotechnologies.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace quizaccess_quizproctoring;
defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/mod/quiz/accessrule/quizproctoring/lib.php');

/**
 * Proctoring observers class.
 *
 * @package    quizaccess_quizproctoring
 * @subpackage quizproctoring
 * @copyright  2020 Mahendra Soni <ms@taketwotechnologies.com> {@link https://taketwotechnologies.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class observer {

     /**
      * handle quiz attempt started.
      *
      * @param stdClass $event
      * @return void
      */
    public static function quizproctoring_start_camera($event) {
        global $DB, $CFG;
        $eventdata = $event->get_data();
        if ($quizid = $eventdata['other']['quizid']) {
            if ($DB->record_exists('quizaccess_quizproctoring', array('quizid' => $quizid, 'enableproctoring' => 1))) {
                quizproctoring_camera_task($eventdata['contextinstanceid'], $eventdata['objectid'], $quizid);
            }
        }
    }

    /**
     * Receive a hook when quiz attempt is deleted and update record for proctoring in our DB
     *
     * @param stdClass $event
     * @return void
     */
    public static function quizproctoring_image_delete($event) {
        global $DB, $CFG;
        $proctoringdata = $DB->execute("update {quizaccess_proctor_data} set deleted = 1 where
         attemptid=?", array($event->objectid));
    }
}
