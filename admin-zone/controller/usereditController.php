<?php
include "model/DbModel.php";


if (empty($_GET['id'])) {
    echo "User ID is required";
    die;
}

$id = $_GET['id'];

if (empty($_POST)) {
    $user_data = where('usertb', 'userid', '=', $_GET['id']);

    if (empty($user_data)) {
        echo ('No User Data Found!');
        // header("Location: ?r=usermanage");
        die;
    }

    if (isset($_POST)) {
        include "view/useredit.php";
        return;
    }
}


$firstname = request('firstname');
$lastname = request('lastname');
$email = request('email');
$faculty = request('faculty');
$address = request('address');
$password = request('password');
$usertype = request('usertype');

/* $target = "";
if (!empty($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
    $target = "images/" . basename($_FILES['fileToUpload']['name']);
    //  echo $target;
    //die();
    move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);
} */


if (empty($firstname) || empty($lastname) || empty($email)) {
    echo ('Fill all the fields!');
}


$data = compact('firstname', 'lastname', 'email', 'faculty', 'address', 'target', 'usertype',);

if (!empty($password)) {
    $data['password'] = $password;
}

update('usertb', 'userid', $_GET['id'], $data);
if ($data) {
    $msg['title'] = 'Success!!';
    $msg['body'] = "Sucessfully Updated";
    $msg['type'] = 'success';
    setFlash('message', $msg);

    header("location:" . $base_url . "?r=usermanage");
} else {
    throwError(500, 'Unable to complete your request.');
    echo "Unable to Upload";
}
/*  *//* header("Location: ?r=usermanage");
 */