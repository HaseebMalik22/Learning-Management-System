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
 * Define all the backup steps that will be used by the backup_quizaccess_quizproctoring_activity_task
 *
 * @package    quizaccess_quizproctoring
 * @subpackage quizproctoring
 * @copyright  2020 Mahendra Soni <ms@taketwotechnologies.com> {@link https://taketwotechnologies.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

 /**
  * Define the complete quizaccess proctoring structure for backup, with file and id annotations
  */
class backup_quizaccess_quizproctoring_activity_structure_step extends backup_activity_structure_step {

    /**
     * Define structure
     */
    protected function define_structure() {

        // The URL module stores no user info.

        // Define each element separated.
        $quizaccessproctoring = new backup_nested_element('quizaccess_quizproctoring', array('id'), array(
            'quizid', 'enableproctoring', 'time_interval'));

        // Define sources.
        $quizaccessproctoring->set_source_table('quizaccess_quizproctoring', array('id' => backup::VAR_ACTIVITYID));

        // Return the root element (quizaccess_quizproctoring), wrapped into standard activity structure.
        return $this->prepare_activity_structure($quizaccessproctoring);

    }
}
