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
 * Theme Almondb block lib.
 *
 * @package   theme_almondb
 * @copyright 2022 ThemesAlmond  - http://themesalmond.com
 * @author    ThemesAlmond - Developer Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Frontpage block01.
 * @return url
 */
function theme_almondb_frontpageblock01() {
    $theme = theme_config::load('almondb');
    $templatecontext['block01enabled'] = $theme->settings->block01enabled;
    if (empty($templatecontext['block01enabled'])) {
        return $templatecontext;
    }
    $templatecontext['block01caption'] = $theme->settings->block01caption;
    $templatecontext['block01button'] = $theme->settings->block01button;
    $templatecontext['block01buttonlink'] = $theme->settings->block01buttonlink;
    $templatecontext['block01color'] = $theme->settings->block01color;

    return $templatecontext;
}
/**
 * Frontpage block02.
 * @return url
 */
function theme_almondb_frontpageblock02() {
    global $OUTPUT;

    $theme = theme_config::load('almondb');
    $templatecontext['block02enabled'] = $theme->settings->block02enabled;
    if (empty($templatecontext['block02enabled'])) {
        return $templatecontext;
    }
    $count = $theme->settings->block02count;
    for ($i = 1, $j = 0; $i <= $count; $i++, $j++) {
        $block02img = "sliderimageblock02img{$i}";
        $block02icon = "block02icon{$i}";
        $block02title = "block02title{$i}";
        $block02caption = "block02caption{$i}";
        $block02button = "block02button{$i}";
        $block02buttonlink = "block02buttonlink{$i}";

        $str = $theme->settings->$block02icon;
        $newstr = substr(strstr($str, ":"), 1, (strlen(strstr($str, ":"))) - 1);
        $image = $theme->setting_file_url($block02img, $block02img);
        if (empty($image)) {
            $image = $OUTPUT->image_url('almondb/block02/'.$i, 'theme');
        }
        $templatecontext['block02'][$j]['icon'] = $newstr;
        $templatecontext['block02'][$j]['image'] = $image;
        $templatecontext['block02'][$j]['title'] = format_string($theme->settings->$block02title);
        $templatecontext['block02'][$j]['caption'] = $theme->settings->$block02caption;
        $templatecontext['block02'][$j]['button'] = format_string($theme->settings->$block02button);
        $templatecontext['block02'][$j]['buttonurl'] = format_string($theme->settings->$block02buttonlink);
    }
    if ($count == 2) {
        $templatecontext['count'] = "col-lg-6";
    } else if ($count == 3) {
        $templatecontext['count'] = "col-lg-4";
    } else {
        $templatecontext['count'] = "col-lg-3";
    }
    return $templatecontext;
}
/**
 * Frontpage block03.
 * @return url
 */
function theme_almondb_frontpageblock03() {
    global $OUTPUT;

    $theme = theme_config::load('almondb');
    $templatecontext['block03enabled'] = $theme->settings->block03enabled;
    if (empty($templatecontext['block03enabled'])) {
        return $templatecontext;
    }
    $templatecontext['block03desing'.$theme->settings->block03desing] = $theme->settings->block03desing;
    $templatecontext['block03header'] = $theme->settings->block03header;
    $count = 6;
    if ($theme->settings->block03desing == 2) {
        $count = 6;
    }
    for ($i = 1, $j = 0; $i <= $count; $i++, $j++) {
        $block03icon = "block03icon{$i}";
        $block03title = "block03title{$i}";
        $block03caption = "block03caption{$i}";
        $block03link = "block03link{$i}";

        $str = $theme->settings->$block03icon;
        $newstr = substr(strstr($str, ":"), 1, (strlen(strstr($str, ":"))) - 1);
        $templatecontext['block03'][$j]['icon'] = $newstr;
        $templatecontext['block03'][$j]['title'] = format_string($theme->settings->$block03title);
        $templatecontext['block03'][$j]['caption'] = format_string($theme->settings->$block03caption);
        $templatecontext['block03'][$j]['link'] = format_string($theme->settings->$block03link);
    }
    return $templatecontext;
}
/**
 * Frontpage block04.
 * @return url
 */
