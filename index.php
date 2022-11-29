<?php
session_start();
$base_url = 'http://localhost/e-learningPortal/';
$_SESSION['base_url'] = $base_url;
$_SESSION['active_url'] = '';
include 'Helper/SpecialCharHelper.php';
include 'Helper/FlashMessageHelper.php';
include 'Helper/ErrorHelper.php';
include 'Helper/RouteHelper.php';
if (isset($_GET['r'])) {
    $controller = $_GET['r'];
    switch ($controller) {
        case 'site':
            $_SESSION['active_url'] = 'site';
            include 'controller/siteController.php';
            break;
        case 'home':
            $_SESSION['active_url'] = 'home';
            include 'controller/homeController.php';
            break;

        case 'aboutus':
            $_SESSION['active_url'] = 'aboutus';
            include 'controller/aboutusController.php';
            break;

        case 'Bsc-CSIT':
            $_SESSION['active_url'] = 'Bsc-CSIT';
            include 'controller/Bsc-CSITController.php';
            break;

        case 'BCA':
            $_SESSION['active_url'] = 'BCA';
            include 'controller/BCAController.php';
            break;

        case 'BIM':
            $_SESSION['active_url'] = 'BIM';
            include 'controller/BIMController.php';
            break;

        case 'contactus':
            $_SESSION['active_url'] = 'contactus';
            include 'controller/contactusController.php';
            break;
        case 'showall':
            $_SESSION['active_url'] = 'showall';
            include 'controller\showallController.php';
            break;
        case 'signup':
            $_SESSION['active_url'] = 'signup';
            include 'controller/SignupController.php';
            break;

        case 'Login':
            $_SESSION['active_url'] = 'Login';
            include 'controller/LoginController.php';
            break;
        case 'logout':
            $_SESSION['active_url'] = 'logout';
            include 'controller/logoutController.php';
            break;

        case 'notice':
            $_SESSION['active_url'] = 'notice';
            include 'controller/noticeController.php';
            break;

        case 'SubjectPage':
            $_SESSION['active_url'] = 'SubjectPage';
            include 'controller/SubjectPageController.php';
            break;
        case 'try':
            $_SESSION['active_url'] = 'try';
            include 'controller/tryController.php';
            break;
        case 'editprofile':
            $_SESSION['active_url'] = 'editprofile';
            include 'controller/editprofileController.php';
            break;
        case 'viewpage':
            $_SESSION['active_url'] = 'viewpage';
            include 'controller/viewpageController.php';
            break;
        case 'userprofile':
            $_SESSION['active_url'] = 'userprofile';
            include 'controller/userprofileController.php';
            break;

        default:
            throwError(404, 'Requested page does not exists.');
            break;
    }
    return;
} else {
    $_SESSION['active_url'] = 'home';
    include 'controller/siteController.php';
}
