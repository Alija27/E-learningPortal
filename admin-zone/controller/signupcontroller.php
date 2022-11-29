<?php

include 'model/DbModel.php';
checkadmin();

if (empty($_POST)) {
    include 'view/signup.php';
    return;
}

try {

    $flag = empty($_POST['firstname']) || empty($_POST['lastname']) ||   empty($_POST['email']) || empty($_POST['address']) || empty($_POST['password']) || empty($_POST['usertype']);

    //validate user inputdata
    if ($flag) {
        $error['body'] = 'All input field are required.';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/signup.php';
        return;
    }
    //checking minimum length of password.
    $password = md5($_POST['password']);
    if (strlen($password) < 7) {
        $error['body'] = 'Password minimum length is 7.';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/signup.php';
        return;
    }

    //checking if email already exists.
    $email = filterText($_POST['email']);
    $valudate = find_user_by_email($email);
    if ($valudate) {
        $error['body'] = 'Email already taken.';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/signup.php';
        return;
    }

    $firstname = filterText($_POST['firstname']);
    $lastname = filterText($_POST['lastname']);
    $address = filterText($_POST['address']);
    $usertype = filterText($_POST['usertype']);


    /* $phone = filterText($_POST['phone']); */
    $target = "";
    if (!empty($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
        $target = "images/" . basename($_FILES['fileToUpload']['name']);
        //  echo $target;
        //die();
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);
    }
    /* echo "hello"; */
    $user = signup_new_user($firstname, $lastname, $email, $address, $password, $target, $usertype);
    if ($user) {
        $msg['title'] = 'Success!!';
        $msg['body'] = "You have successfully signup.";
        $msg['type'] = 'success';
        setFlash('message', $msg);
        header("location:" . $base_url . "?r=signup");
    } else {
        throwError(500, 'Unable to complete your request.');
    }
} catch (Exception $ex) {
    throwError();
}


/* PSR-4 
PSR-12 
get Composer.org
click on add php to path*/