function theme_almondb_frontpageblock04() {
    global $OUTPUT;
    $theme = theme_config::load('almondb');
    $templatecontext['block04enabled'] = $theme->settings->block04enabled;
    if (empty($templatecontext['block04enabled'])) {
        return $templatecontext;
    }
    $templatecontext['block04desing'.$theme->settings->block04desing] = $theme->settings->block04desing;
    $templatecontext['block04header'] = $theme->settings->block04header;
    $templatecontext['block04button'] = $theme->settings->block04button;
    $templatecontext['block04buttonlink'] = $theme->settings->block04buttonlink;
    $count = 8;
    if ($theme->settings->block04desing == 1) {
        $count = 8;
    }
    for ($i = 1, $j = 0; $i <= $count; $i++, $j++) {
        $block04img = "sliderimageblock04img{$i}";
        $block04title = "block04title{$i}";
        $block04caption = "block04caption{$i}";
        $block04link = "block04link{$i}";
        $image = $theme->setting_file_url($block04img, $block04img);
        if (empty($image)) {
            $image = $OUTPUT->image_url('almondb/block04/'.$i, 'theme');
        }
        if ($i == 1) {
            $templatecontext['block04'][$j]['active'] = "1";
        } else {
            $templatecontext['block04'][$j]['active'] = "";
        }
        $templatecontext['block04'][$j]['image'] = $image;
        $templatecontext['block04'][$j]['title'] = format_string($theme->settings->$block04title);
        $templatecontext['block04'][$j]['caption'] = format_string($theme->settings->$block04caption);
        $templatecontext['block04'][$j]['link'] = format_string($theme->settings->$block04link);

    }
    for ($i = 1, $j = 0; $i <= 4; $i++, $j++) {
        $block04img = "sliderimageblock04img{$i}";
        $block04title = "block04title{$i}";
        $block04caption = "block04caption{$i}";
        $block04link = "block04link{$i}";
        $image = $theme->setting_file_url($block04img, $block04img);
        if (empty($image)) {
            $image = $OUTPUT->image_url('almondb/block04/'.$i, 'theme');
        }
        $templatecontext['block04_1'][$j]['image'] = $image;
        $templatecontext['block04_1'][$j]['title'] = format_string($theme->settings->$block04title);
        $templatecontext['block04_1'][$j]['caption'] = format_string($theme->settings->$block04caption);
        $templatecontext['block04_1'][$j]['link'] = format_string($theme->settings->$block04link);
    }
    for ($i = 5, $j = 0; $i <= 8; $i++, $j++) {
        $block04img = "sliderimageblock04img{$i}";
        $block04title = "block04title{$i}";
        $block04caption = "block04caption{$i}";
        $block04link = "block04link{$i}";
        $image = $theme->setting_file_url($block04img, $block04img);
        if (empty($image)) {
            $image = $OUTPUT->image_url('almondb/block04/'.$i, 'theme');
        }
        $templatecontext['block04_2'][$j]['image'] = $image;
        $templatecontext['block04_2'][$j]['title'] = format_string($theme->settings->$block04title);
        $templatecontext['block04_2'][$j]['caption'] = format_string($theme->settings->$block04caption);
        $templatecontext['block04_2'][$j]['link'] = format_string($theme->settings->$block04link);
    }
    return $templatecontext;
}
/**
 * Frontpage block05.
 * @return url
 */
function theme_almondb_frontpageblock05() {
    global $OUTPUT;

    $theme = theme_config::load('almondb');
    $templatecontext['block05enabled'] = $theme->settings->block05enabled;
    if (empty($templatecontext['block05enabled'])) {
        return $templatecontext;
    }
    $templatecontext['block05desing'.$theme->settings->block05desing] = $theme->settings->block05desing;
    $templatecontext['block05header'] = $theme->settings->block05header;
    $image = $theme->setting_file_url('sliderimageblock05img', 'sliderimageblock05img');
    if (empty($image)) {
        $image = $OUTPUT->image_url('almondb/block05/1', 'theme');
    }
    $templatecontext['block05image'] = $image;
    for ($i = 1, $j = 0; $i <= 3; $i++, $j++) {
        $block05icon = "block05icon{$i}";
        $block05title = "block05title{$i}";
        $block05caption = "block05caption{$i}";
        $block05link = "block05link{$i}";

        $str = $theme->settings->$block05icon;
        $newstr = substr(strstr($str, ":"), 1, (strlen(strstr($str, ":"))) - 1 );
        $templatecontext['block05'][$j]['icon'] = $newstr;
        $templatecontext['block05'][$j]['title'] = format_string($theme->settings->$block05title);
        $templatecontext['block05'][$j]['caption'] = format_string($theme->settings->$block05caption);
        $templatecontext['block05'][$j]['link'] = format_string($theme->settings->$block05link);
    }
    return $templatecontext;
}
/**
 * Frontpage block06.
 * @return url
 */
