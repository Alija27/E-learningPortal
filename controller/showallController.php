<?php
include 'model/DbModel.php';
$id = $_GET['course_id'];

$course_detail = findId('course', 'course_id', $id);



$semesters = ['First', 'Second', 'Third', 'Fourth', 'Fifth', 'Sixth', 'Seventh', 'Eight'];

include "view/showall.php";
