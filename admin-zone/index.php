<?php
/* if (empty($_SESSION['user']['login'])) {
    header("location:../../1/");
    die();
} */
session_start();
$base_url = 'http://localhost/e-learningPortal/admin-zone/';
$_SESSION['base_url'] = $base_url;
$_SESSION['active_url'] = '';
include 'Helper/SpecialCharHelper.php';
include 'Helper/FlashMessageHelper.php';
include 'Helper/ErrorHelper.php';
include 'Helper/RouteHelper.php';

if (isset($_GET['r'])) {
    $controller = $_GET['r'];
    switch ($controller) {
        case 'dashboard':
            $_SESSION['active_url'] = 'dashboard';
            include 'controller/dashboardcontroller.php';
            break;
        case 'addcategory':
            $_SESSION['active_url'] = 'addcategory';
            include 'controller/addcategorycontroller.php';
            break;
        case 'managecatagory':
            $_SESSION['active_url'] = 'managecatagory';
            include 'controller/managecatagorycontroller.php';
            break;
        case 'addsub':
            $_SESSION['active_url'] = 'addsub';
            include 'controller/addsubcontroller.php';
            break;

        case 'managesub':
            $_SESSION['active_url'] = 'managesub';
            include 'controller/managesubcontroller.php';
            break;
        case 'addpost':
            $_SESSION['active_url'] = 'addpost';
            include 'controller/addpostcontroller.php';
            break;
        case 'managepost':
            $_SESSION['active_url'] = 'managepost';
            include 'controller/managepostcontroller.php';
            break;
        case 'trashpost':
            $_SESSION['active_url'] = 'trashpost';
            include 'controller/trashpostcontroller.php';
            break;
        case 'about':
            $_SESSION['active_url'] = 'about';
            include 'controller/aboutcontroller.php';
            break;
        case 'contact':
            $_SESSION['active_url'] = 'contact';
            include 'controller/contactcontroller.php';
            break;
        case 'pass':
            $_SESSION['active_url'] = 'pass';
            include 'controller/passcontroller.php';
            break;
        case 'logout':
            include 'controller/logoutcontroller.php';
            break;
        case 'waiting':
            $_SESSION['active_url'] = 'waiting';
            include 'controller/waitingcontroller.php';
            break;
        case 'approved':
            $_SESSION['active_url'] = 'approved';
            include 'controller/approvedcontroller.php';
            break;
        case 'signup':
            $_SESSION['active_url'] = 'signup';
            include 'controller/signupcontroller.php';
            break;


        case 'BCA':
            $_SESSION['active_url'] = 'BCA';
            include 'controller/BCAcontroller.php';
            break;
        case 'BIM':
            $_SESSION['active_url'] = 'BIM';
            include 'controller/BIMController.php';
            break;
            // case 'FirstSemester':
            //     $_SESSION['active_url'] = 'FirstSemester';
            //     include 'controller/Note-Bsc-CSIT-FirstSemester.php';
            //     break;

        case 'usermanage':
            $_SESSION['active_url'] = 'usermanage';
            include 'controller/usermanageController.php';
            break;
        case 'deleteuser':
            $_SESSION['active_url'] = 'deleteuser';
            include 'controller/userdeleteController.php';
            break;
        case 'useredit':
            $_SESSION['active_url'] = 'useredit';
            include 'controller/usereditController.php';
            break;
        case 'uploadnote':
            $_SESSION['active_url'] = 'uploadnote';
            include 'controller/uploadnoteController.php';
            break;
        case 'uploadsyllabus':
            $_SESSION['active_url'] = 'uploadsyllabus';
            include 'controller/uploadsyllabusController.php';
            break;
        case 'uploadoldquestion':
            $_SESSION['active_url'] = 'uploadoldquestion';
            include 'controller/uploadoldquestionController.php';
            break;

        case 'subjectlist':
            $_SESSION['active_url'] = 'subjectlist';
            include 'controller/subjectlistController.php';
            break;
        case 'managecourse':
            $_SESSION['active_url'] = 'managecourse';
            include 'controller/managecourseController.php';
            break;
        case 'editcourse':
            $_SESSION['active_url'] = 'editcourse';
            include 'controller/editcourseController.php';
            break;
        case 'managesubject':
            $_SESSION['active_url'] = 'managesubject';
            include 'controller/managesubjectController.php';
            break;
        case 'editsubject':
            $_SESSION['active_url'] = 'editsubject';
            include 'controller/editsubjectController.php';
            break;
        case 'managesyllabus':
            $_SESSION['active_url'] = 'managesyllabus';
            include 'controller/managesyllabusController.php';
            break;
        case 'editsyllabus':
            $_SESSION['active_url'] = 'editsyllabus';
            include 'controller/editsyllabusController.php';
            break;
        case 'managenote':
            $_SESSION['active_url'] = 'managenote';
            include 'controller/managenoteController.php';
            break;
        case 'editnote':
            $_SESSION['active_url'] = 'editnote';
            include 'controller/editnoteController.php';
            break;
        case 'manageoldquestion':
            $_SESSION['active_url'] = 'manageoldquestion';
            include 'controller/manageoldquestionController.php';
            break;
        case 'editoldquestion':
            $_SESSION['active_url'] = 'editodquestion';
            include 'controller/editoldquestionController.php';
            break;




            // Note Faculty Controller
            /* case 'NoteBsc-CSIT':
            $_SESSION['active_url'] = 'NoteBsc-CSIT';
            include 'controller/NoteController/NoteBsc-CSITController/NoteBsc-CSITController.php';
            break;

        case 'NoteBCA':
            $_SESSION['active_url'] = 'NoteBCA';
            include 'controller/NoteController/NoteBsc-CSITController/NoteBCAController.php';
            break;

        case 'NoteBIM':
            $_SESSION['active_url'] = 'NoteBIM';
            include 'controller/NoteController/NoteBsc-CSITController/NoteBIMController.php';
            break; */



            //Notes  Semester Controller
            /* case 'NoteBsc-CSITFirstSemester':
            $_SESSION['active_url'] = 'NoteBsc-CSITFirstSemester';
            include 'controller\NoteController\NoteBsc-CSITController\NoteBsc-CSITFirstSemesterController.php';
            break;
        case 'NoteBsc-CSITSecondSemester':
            $_SESSION['active_url'] = 'NoteBsc-CSITSecondSemester';
            include 'controller\NoteController\NoteBsc-CSITController\NoteBsc-CSITSecondSemesterController.php';
            break;
        case 'NoteBsc-CSITThirdSemester':
            $_SESSION['active_url'] = 'NoteBsc-CSITThirdSemester';
            include 'controller\NoteController\NoteBsc-CSITController\NoteBsc-CSITThirdSemesterController.php';
            break;
        case 'NoteBsc-CSITFourthSemester':
            $_SESSION['active_url'] = 'NoteBsc-CSITFourthSemester';
            include 'controller\NoteController\NoteBsc-CSITController\NoteBsc-CSITFourthSemesterController.php';
            break;
        case 'NoteBsc-CSITFifthSemester':
            $_SESSION['active_url'] = 'NoteBsc-CSITFifthSemester';
            include 'controller\NoteController\NoteBsc-CSITController\NoteBsc-CSITFifthSemesterController.php';
            break;
        case 'NoteBsc-CSITSixthSemester':
            $_SESSION['active_url'] = 'NoteBsc-CSITSixthSemester';
            include 'controller\NoteController\NoteBsc-CSITController\NoteBsc-CSITSixthSemesterController.php';
            break;
        case 'NoteBsc-CSITSeventhSemester':
            $_SESSION['active_url'] = 'NoteBsc-CSITSeventhSemester';
            include 'controller\NoteController\NoteBsc-CSITController\NoteBsc-CSITSeventhSemesterController.php';
            break;
        case 'NoteBsc-CSITEighthSemester':
            $_SESSION['active_url'] = 'NoteBsc-CSITEighthSemester';
            include 'controller\NoteController\NoteBsc-CSITController\NoteBsc-CSITEighthSemesterController.php';
            break; */

        case 'showsemester':
            $_SESSION['active_url'] = 'showsemester';
            include 'controller\showsemesterController.php';
            break;
        case 'customermessage':
            $_SESSION['active_url'] = 'customermessage';
            include 'controller\customermessageController.php';
            break;
        case 'addsubject':
            $_SESSION['active_url'] = 'addsubject';
            include 'controller\addsubjectController.php';
            break;
        case 'addcourse':
            $_SESSION['active_url'] = 'addcourse';
            include 'controller\addcourseController.php';
            break;
        case 'notice':
            $_SESSION['active_url'] = 'notice';
            include 'controller/noticeController.php';
            break;


        default:
            throwError(404, 'Requested page does not exists.');
            break;
    }
    return;
} else {
    include 'controller/dashboardcontroller.php';
}
