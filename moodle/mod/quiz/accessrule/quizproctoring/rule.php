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
 * Implementaton of the quizaccess_quizproctoring plugin.
 *
 * @package    quizaccess_quizproctoring
 * @subpackage quizproctoring
 * @copyright  2020 Mahendra Soni <ms@taketwotechnologies.com> {@link https://taketwotechnologies.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/mod/quiz/accessrule/accessrulebase.php');


/**
 * A rule representing the safe browser check.
 *
 * @copyright  2020 Mahendra Soni <ms@taketwotechnologies.com> {@link https://taketwotechnologies.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class quizaccess_quizproctoring extends quiz_access_rule_base {

    /**
     * * Information, such as might be shown on the quiz view page, relating to this restriction.
     * There is no obligation to return anything. If it is not appropriate to tell students
     * about this rule, then just return ''.
     *
     * @param stdClass $quizobj quiz object
     * @param int $timenow current time
     * @param bool $canignoretimelimits ignore time limits
     *
     * @return quiz_access_rule_base|quizaccess_proctoring|null
     */
    public static function make(quiz $quizobj, $timenow, $canignoretimelimits) {

        if (!$quizobj->get_quiz()->enableproctoring) {
            return null;
        }
        return new self($quizobj, $timenow);
    }

    /**
     * Get topmost script path.
     *
     * @return string
     */
    public function prevent_access() {
        if (!$this->check_proctoring()) {
            return get_string('proctoringerror', 'quizaccess_quizproctoring');
        } else {
            return false;
        }
    }

    /**
     * Get description
     *
     * @return String
     */
    public function description() {
        return get_string('proctoringnotice', 'quizaccess_quizproctoring');
    }

    /**
     * Preflight required form
     *
     * @param int $attemptid attempt id
     * @return bool TRUE|FALSE
     *
     */
    public function is_preflight_check_required($attemptid) {
        global $SESSION, $DB, $USER;
        $user = $DB->get_record('user', array('id' => $USER->id), '*', MUST_EXIST);
        $attemptid = $attemptid ? $attemptid : 0;
        if ($DB->record_exists('quizaccess_proctor_data', array('quizid' => $this->quiz->id
            , 'image_status' => 'M', 'userid' => $user->id, 'deleted' => 0, 'status' => '' ))) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Preflight check form
     *
     * @param stdClass $quizform quiz form
     * @param stdClass $mform mform
     * @param int $attemptid attempt id
     * @return String
     *
     */
    public function add_preflight_check_form_fields(mod_quiz_preflight_check_form $quizform,
            MoodleQuickForm $mform, $attemptid) {
        global $PAGE, $DB;

        $proctoringdata = $DB->get_record('quizaccess_quizproctoring', array('quizid' => $this->quiz->id));
        $PAGE->requires->js_call_amd('quizaccess_quizproctoring/add_camera', 'init', [$this->quiz->cmid, true, false, $attemptid]);

        $mform->addElement('static', 'proctoringmessage', '',
                get_string('requireproctoringmessage', 'quizaccess_quizproctoring'));

        $filemanageroptions = array();
        $filemanageroptions['accepted_types'] = '*';
        $filemanageroptions['maxbytes'] = 0;
        $filemanageroptions['maxfiles'] = 1;
        $filemanageroptions['mainfile'] = true;
        // Video tag.
        $html = html_writer::start_tag('div', array('id' => 'fitem_id_user_video', 'class' => 'form-group row fitem videohtml'));
        $html .= html_writer::div('', 'col-md-3');
        $videotag = html_writer::tag('video', '', array('id' => 'video', 'width' => '320'
            , 'height' => '240', 'autoplay' => 'autoplay'));
        $html .= html_writer::div($videotag, 'col-md-9');
        $html .= html_writer::end_tag('div');

        // Canvas tag.
        $html .= html_writer::start_tag('div', array('id' => 'fitem_id_user_canvas', 'class' => 'form-group row fitem videohtml'));
        $html .= html_writer::div('', 'col-md-3');
        $canvastag = html_writer::tag('canvas', '', array('id' => 'canvas', 'width' => '320',
         'height' => '240', 'class' => 'hidden'));
        $html .= html_writer::div($canvastag, 'col-md-9');
        $html .= html_writer::end_tag('div');

        // Take picture button.
        $html .= html_writer::start_tag('div', array('id' => 'fitem_id_user_takepicture', 'class' => 'form-group row fitem'));
        $html .= html_writer::div('', 'col-md-3');

        $button = html_writer::tag('button', get_string('takepicture', 'quizaccess_quizproctoring'),
            array('class' => 'btn btn-primary', 'id' => 'takepicture'));
        $html .= html_writer::div($button, 'col-md-9');
        $html .= html_writer::end_tag('div');

        // Retake button.
        $html .= html_writer::start_tag('div', array('id' => 'fitem_id_user_retake', 'class' => 'form-group row fitem'));
        $html .= html_writer::div('', 'col-md-3');
        $button = html_writer::tag('button', get_string('retake', 'quizaccess_quizproctoring'),
            array('class' => 'btn btn-primary hidden', 'id' => 'retake'));
        $html .= html_writer::div($button, 'col-md-9');
        $html .= html_writer::end_tag('div');

        $mform->addElement('hidden', 'userimg');
        $mform->setType('userimg', PARAM_TEXT);
        $mform->addElement('html', $html);
        $mform->addElement('filemanager', 'user_identity', get_string('uploadidentity',
         'quizaccess_quizproctoring'), null, $filemanageroptions);
        $mform->addRule('user_identity', null, 'required', null, 'client');

        // Video button.
        if ($proctoringdata->proctoringvideo_link) {

            $html = html_writer::start_tag('div', array('id' => 'fitem_id_user_demovideo', 'class' => 'form-group row fitem'));
            $html .= html_writer::div('', 'col-md-3');
            $link = html_writer::tag('a', get_string('demovideo', 'quizaccess_quizproctoring'),
                array('id' => 'demovideo', 'target' => '_blank', 'href' => $proctoringdata->proctoringvideo_link));
            $html .= html_writer::div($link, 'col-md-9');
            $html .= html_writer::end_tag('div');

            $mform->addElement('html', $html);
        }

    }

    /**
     * Valid preflight check
     *
     * @param array $data
     * @param string $files
     * @param string $errors
     * @param int $attemptid
     * @return String
     */
    public function validate_preflight_check($data, $files, $errors, $attemptid) {
        global $USER, $DB, $CFG;
        $useridentity = $data['user_identity'];
        $cmid = $data['cmid'];
        $userimg = $data['userimg'];
        $record = new stdClass();
        $record->user_identity = $useridentity;
        $record->userid = $USER->id;
        $record->quizid = $this->quiz->id;
        $record->userimg = $userimg;
        $attemptid = $attemptid ? $attemptid : 0;
        $record->attemptid = $attemptid;
        // We probably have an entry already in DB.
        $file = file_get_draft_area_info($useridentity);
        if ($rc = $DB->get_record('quizaccess_proctor_data', array('userid' =>
            $USER->id, 'quizid' => $this->quiz->id, 'attemptid' => $attemptid, 'image_status' => 'I' ))) {
            $context = context_module::instance($cmid);
            $rc->user_identity = $useridentity;
            $rc->image_status = 'M';
            if ($file['filecount'] > 0) {
                $DB->update_record('quizaccess_proctor_data', $rc);
                file_save_draft_area_files($useridentity, $context->id, 'quizaccess_quizproctoring', 'identity', $rc->id);
            } else {
                $errors['user_identity'] = get_string('useridentityerror', 'quizaccess_quizproctoring');
            }

        } else if ($file['filecount'] > 0) {
            $id = $DB->insert_record('quizaccess_proctor_data', $record);
            $context = context_module::instance($cmid);
            file_save_draft_area_files($useridentity, $context->id, 'quizaccess_quizproctoring', 'identity' , $id);
        } else {
            $errors['user_identity'] = get_string('useridentityerror', 'quizaccess_quizproctoring');
        }
        return $errors;
    }

    /**
     * Notify preflight check
     *
     * @param int $attemptid
     * @return null
     */
    public function notify_preflight_check_passed($attemptid) {
        global $SESSION;
        $SESSION->proctoringcheckedquizzes[$this->quiz->id] = true;
    }

    /**
     * Checks if required SDK and APIs are available
     *
     * @return true, if browser is safe browser else false
     */
    public function check_proctoring() {
        return true;
    }

    /**
     * Add settings form fields
     *
     * @param stdClass $quizform quizform
     * @param stdClass $mform moodle quicl form
     */
    public static function add_settings_form_fields(mod_quiz_mod_form $quizform, MoodleQuickForm $mform) {
        global $CFG;

        // Allow to enable the access rule only if the Mobile services are enabled.
        $mform->addElement('selectyesno', 'enableproctoring', get_string('enableproctoring', 'quizaccess_quizproctoring'));
        $mform->addHelpButton('enableproctoring', 'enableproctoring', 'quizaccess_quizproctoring');
        $mform->setDefault('enableproctoring', 0);

        // Time interval set for proctoring image.
        $mform->addElement('select', 'time_interval', get_string('proctoringtimeinterval', 'quizaccess_quizproctoring'),
                array("5" => get_string('fiveseconds', 'quizaccess_quizproctoring'),
                    "10" => get_string('tenseconds', 'quizaccess_quizproctoring'),
                    "15" => get_string('fiftenseconds', 'quizaccess_quizproctoring'),
                    "20" => get_string('twentyseconds', 'quizaccess_quizproctoring'),
                    "30" => get_string('thirtyseconds', 'quizaccess_quizproctoring'),
                    "60" => get_string('oneminute', 'quizaccess_quizproctoring'),
                    "120" => get_string('twominutes', 'quizaccess_quizproctoring'),
                    "180" => get_string('threeminutes', 'quizaccess_quizproctoring'),
                    "240" => get_string('fourminutes', 'quizaccess_quizproctoring'),
                    "300" => get_string('fiveminutes', 'quizaccess_quizproctoring'),
                    "600" => get_string('tenminutes', 'quizaccess_quizproctoring'),
                    "900" => get_string('fiftenminutes', 'quizaccess_quizproctoring')));
        // ...$mform->addHelpButton('interval', 'interval', 'quiz');
        $mform->setDefault('time_interval', get_config('quizaccess_quizproctoring', 'img_check_time'));

        $thresholds = array();
        for ($i = 0; $i <= 20; $i++) {
            if ($i == 0) {
                $thresholds[$i] = 'Unlimited';
            } else {
                $thresholds[$i] = $i;
            }
        }
        // Allow admin to setup warnings threshold.
        $mform->addElement('select', 'warning_threshold', get_string('warning_threshold',
         'quizaccess_quizproctoring'), $thresholds);
        $mform->addHelpButton('warning_threshold', 'warning_threshold', 'quizaccess_quizproctoring');
        $mform->setDefault('warning_threshold', 0);
        $mform->hideIf('warning_threshold', 'enableproctoring', 'eq', '0');

        // -------------------------------------------------------------------------------
        $mform->addElement('header', 'orderlinesettings', get_string('orderlinesettings', 'quizaccess_quizproctoring'));

        // Allow admin to setup this trigger only once.
        $mform->addElement('selectyesno', 'triggeresamail', get_string('triggeresamail', 'quizaccess_quizproctoring'));
        $mform->addHelpButton('triggeresamail', 'triggeresamail', 'quizaccess_quizproctoring');
        $mform->setDefault('triggeresamail', 0);

        $mform->addElement('text', 'ci_test_id', get_string('citestid', 'quizaccess_quizproctoring'), array('size' => '32'));
        $mform->addHelpButton('ci_test_id', 'citestid', 'quizaccess_quizproctoring');

        $mform->addElement('text', 'quiz_sku', get_string('quizsku', 'quizaccess_quizproctoring'), array('size' => '32'));
        $mform->addHelpButton('quiz_sku', 'quizsku', 'quizaccess_quizproctoring');

        $mform->addElement('text', 'proctoringvideo_link', get_string('proctoring_videolink', 'quizaccess_quizproctoring'));
        $mform->addHelpButton('proctoringvideo_link', 'proctoringlink', 'quizaccess_quizproctoring');
    }

    /**
     * Save settings
     *
     * @param stdClass $quiz
     */
    public static function save_settings($quiz) {
        global $DB;

        $interval = required_param('time_interval', PARAM_INT);
        if (empty($quiz->enableproctoring)) {
            $DB->delete_records('quizaccess_quizproctoring', array('quizid' => $quiz->id));
            $record = new stdClass();
            $record->quizid = $quiz->id;
            $record->enableproctoring = 0;
            $record->triggeresamail = empty($quiz->triggeresamail) ? 0 : 1;
            $record->time_interval = $interval;
            $record->warning_threshold = isset($quiz->warning_threshold) ? $quiz->warning_threshold : 0;
            $record->ci_test_id = isset($quiz->ci_test_id) ? $quiz->ci_test_id : 0;
            $record->proctoringvideo_link = $quiz->proctoringvideo_link;
            if (isset($quiz->quiz_sku) && $quiz->quiz_sku) {
                $record->quiz_sku = $quiz->quiz_sku;
            }
            $DB->insert_record('quizaccess_quizproctoring', $record);
        } else {
            $DB->delete_records('quizaccess_quizproctoring', array('quizid' => $quiz->id));
            $record = new stdClass();
            $record->quizid = $quiz->id;
            $record->enableproctoring = 1;
            $record->triggeresamail = empty($quiz->triggeresamail) ? 0 : 1;
            $record->time_interval = $interval;
            $record->warning_threshold = isset($quiz->warning_threshold) ? $quiz->warning_threshold : 0;
            $record->ci_test_id = isset($quiz->ci_test_id) ? $quiz->ci_test_id : 0;
            $record->proctoringvideo_link = $quiz->proctoringvideo_link;
            if (isset($quiz->quiz_sku) && $quiz->quiz_sku) {
                $record->quiz_sku = $quiz->quiz_sku;
            }
            $DB->insert_record('quizaccess_quizproctoring', $record);
        }
    }

    /**
     * Delete settings
     *
     * @param stdClass $quiz
     */
    public static function delete_settings($quiz) {
        global $DB;
        $DB->delete_records('quizaccess_quizproctoring', array('quizid' => $quiz->id));
    }

    /**
     * Settings sql
     *
     * @param int $quizid
     * @return string
     */
    public static function get_settings_sql($quizid) {
        return array(
            'enableproctoring,time_interval,triggeresamail,warning_threshold,ci_test_id,quiz_sku,proctoringvideo_link',
            'LEFT JOIN {quizaccess_quizproctoring} proctoring ON proctoring.quizid = quiz.id',
            array());
    }

    /**
     * Current time attempt finished
     *
     */
    public function current_attempt_finished() {
        global $SESSION;
        // Clear the flag in the session that says that the user has already.
        // Entered the password for this quiz.
        if (!empty($SESSION->proctoringcheckedquizzes[$this->quiz->id])) {
            unset($SESSION->proctoringcheckedquizzes[$this->quiz->id]);
        }
    }
}
