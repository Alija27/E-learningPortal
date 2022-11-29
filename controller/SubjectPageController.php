<?php
include 'model/DbModel.php';

$id = $_GET['id'];

$sub = findId('subject', 'sid', $id);

$syllabus = query("SELECT * FROM `syllabus` WHERE `sid` = $id LIMIT 1", [], false);

$notes  = where('note', 'sid', '=', $id, true);
$oldquestions  = where('oldquestion', 'sid', '=', $id, true);

// $semesters = ['First', 'Second', 'Third', 'Fourth', 'Fifth', 'Sixth', 'Seventh', 'Eight']; */

include "view/SubjectPage.php";
