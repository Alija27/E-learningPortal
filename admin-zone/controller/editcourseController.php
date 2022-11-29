<?php
include "model/DbModel.php";
checkadmin();
if (empty($_GET['id'])) {
    echo "Course  ID is required";
    die;
}

$id = $_GET['id'];

if (empty($_POST)) {
    $course_data = where('course', 'course_id', '=', $_GET['id']);

    if (empty($course_data)) {
        echo ('No User Data Found!');
        // header("Location: ?r=usermanage");
        die;
    }

    if (isset($_POST)) {
        include "view/editcourse.php";
        return;
    }
}


$c_name = request('c_name');
$c_description = request('c_description');

$c_duration = request('c_duration');
$banner = request('banner');
$semester = request('semester');




if (empty($c_name) || empty($c_description)) {
    echo ('Fill all the fields!');
}


$data = compact('c_name', 'c_description', 'c_duration', 'banner', 'semester',);



update('course', 'course_id', 'c_name', 'c_description', 'c_duration', 'banner', 'semester', $_GET['id'], $data);
if ($data) {
    $msg['title'] = 'Success!!';
    $msg['body'] = "Sucessfully Updated";
    $msg['type'] = 'success';
    setFlash('message', $msg);

    header("location:" . $base_url . "?r=managecourse");
} else {
    throwError(500, 'Unable to complete your request.');
    echo "Unable to Upload";
}
/*  *//* header("Location: ?r=usermanage");
 */