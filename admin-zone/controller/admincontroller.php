<?php

include 'model/Dbmodel.php';

checkadmin();
if (empty($_POST)) {
    include 'view/admin.php';
    return;
}

try {
    if (empty($_POST['username']) ||empty($_POST['email']) || empty($_POST['password'])) {
        
        $error['body'] = 'user name and password can not be empty.';
        $error['title'] = 'Info!!!';
        $error['type'] = 'info';
        setFlash('message', $error);
        include 'view/admin.php';
        return;
    }
    $username = filterText($_POST['username']);
    $email = filterText($_POST['email']);
    $password = filterText($_POST['password']);

    $user = db_login($username, $email, $password);
    if ($user) {
        $_SESSION['user']['login'] = TRUE;
        $_SESSION['user']['user_id'] = $user['userid'];
        $_SESSION['user']['user_name'] = $user['username'];
        header("location:dashboard");
    
    } else {
        $error['body'] = 'No user found with given email and password.';
        $error['title'] = 'Info!!!';
        $error['type'] = 'info';
        setFlash('message', $error);
        include 'view/admin.php';
        return;
    }
} catch (Exception $ex) {
    include 'controller/ErrorController.php';
}