<!-- <?php include "view/contact.php";
        ?> -->


<?php
include 'model/DbModel.php';
checkadmin();
/* include "view/contactus.php"; */
if (empty($_POST)) {
    include "view/contactus.php";
    return;
}
try {
    if (empty($_POST['name']) ||  empty($_POST['collegename']) || empty($_POST['email']) ||  empty($_POST['messege'])) {

        $error['body'] = '';
        $error['title'] = 'Info!!!';
        $error['type'] = 'info';
        setFlash('message', $error);
        include 'view/contactus.php';
        return;
    }
    $name = filterText($_POST['name']);
    $collegename = filterText($_POST['collegename']);

    $email = filterText($_POST['email']);
    $messege = filterText($_POST['messege']);

    $result = contactus($name, $collegename, $email, $messege);
    if ($result) {
        redirect('home');
    } else {
        $error['body'] = 'unable to add your detail try again please';
        $error['title'] = 'Info!!!';
        $error['type'] = 'info';
        setFlash('message', $error);
        include 'view/contactus.php';
        return;
    }
} catch (Exception $e) {
    throwError();
}