function theme_almondb_frontpageblock06() {
    global $OUTPUT;

    $theme = theme_config::load('almondb');
    $templatecontext['block06enabled'] = $theme->settings->block06enabled;
    if (empty($templatecontext['block06enabled'])) {
        return $templatecontext;
    }
    $templatecontext['block06color'] = $theme->settings->block06color;
    $templatecontext['block06desing'.$theme->settings->block06desing] = $theme->settings->block06desing;
    $templatecontext['block06header'] = $theme->settings->block06header;
    $templatecontext['block06caption'] = $theme->settings->block06caption;
    $templatecontext['block06button'] = $theme->settings->block06button;
    $templatecontext['block06buttonlink'] = $theme->settings->block06buttonlink;
    $image = $theme->setting_file_url('sliderimageblock06img', 'sliderimageblock06img');
    if (empty($image)) {
        $image = $OUTPUT->image_url('almondb/block06/1', 'theme');
    }
    $templatecontext['block06image'] = $image;
    return $templatecontext;
}
/**
 * Frontpage block07.
 * @return url
 */
function theme_almondb_frontpageblock07() {
    GLOBAL  $CFG, $DB, $OUTPUT;
    $theme = theme_config::load('almondb');
    $templatecontext['block07enabled'] = $theme->settings->block07enabled;
    $templatecontext['block07teacherenabled'] = $theme->settings->block07teacherenabled;
    if (empty($templatecontext['block07enabled'])) {
        return $templatecontext;
    }
    $templatecontext['block07desing'.$theme->settings->block07desing] = $theme->settings->block07desing;
    $templatecontext['block07header'] = $theme->settings->block07header;
    $templatecontext['block07button'] = $theme->settings->block07button;
    $templatecontext['block07buttonlink'] = $theme->settings->block07buttonlink;
    $templatecontext['block07fullname'] = 0;
    $templatecontext['block07shortname'] = 0;
    if ($theme->settings->block07title == 'shortname') {
        $templatecontext['block07shortname'] = 1;
    } else {
        $templatecontext['block07fullname'] = 1;
    }
    require_once( $CFG->libdir . '/filelib.php' );
    $count = $theme->settings->block07count + 1;
    // SQL Server.
    if ($CFG->dbtype === 'sqlsrv') {
        $sql = "SELECT TOP ". $count ." c.id, c.fullname, c.shortname, c.summary, c.timemodified, c.category, c.visible";
    } else {
        $sql = "SELECT  c.id, c.fullname, c.shortname, c.summary, c.timemodified, c.category, c.visible";
    }
    $sql = $sql." FROM {course} c";
    $sql = $sql." WHERE c.visible = 1";
    $sql = $sql." ORDER BY c.timemodified DESC";
    if ($CFG->dbtype != 'sqlsrv') {
        $sql = $sql." LIMIT ". $count;
    }
    $courses = $DB->get_records_sql($sql);
    foreach ($courses as $id => $course) {
        $category = $DB->get_record('course_categories', array('id' => $course->category));
        if (!empty($category)) {
            $course->categoryName = $category->name;
            $course->categoryId = $category->id;
            $allcourses[$id] = $course;
        }
    };
    $j = 0;
    $sql = "SELECT  en.courseid, en.cost, en.currency";
    $sql = $sql." FROM {enrol} en";
    $sql = $sql." WHERE en.courseid = :courseid and en.status = 0 and en.cost != 'NULL'";
    $templatecontext['block07priceshow'] = $theme->settings->block07priceshow;
    foreach ($allcourses as $id => $course) {
        $templatecontext['block07'][$j]['fullname'] = $course->fullname;
        $templatecontext['block07'][$j]['shortname'] = $course->shortname;
        $templatecontext['block07'][$j]['summary'] = $course->summary;
        $templatecontext['block07'][$j]['update'] = gmdate("M d,Y", $course->timemodified);
        $templatecontext['block07'][$j]['categoryName'] = $course->categoryName;
        $templatecontext['block07'][$j]['courselink'] = "course/view.php?id=".$id;
        $templatecontext['block07'][$j]['categorylink'] = "course/index.php?categoryid=".$course->categoryId;
        $templatecontext['block07'][$j]['imgurl'] = almondb_get_course_image($id);
        $enrol = $DB->get_records_sql($sql, array('courseid' => $id));
        if (empty($enrol)) {
            $templatecontext['block07'][$j]['currency'] = get_string('block07enrol', 'theme_almondb');
        } else {
            foreach ($enrol as $enrols) {
                $templatecontext['block07'][$j]['cost'] = $enrols->cost;
                $templatecontext['block07'][$j]['currency'] = $enrols->currency;
            };
        }
        $context = context_course::instance($id);
        $role = $theme->settings->block07studentrole;
        $students = get_role_users($role, $context);
        $templatecontext['block07'][$j]['studentscount'] = count($students);
        $role = $theme->settings->block07teacherrole;
        $teachers = get_role_users($role, $context);
        if (!empty($theme->settings->block07teacherenabled)) {
            foreach ($teachers as $id => $teacher) {
                $templatecontext['block07'][$j]['teachername'] = fullname($teacher);
                $teacher->imagealt = "teacher";
                $templatecontext['block07'][$j]['userpicture'] = $OUTPUT->user_picture($teacher);
            }
        }
        $j++;
        if ($j > $count) {
            break;
        }
    };
    return $templatecontext;
}
/**
 * Frontpage block08.
 * @return url
 */
