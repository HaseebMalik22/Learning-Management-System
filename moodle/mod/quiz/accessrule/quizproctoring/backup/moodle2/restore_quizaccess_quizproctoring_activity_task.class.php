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
 *
 * Define all the backup steps that will be used by the restore_quizaccess_quizproctoring_activity_task
 *
 * @package    quizaccess_quizproctoring
 * @subpackage quizproctoring
 * @copyright  2020 Mahendra Soni <ms@taketwotechnologies.com> {@link https://taketwotechnologies.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/mod/quiz/quizproctoring/backup/moodle2/restore_quizaccess_quizproctoring_stepslib.php');
// Because it exists (must).

/**
 * quizaccess proctoring restore task that provides all the settings and steps to perform one
 */
class restore_quizaccess_quizproctoring_subplugin extends restore_subplugin {

    /**
     * Define (add) particular settings this activity can have
     */
    protected function define_my_settings() {
        // No particular settings for this activity.
    }

    /**
     * Define (add) particular steps this activity can have
     */
    protected function define_attempt_subplugin_structure() {
        // Quizaccess proctoring only has one structure.
        $this->add_step(new restore_quizaccess_quizproctoring_activity_structure_step('quizaccess_quizproctoring_structure',
        'quizaccess_quizproctoring.xml'));
    }
}
