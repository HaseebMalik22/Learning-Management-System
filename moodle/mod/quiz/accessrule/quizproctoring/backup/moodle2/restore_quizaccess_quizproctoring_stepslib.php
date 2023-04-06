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
 * Define all the backup steps that will be used by the restore_quizaccess_quizproctoring_activity_structure_step
 *
 * @package    quizaccess_quizproctoring
 * @subpackage quizproctoring
 * @copyright  2020 Mahendra Soni <ms@taketwotechnologies.com> {@link https://taketwotechnologies.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Define all the restore steps that will be used by the restore_quizaccess_quizproctoring_activity_structure_step
 */

/**
 * Structure step to restore one quizaccess proctoring activity
 */
class restore_quizaccess_quizproctoring_activity_structure_step extends restore_activity_structure_step {

    /**
     * Define structure
     */
    protected function define_structure() {

        $paths = array();
        $paths[] = new restore_path_element('quizaccess_quizproctoring', '/activity/quizaccess_quizproctoring');

        // Return the paths wrapped into standard activity structure.
        return $this->prepare_activity_structure($paths);
    }

    /**
     * Any changes to the list of dates that needs to be rolled
     *
     * @param array $data
     */
    protected function process_quizaccess_quizproctoring($data) {
        global $DB;

        $data = (object)$data;
        $oldid = $data->id;

        // Any changes to the list of dates that needs to be rolled should be same during course restore and course reset.
        // See MDL-9367.

        // Insert the quizaccess proctoring record.
        $newitemid = $DB->insert_record('quizaccess_quizproctoring', $data);
        // Immediately after inserting "activity" record, call this.
        $this->apply_activity_instance($newitemid);
    }

    /**
     * Add quizaccess proctoring related files
     */
    protected function after_execute() {
        // Add quizaccess proctoring related files, no need to match by itemname (just internally handled context).
        $this->add_related_files('quizaccess_quizproctoring', 'intro', null);
    }
}