function theme_almondb_frontpageblock08() {
    GLOBAL $CFG, $DB, $OUTPUT, $PAGE;
    $theme = theme_config::load('almondb');
    $templatecontext['block08enabled'] = $theme->settings->block08enabled;
    if (empty($templatecontext['block08enabled'])) {
        return $templatecontext;
    }
    $count = $theme->settings->block08count;
    $templatecontext['block08desing'.$theme->settings->block08desing] = $theme->settings->block08desing;
    $templatecontext['block08header'] = $theme->settings->block08header;
    $templatecontext['block08caption'] = $theme->settings->block08caption;
    $teacherrole = $theme->settings->block08showrole;
    if ($CFG->dbtype === 'sqlsrv') {
        $sql = "SELECT TOP ". $count ." ra.userid, ra.roleid";
    } else {
        $sql = "SELECT  ra.userid, ra.roleid";
    }
    $sql = $sql." FROM {role_assignments} ra";
    $sql = $sql." JOIN {context} ctx on ra.contextid = ctx.id";
    $sql = $sql." WHERE ra.roleid = :roleid";
    $sql = $sql." GROUP by ra.userid, ra.roleid";
    if ($CFG->dbtype != 'sqlsrv') {
        $sql = $sql." LIMIT ". $count;
    }
    // And ctx.contextlevel = '50'?
    if (!empty($theme->settings->block08total)) {
        $courses = get_courses('all', 'c.timemodified DESC');
    }
    $roleassignments = $DB->get_records_sql($sql, array('roleid' => $teacherrole));
    if (!empty($roleassignments)) {
        $j = 0;
        $coursecount = 0;
        $studentscount = 0;
        foreach ($roleassignments as $roleassignment) {
            $templatecontext['block08'][$j]['showdescription'] = $theme->settings->block08description;
            if ($user = $DB->get_record('user', array('id' => $roleassignment->userid))) {
                $user->imagealt = "teacher";
                $templatecontext['block08'][$j]['teachername'] = $user->firstname." ".$user->lastname;
                $templatecontext['block08'][$j]['description'] = $user->description;
                $templatecontext['block08'][$j]['userpicture'] =
                    $OUTPUT->user_picture($user, array('class' => '', 'size' => '250'));
                $templatecontext['block08'][$j]['userURL'] =
                    new moodle_url('/user/profile.php', array('id' => $roleassignment->userid ));
                $userpicture = new user_picture($user);
                $userpicture->size = 512;
                $url = $userpicture->get_url($PAGE)->out(false);
                $templatecontext['block08'][$j]['userpictureURL'] = $url;
            }
            $templatecontext['block08total'] = $theme->settings->block08total;
            if (!empty($templatecontext['block08total'])) {
                foreach ($courses as $id => $course) {
                    $context = context_course::instance($id);
                    $teachers = get_role_users($teacherrole, $context);
                    foreach ($teachers as $id => $teacher) {
                        if ($teacher->username == $user->username) {
                            $coursecount++;
                            $role = $DB->get_field('role', 'id', array('id' => $theme->settings->block08studentrole));
                            $students = get_role_users($role, $context);
                            $studentscount = $studentscount + count($students);
                        }
                    }
                }
            }
            $templatecontext['block08'][$j]['coursecount'] = $coursecount;
            $templatecontext['block08'][$j]['studentscount'] = $studentscount;
            $coursecount = 0;
            $studentscount = 0;
            $j = $j + 1;
            if ($j == $theme->settings->block08count) {
                break;
            }
        }
    }
    return $templatecontext;
}
/**
 * Frontpage block09.
 * @return url
 */
