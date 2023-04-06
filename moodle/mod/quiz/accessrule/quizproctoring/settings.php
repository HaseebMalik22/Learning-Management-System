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
 * Settings file for quizaccess proctoring
 *
 * @package    quizaccess_quizproctoring
 * @subpackage quizproctoring
 * @copyright  2020 Mahendra Soni <ms@taketwotechnologies.com> {@link https://taketwotechnologies.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig && !empty($USER->id)) {

    // Mangeto Mapping Settings
    $settings = new admin_settingpage('modsettingsquizcatproctoring', get_string('pluginname', 'quizaccess_quizproctoring'), 'moodle/site:config');

    $settings->add(new admin_setting_configtext('quizaccess_quizproctoring/aws_key',
        get_string('awskey', 'quizaccess_quizproctoring'),
        get_string('awskey_help', 'quizaccess_quizproctoring'),
        '',
        PARAM_TEXT));

    $settings->add(new admin_setting_configtext('quizaccess_quizproctoring/aws_secret',
        get_string('awssecret', 'quizaccess_quizproctoring'),
        get_string('awssecret_help', 'quizaccess_quizproctoring'),
        '',
        PARAM_TEXT));

    $settings->add(new admin_setting_configselect('quizaccess_quizproctoring/img_check_time',
        get_string('proctoringtimeinterval', 'quizaccess_quizproctoring'),
        get_string('help_timeinterval', 'quizaccess_quizproctoring'), 5,
        array(1 => get_string('oneminute', 'quizaccess_quizproctoring'),
         5 => get_string('fiveminutes', 'quizaccess_quizproctoring'), 10 => get_string('tenminutes', 'quizaccess_quizproctoring'))));
}
