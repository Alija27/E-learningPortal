<?php
include "model/DbModel.php";
checkadmin();
if (empty($_GET['id'])) {
    echo "Note  ID is required";
    die;
}

$id = $_GET['id'];

if (empty($_POST)) {
    $course_data = where('note', 'id', '=', $_GET['id']);

    if (empty($course_data)) {
        echo ('No Note  Data Found!');
        // header("Location: ?r=usermanage");
        die;
    }

    if (isset($_POST)) {
        include "view/editnote.php";
        return;
    }
}


$name = request('name');
$course_id = request('course_id');
$semester_num = request('semester_num');
$sid = request('sid');





if (empty($name) || empty($course_id)) {
    echo ('Fill all the fields!');
}


$data = compact('name', 'semester_num', 'sid');



update('note', 'id', 'name', 'course_id', 'semester_num', 'sid', $_GET['id'], $data);

if ($data) {
    $msg['title'] = 'Success!!';
    $msg['body'] = "Sucessfully Updated";
    $msg['type'] = 'success';
    setFlash('message', $msg);

    header("location:" . $base_url . "?r=managenote");
} else {
    throwError(500, 'Unable to complete your request.');
    echo "Unable to Upload";
}
/*  *//* header("Location: ?r=usermanage");
 */