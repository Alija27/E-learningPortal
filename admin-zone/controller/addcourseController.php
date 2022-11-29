


<?php

include 'model/DbModel.php';
checkadmin();

if (empty($_POST)) {

    include 'view/addcourse.php';
    return;
}


try {
    $flag =  empty($_POST['c_name']) || empty($_POST['c_description']) || empty($_POST['c_duration'] || empty($_POST['semester']));

    //validate course inputdata
    if ($flag) {
        $error['body'] = 'All input field are required.';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/addcourse.php';
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

    $c_name = filterText($_POST['c_name']);
    $c_description = filterText($_POST['c_description']);
    $c_duration = filterText($_POST['c_duration']);
    $semester = filterText($_POST['semester']);




    $banner = "";
    if (!empty($_FILES["banner"]) && $_FILES["banner"]["error"] == 0) {
        $banner = "images/" . basename($_FILES['banner']['name']);
        /*  echo $target;
        die(); */
        move_uploaded_file($_FILES['banner']['tmp_name'], $banner);
    }

    $courseadd = add_new_course($c_name, $c_description, $c_duration, $banner, $semester);
    if ($courseadd) {
        $msg['title'] = 'Success!!';
        $msg['body'] = "Sucessfully Uploaded";
        $msg['type'] = 'success';
        setFlash('message', $msg);
        echo "Sucessfully Uploaded";
        header("location:" . $base_url . "?r=addcourse");
    } else {
        throwError(500, 'Unable to complete your request.');
        echo "Unable to Upload";
    }
} catch (Exception $ex) {
    throwError();
}