function theme_almondb_frontpageblock09() {
    GLOBAL $CFG, $DB;
    require_once($CFG->libdir.'/formslib.php');
    $theme = theme_config::load('almondb');
    $templatecontext['block09enabled'] = $theme->settings->block09enabled;
    if (empty($templatecontext['block09enabled'])) {
         return $templatecontext;
    }
    $count = $theme->settings->block09count;
    $templatecontext['block09desing'.$theme->settings->block09desing] = $theme->settings->block09desing;
    $templatecontext['block09boxshadow'] = $theme->settings->block09boxshadow;
    $templatecontext['block09header'] = $theme->settings->block09header;
    $templatecontext['block09caption'] = $theme->settings->block09caption;
    $templatecontext['block09background'] = $theme->settings->block09background;
    if ($CFG->dbtype === 'sqlsrv') {
        $sql = "SELECT TOP ". $count ." id, name, parent, coursecount, visible, depth, path";
    } else {
        $sql = "SELECT id, name, parent, coursecount, visible, depth, path";
    }
    $sql = $sql." FROM {course_categories}";
    $sql = $sql." WHERE coursecount > 0 and visible = 1";
    if (!empty($theme->settings->block09ctgid)) {
        $sql = $sql." and ". $theme->settings->block09ctgid;
    }
    $sql = $sql." ORDER BY coursecount DESC";
    if ($CFG->dbtype != 'sqlsrv') {
        $sql = $sql." LIMIT ". $count;
    }
    $categorys = $DB->get_records_sql($sql, array());
    if (!empty($categorys)) {
        $j = 0;
        foreach ($categorys as $category) {
            $templatecontext['block09'][$j]['catagoryname'] = $category->name;
            $templatecontext['block09'][$j]['coursecount'] = $category->coursecount;
            $templatecontext['block09'][$j]['catagoryURL'] = new moodle_url('/course/index.php?categoryid='. $category->id);
            $templatecontext['block09'][$j]['bgcolor'] = "";
            if ($theme->settings->block09background == '1') {
                $templatecontext['block09'][$j]['bgcolor'] = theme_almondb_random_color();
            }
            $templatecontext['block09'][$j]['imgurl'] = "";
            if ($theme->settings->block09background == '2') {
                $courses = get_courses($category->id);
                if (!empty($courses)) {
                    foreach ($courses as $course) {
                        $imgurl = almondb_get_course_image($course->id);
                        if (!empty($imgurl)) {
                            $templatecontext['block09'][$j]['imgurl'] = $imgurl;
                            break;
                        }
                    }
                }
            }
            $j++;
            if ($j == $theme->settings->block09count) {
                break;
            }
        }
    }
    return $templatecontext;
}
/**
 * Frontpage block10.
 * @return url
 */
