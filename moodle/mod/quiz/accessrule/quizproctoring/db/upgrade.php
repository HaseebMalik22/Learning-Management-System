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
 * Proctoring upgrade file.
 *
 * @package    quizaccess_quizproctoring
 * @subpackage quizproctoring
 * @copyright  2020 Mahendra Soni <ms@taketwotechnologies.com> {@link https://taketwotechnologies.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Quiz module upgrade function.
 * @param string $oldversion the version we are upgrading from.
 */
function xmldb_quizaccess_quizproctoring_upgrade($oldversion) {
    global $CFG, $DB;

    $dbman = $DB->get_manager();

    if ($oldversion < 2020092406) {

        // Define field deleted to be added to quizaccess_proctor_data.
        $table = new xmldb_table('quizaccess_proctor_data');
        $field = new xmldb_field('deleted', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, '0', 'attemptid');

        // Conditionally launch add field deleted.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Proctoring savepoint reached.
        upgrade_plugin_savepoint(true, 2020092406, 'quizaccess', 'quizproctoring');
    }

    if ($oldversion < 2020092407) {

        // Define field triggeresamail to be added to quizaccess_quizproctoring.
        $table = new xmldb_table('quizaccess_quizproctoring');
        $field = new xmldb_field('triggeresamail', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, '0', 'time_interval');

        // Conditionally launch add field triggeresamail.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Proctoring savepoint reached.
        upgrade_plugin_savepoint(true, 2020092407, 'quizaccess', 'quizproctoring');
    }

    if ($oldversion < 2020092408) {

        // Define field warning_threshold to be added to quizaccess_quizproctoring.
        $table = new xmldb_table('quizaccess_quizproctoring');
        $field = new xmldb_field('warning_threshold', XMLDB_TYPE_INTEGER, '2', null, null, null, null, 'triggeresamail');

        // Conditionally launch add field warning_threshold.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Define field status to be added to quizaccess_proctor_data.
        $table = new xmldb_table('quizaccess_proctor_data');
        $field = new xmldb_field('status', XMLDB_TYPE_CHAR, '100', null, null, null, null, 'deleted');

        // Conditionally launch add field status.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Proctoring savepoint reached.
        upgrade_plugin_savepoint(true, 2020092408, 'quizaccess', 'quizproctoring');
    }

    if ($oldversion < 2020092409) {

        // Define field ci_test_id to be added to quizaccess_quizproctoring.
        $table = new xmldb_table('quizaccess_quizproctoring');
        $field = new xmldb_field('ci_test_id', XMLDB_TYPE_INTEGER, '20', null, null, null, null, 'warning_threshold');

        // Conditionally launch add field ci_test_id.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Proctoring savepoint reached.
        upgrade_plugin_savepoint(true, 2020092409, 'quizaccess', 'quizproctoring');
    }

    if ($oldversion < 2020092410) {

        // Define field quiz_sku to be added to quizaccess_quizproctoring.
        $table = new xmldb_table('quizaccess_quizproctoring');
        $field = new xmldb_field('quiz_sku', XMLDB_TYPE_CHAR, '100', null, null, null, null, 'ci_test_id');

        // Conditionally launch add field quiz_sku.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Proctoring savepoint reached.
        upgrade_plugin_savepoint(true, 2020092410, 'quizaccess', 'quizproctoring');
    }

    if ($oldversion < 2021060400) {

        // Define field quiz_sku to be added to quizaccess_quizproctoring.
        $table = new xmldb_table('quizaccess_quizproctoring');
        $field = new xmldb_field('proctoringvideo_link', XMLDB_TYPE_TEXT, '', null, null, null, null, 'quiz_sku');

        // Conditionally launch add field quiz_sku.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Proctoring savepoint reached.
        upgrade_plugin_savepoint(true, 2021060400, 'quizaccess', 'quizproctoring');
    }

    if ($oldversion < 2021060401) {

        // Define index quizid-enableproctoring (unique) to be added to quizaccess_quizproctoring.
        $table = new xmldb_table('quizaccess_quizproctoring');
        $index = new xmldb_index('quizid-enableproctoring', XMLDB_INDEX_UNIQUE, ['quizid', 'enableproctoring']);

        // Conditionally launch add index quizid-enableproctoring.
        if (!$dbman->index_exists($table, $index)) {
            $dbman->add_index($table, $index);
        }

        // Define index quizid-attemptid-userid-image_status-status (not unique) to be added to quizaccess_proctor_data.
        $table = new xmldb_table('quizaccess_proctor_data');
        $index = new xmldb_index('quizid-attemptid-userid-image_status-status', XMLDB_INDEX_NOTUNIQUE, ['quizid', 'attemptid', 'userid', 'image_status', 'status']);

        // Conditionally launch add index quizid-attemptid-userid-image_status-status.
        if (!$dbman->index_exists($table, $index)) {
            $dbman->add_index($table, $index);
        }

        // Proctoring savepoint reached.
        upgrade_plugin_savepoint(true, 2021060401, 'quizaccess', 'quizproctoring');

    }

    return true;
}
