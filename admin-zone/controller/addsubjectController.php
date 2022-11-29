


<?php

include 'model/DbModel.php';
checkadmin();

if (empty($_POST)) {
    include 'view/addsubject.php';
    return;
}

try {
    $flag = empty($_POST['sub_name']) || empty($_POST['course_id']) || empty($_POST['semester_num']) || empty($_POST['sub_code'] || empty($_POST['credit_hr']) || empty($_POST['is']));

    //validate user inputdata
    if ($flag) {
        $error['body'] = 'All input field are required.';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/addsubject.php';
        return;
    }


    /* //checking if email already exists.
    $email = filterText($_POST['email']);
    $valudate = find_user_by_email($email);
    if ($valudate) {
        $error['body'] = 'Email already taken.';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/addsubject.php';
        return;
    } */

    $sub_name = filterText($_POST['sub_name']);
    $course_id = filterText($_POST['course_id']);
    $semester_num = filterText($_POST['semester_num']);
    $sub_code = filterText($_POST['sub_code']);
    $credit_hr = filterText($_POST['credit_hr']);
    $is = filterText($_POST['is']);




    /* $syllabus = "";
    if (!empty($_FILES["syllabus"]) && $_FILES["syllabus"]["error"] == 0) {
        $syllabus = "images/" . basename($_FILES['syllabus']['name']);
        //  echo $target;
        //die();
        move_uploaded_file($_FILES['syllabus']['tmp_name'], $syllabus);
    } */

    $sub = add_new_subject($sub_name, $course_id, $semester_num, $sub_code, $credit_hr, $is);
    if ($sub) {
        $msg['title'] = 'Success!!';
        $msg['body'] = "Sucessfully Uploaded";
        $msg['type'] = 'success';
        setFlash('message', $msg);
        echo "Sucessfully Uploaded";
        header("location:" . $base_url . "?r=addsubject");
    } else {
        throwError(500, 'Unable to complete your request.');
        echo "Unable to Upload";
    }
} catch (Exception $ex) {
    throwError();
}
