


<?php


include 'model/DbModel.php';
checkadmin();

if (empty($_POST)) {

    include 'view/notice.php';
    return;
}


try {
    $flag =  empty($_POST['heading']) || empty($_POST['notice']);

    //validate course inputdata
    if ($flag) {
        $error['body'] = 'All input field are required.';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/notice.php';
        return;
    }




    $heading = filterText($_POST['heading']);
    $notice = filterText($_POST['notice']);



    /*  $target = "";
    if (!empty($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
        $target = "images/" . basename($_FILES['fileToUpload']['name']);
        //  echo $target;
        //die();
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);
    } */

    $addnotice = notice($heading, $notice);
    if ($addnotice) {
        $msg['title'] = 'Success!!';
        $msg['body'] = "Sucessfully Uploaded";
        $msg['type'] = 'success';
        setFlash('message', $msg);
        echo "Sucessfully Uploaded";
        header("location:" . $base_url . "?r=notice");
    } else {
        throwError(500, 'Unable to complete your request.');
        echo "Unable to Upload";
    }
} catch (Exception $ex) {
    throwError();
}
