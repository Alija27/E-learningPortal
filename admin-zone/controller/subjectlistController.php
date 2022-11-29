<?php

include 'model/DbModel.php';
checkadmin();
if (empty($_GET['course_id']) || empty($_GET['semester'])) {
    echo '<option value="">Choose Course and Semester</option>';
}

$course_id = request('course_id');
$semester = request('semester');

$subjects = query("SELECT * FROM subject WHERE `course_id` = $course_id AND `semester_num` = $semester");

include "view/subjectlist.php";
