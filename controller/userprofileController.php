<?php
include 'model/DbModel.php';



$id = $_GET['id'];

if (empty($_POST)) {
    $user_data = where('usertb', 'userid', '=', $_GET['id']);

    if (empty($user_data)) {
        echo ('No User Data Found!');
        // header("Location: ?r=usermanage");
        die;
    }

    if (isset($_POST)) {
        include "view/userprofile.php";
        return;
    }
}