function theme_almondb_frontpageblock10() {
    global $OUTPUT;

    $theme = theme_config::load('almondb');
    $templatecontext['block10enabled'] = $theme->settings->block10enabled;
    if (empty($templatecontext['block10enabled'])) {
        return $templatecontext;
    }
    $templatecontext['block10desing'.$theme->settings->block10desing] = $theme->settings->block10desing;
    $templatecontext['block10header'] = $theme->settings->block10header;
    $count = $theme->settings->block10count;
    for ($i = 1, $j = 0; $i <= $count; $i++, $j++) {
        $block10img = "sliderimageblock10img{$i}";
        $block10name = "block10name{$i}";
        $block10job = "block10job{$i}";
        $block10caption = "block10caption{$i}";
        $block10link = "block10link{$i}";
        if ($i == 1) {
            $templatecontext['block10'][$j]['active'] = "1";
        } else {
            $templatecontext['block10'][$j]['active'] = "";
        }
        $image = $theme->setting_file_url($block10img, $block10img);
        if (empty($image)) {
            $image = $OUTPUT->image_url('almondb/block10/'.$i, 'theme');
        }
        $templatecontext['block10'][$j]['block10image'] = $image;
        $templatecontext['block10'][$j]['block10name'] = $theme->settings->$block10name;
        $templatecontext['block10'][$j]['block10job'] = $theme->settings->$block10job;
        $templatecontext['block10'][$j]['block10caption'] = format_string($theme->settings->$block10caption);
        $templatecontext['block10'][$j]['block10linkurl'] = format_string($theme->settings->$block10link);
    }
    return $templatecontext;
}
/**
 * Frontpage block11.
 * @return url
 */
function theme_almondb_frontpageblock11() {
    // Site blog frontpage.
    global $CFG, $OUTPUT, $DB;
    $theme = theme_config::load('almondb');
    $templatecontext['block11enabled'] = $theme->settings->block11enabled;
    if (empty($templatecontext['block11enabled'])) {
        return $templatecontext;
    }
    $templatecontext['block11desing'.$theme->settings->block11desing] = $theme->settings->block11desing;
    $templatecontext['block11header'] = $theme->settings->block11header;
    $templatecontext['block11caption'] = $theme->settings->block11caption;
    $count = $theme->settings->block11count;
    if ($CFG->dbtype === 'sqlsrv') {
        $sql = "SELECT TOP ". $count ." *";
    } else {
        $sql = "SELECT *";
    }
    $sql = $sql." FROM {post} pt";
    if (isloggedin()) {
        $sql = $sql." WHERE pt.publishstate = 'public' or pt.publishstate = 'site'";
    } else {
        $sql = $sql." WHERE pt.publishstate = 'public'";
    }
    $sql = $sql." ORDER BY pt.created DESC";
    if ($CFG->dbtype != 'sqlsrv') {
        $sql = $sql." LIMIT ". $count;
    }
    $posts = $DB->get_records_sql($sql, array());
    if (!empty($posts)) {
        $j = 0;
        foreach ($posts as $post) {
            $templatecontext['block11'][$j]['subject'] = $post->subject;
            $templatecontext['block11'][$j]['summary'] = $post->summary;
            $templatecontext['block11'][$j]['created'] = gmdate("d,m,Y", $post->created);
            $templatecontext['block11'][$j]['lastmodified'] = gmdate("d/m/Y", $post->lastmodified);
            $templatecontext['block11'][$j]['postURL'] = new moodle_url('/blog/index.php?entryid='. $post->id);
            $templatecontext['block11'][$j]['imgurl'] = almondb_get_blog_post_image($post->id);
            $templatecontext['block11'][$j]['tag'] = $OUTPUT->tag_list(core_tag_tag::get_item_tags('core', 'post', $post->id));
            if ($user = $DB->get_record('user', array('id' => $post->userid))) {
                $templatecontext['block11'][$j]['userpicture'] =
                    $OUTPUT->user_picture($user, array('size' => '25'));
                $templatecontext['block11'][$j]['userURL'] =
                    new moodle_url('/user/profile.php', array('id' => $post->userid ));
                $templatecontext['block11'][$j]['username'] = fullname($user);
            }
            if ($j == 0) {
                $templatecontext['block11'][$j]['active'] = "1";
            } else {
                $templatecontext['block11'][$j]['active'] = "";
            }
            $by = new stdClass();
            $by->name = fullname($user);
            $by->date = userdate($post->created);
            $templatecontext['block11'][$j]['userdate'] = $OUTPUT->container( $by->date, 'userdate');
            $j++;
        }
    }
    return $templatecontext;
}
/**
 * Frontpage block18.
 * @return url
 */
