<?php
include "model/DbModel.php";
checkadmin();
if (empty($_GET['id'])) {
    echo "Subject  ID is required";
    die;
}

$id = $_GET['id'];

if (empty($_POST)) {
    $course_data = where('subject', 'sid', '=', $_GET['id']);

    if (empty($course_data)) {
        echo ('No Subject Data Found!');
        // header("Location: ?r=usermanage");
        die;
    }

    if (isset($_POST)) {
        include "view/editsubject.php";
        return;
    }
}


$sub_name = request('sub_name');
$course_id = request('course_id');
$semester_num = request('semester_num');
$sub_code = request('sub_code');
$credit_hr = request('credit_hr');
$is_elective = request('is');





if (empty($sub_name) || empty($course_id)) {
    echo ('Fill all the fields!');
}


$data = compact('sub_name', 'course_id', 'semester_num', 'sub_code', 'credit_hr', 'is_elective');



update('subject', 'sid', 'sub_name', 'course_id', 'semester_num', 'sub_code', 'credit_hr', 'is_elective', $_GET['id'], $data);
if ($data) {
    $msg['title'] = 'Success!!';
    $msg['body'] = "Sucessfully Updated";
    $msg['type'] = 'success';
    setFlash('message', $msg);

    header("location:" . $base_url . "?r=managesubject");
} else {
    throwError(500, 'Unable to complete your request.');
    echo "Unable to Upload";
}
/*  *//* header("Location: ?r=usermanage");
 */