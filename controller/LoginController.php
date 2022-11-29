<?php

include 'model/DbModel.php';


if (empty($_POST)) {
    include 'view/Login.php';
    return;
}

try {
    if (empty($_POST['email']) || empty($_POST['password'])) {

        $error['body'] = 'email and password can not be empty.';
        $error['title'] = 'Info!!!';
        $error['type'] = 'info';
        setFlash('message', $error);
        include 'view/Login.php';
        return;
    }
    $email = filterText($_POST['email']);
    $password = filterText($_POST['password']);





    $user = db_login($email, $password);


    if ($user) {
        $_SESSION['user']['login'] = TRUE;
        /*  $_SESSION['user']['user_id'] = $user['userid'];
        $_SESSION['user']['email'] = $user['email']; */
        $_SESSION['user']['user_id'] = $user['userid'];
        $_SESSION['user']['email'] = $user['email'];

        if ($user["usertype"] == 1) {
            $_SESSION['admin']['login'] = TRUE;
            // $_SESSION['user']['user_id'] = $user['userid'];
            // $_SESSION['user']['firstname'] = $user['firstname'];
            $_SESSION['admin']['user_id'] = $user['userid'];
            $_SESSION['admin']['email'] = $user['email'];
            header("location:admin-zone/");

            /*             header("location:sir/");
 */            /*             header("location:" . "admin-zone1/");
        */
        } else

            redirect('home');
    } else {
        $error['body'] = 'No user found with given email and password.';
        $error['title'] = 'Info!!!';
        $error['type'] = 'info';
        setFlash('message', $error);
        include 'view/Login.php';
        return;
    }
} catch (Exception $ex) {
    include 'controller/ErrorController.php';
}
