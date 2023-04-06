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
 * Defines backup_quizaccess_quizproctoring_subplugin class
 *
 * @package    quizaccess_quizproctoring
 * @subpackage quizproctoring
 * @category   backup
 * @copyright  2020 Mahendra Soni <ms@taketwotechnologies.com> {@link https://taketwotechnologies.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

require_once($CFG->dirroot . '/mod/quiz/quizproctoring/backup/moodle2/backup_quizaccess_quizproctoring_stepslib.php');

/**
 * Provides all the settings and steps to perform one complete backup of the activity
 */
class backup_quizaccess_quizproctoring_subplugin extends backup_subplugin {

    /**
     * No specific settings for this activity
     */
    protected function define_quiz_subplugin_structure() {
    }

    /**
     * Defines a backup step to store the instance data in the quizaccess_quizproctoring.xml file
     */
    protected function define_attempt_subplugin_structure() {
            $this->add_step(new backup_quizaccess_quizproctoring_activity_structure_step('quizaccess_quizproctoring_structure',
                'quizaccess_quizproctoring.xml'));
    }
}
