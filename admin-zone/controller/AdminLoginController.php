//Admin Controller
<?php

include 'model/DbModel.php';
checkadmin();
if (empty($_POST)) {
    include 'view/AdminLogin.php';
    return;
}

try {
    echo "i";
    if (empty($_POST['email']) || empty($_POST['password'])) {

        $error['body'] = 'email and password can not be empty.';
        $error['title'] = 'Info!!!';
        $error['type'] = 'info';
        setFlash('message', $error);
        include 'view/AdminLogin.php';
        return;
    }
    $email = filterText($_POST['email']);
    $password = filterText($_POST['password']);
    echo "a";
    /* $admin = db_login($email, $password);
    if ($admin) {
        $_SESSION['admin']['login'] = TRUE;
        echo "la";
        /* $_SESSION['user']['user_id'] = $user['userid'];
        $_SESSION['user']['user_name'] = $user['username'];  
        $_SESSION['admin']['admin_id'] = $user['adminid'];
        echo "laa";
        $_SESSION['admin']['email'] = $user['email'];
        echo "laaa";
        if($user["user_type"]==1)
        redirect('Home'); */

    /*         header("location:admin-zone/view/Home/");
 */ /* else
        
        redirect('AdminSignup');  */

    $user = db_login($email, $password);
    echo "b";
    if ($user) {
        echo "c";
        $_SESSION['user']['login'] = TRUE;
        /* $_SESSION['user']['user_id'] = $user['userid'];
            $_SESSION['user']['user_name'] = $user['username']; */
        $_SESSION['user']['user_id'] = $user['adminid'];
        $_SESSION['user']['email'] = $user['email'];

        if ($user["user_type"] == 1)
            redirect('Home');

        else

            redirect('AdminSignup');
    } else {
        echo "z";
        $error['body'] = 'No user found with given email and password.';
        $error['title'] = 'Info!!!';
        $error['type'] = 'info';
        setFlash('message', $error);
        include 'view/AdminLogin.php';
        return;
    }
} catch (Exception $ex) {
    include 'controller/ErrorController.php';
}
