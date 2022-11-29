<?php


include 'model/DbModel.php';

checkadmin();

if (empty($_POST)) {

    include 'view/uploadsyllabus.php';
    return;
}


try {

    $flag = empty($_POST['name'])  ||  empty($_POST['course_id']) ||  empty($_POST['semester_num']) ||  empty($_POST['sid']) || empty($_FILES['upload']);

    //validate course inputdata
    if ($flag) {
        $error['body'] = 'All input field are required.';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/uploadsyllabus.php';
        return;
    }




    $name = filterText($_POST['name']);
    $course_id = filterText($_POST['course_id']);
    $semester_num = filterText($_POST['semester_num']);
    $sid = filterText($_POST['sid']);



    $target = "";
    if (!empty($_FILES["upload"]) && $_FILES["upload"]["error"] == 0) {
        $target = "pdf/" . basename($_FILES['upload']['name']);
        //  echo $target;
        //die();
        move_uploaded_file($_FILES['upload']['tmp_name'], $target);
    }

    $addnotes = uploadsyllabus($name, $course_id, $semester_num, $sid, $target);
    if ($addnotes) {
        $msg['title'] = 'Success!!';
        $msg['body'] = "Sucessfully Uploaded";
        $msg['type'] = 'success';
        setFlash('message', $msg);

        header("location:" . $base_url . "?r=uploadsyllabus");
    } else {
        throwError(500, 'Unable to complete your request.');
        echo "Unable to Upload";
    }
} catch (Exception $ex) {
    throwError();
}