function theme_almondb_frontpageblock18() {
    $theme = theme_config::load('almondb');
    $templatecontext['block18enabled'] = $theme->settings->block18enabled;
    if (empty($templatecontext['block18enabled'])) {
        return $templatecontext;
    }
    $templatecontext['block18title'] = $theme->settings->block18title;
    $templatecontext['block18caption'] = $theme->settings->block18caption;
    $templatecontext['block18csslink'] = $theme->settings->block18csslink;
    $templatecontext['block18css'] = $theme->settings->block18css;
    return $templatecontext;
}
/**
 * Frontpage block19.
 * @return url
 */
function theme_almondb_frontpageblock19() {
    global $OUTPUT;
    $theme = theme_config::load('almondb');
    $templatecontext['block19enabled'] = $theme->settings->block19enabled;
    if (empty($templatecontext['block19enabled'])) {
        return $templatecontext;
    }
    $templatecontext['block19desing'.$theme->settings->block19desing] = $theme->settings->block19desing;
    $templatecontext['block19headerenabled'] = $theme->settings->block19headerenabled;
    if (!empty($templatecontext['block19headerenabled'])) {
        $templatecontext['block19header'] = $theme->settings->block19header;
        $templatecontext['block19caption'] = $theme->settings->block19caption;
    }
    $j = 0;
    for ($i = 1; $i <= 6; $i++) {
        $block19img = "sliderimageblock19img{$i}";
        $block19link = "block19link{$i}";
        $image = $theme->setting_file_url($block19img, $block19img);
        if (empty($image)) {
            $filename = $OUTPUT->image_url('almondb/block19/'.$i, 'theme');
            if (@getimagesize($filename)) {
                $image = $OUTPUT->image_url('almondb/block19/'.$i, 'theme');
            } else {
                $image = "";
            }
        }
        if (!empty($image)) {
            $templatecontext['block19'][$j]['image19'] = $image;
            $templatecontext['block19'][$j]['link'] = format_string($theme->settings->$block19link);
            $j++;
        }
    }
    return $templatecontext;
}
/**
 * Frontpage block20.
 * @return url
 */
function theme_almondb_frontpageblock20() {
    global $OUTPUT;

    $theme = theme_config::load('almondb');
    $templatecontext['block20enabled'] = $theme->settings->block20enabled;
    if (empty($templatecontext['block20enabled'])) {
        return $templatecontext;
    }
    $templatecontext['block20moodle'] = $theme->settings->block20moodle;
    $templatecontext['footerbackgroundcolor'] = $theme->settings->footerbackgroundcolor;
    switch ($theme->settings->block20logo) {
        case 'Logo':
            $templatecontext['block20logologo'] = true;
            break;
        case 'Small logo':
            $templatecontext['block20logosmall'] = true;
            break;
    }
    $templatecontext['block20col1header'] = $theme->settings->block20col1header;
    $templatecontext['block20col1caption'] = $theme->settings->block20col1caption;
    $templatecontext['block20col2header'] = $theme->settings->block20col2header;
    $templatecontext['block20col2links'] = theme_almondb_links($theme->settings->block20col2link);
    $templatecontext['block20col3header'] = $theme->settings->block20col3header;
    $templatecontext['block20col3links'] = theme_almondb_links($theme->settings->block20col3link);
    $templatecontext['block20col4header'] = $theme->settings->block20col4header;
    $templatecontext['block20col4caption'] = $theme->settings->block20col4caption;
    $templatecontext['block20social'] = $theme->settings->block20social;
    $templatecontext['block20copyright'] = $theme->settings->block20copyright;
    return $templatecontext;
}
