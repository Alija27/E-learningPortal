<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="Free notes syllabus old questoins and pdf">
    <meta name="keywords" content="CSIT syllabus, BCA syllabus, BIM syllabus, CSIT notes, BCA notes, BIM notes, CSIT Old question papers, BCA Old question papers , BIM Old question papers">
    <meta name="author" content="Alija Ghimire">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <!--  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <script src="bootstrap/js/jquery.js" > </script>
        <script src="bootstrap/js/bootstrap.js" type="text/javascript" > </script>  -->
    <link href="Resources\fontawesome\css\all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Resources\style.css">
    <title> HOM </title>


</head>

<body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php $base_url ?>?r=home"> <img width="60" height="50" src="images/1.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-6 text-center">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $_SESSION['active_url'] == 'home' ? 'active' : '' ?>" aria-current="page" href="<?php $base_url ?>?r=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $_SESSION['active_url'] == 'aboutus' ? 'active' : '' ?>" href="<?php $base_url ?>?r=aboutus">ABOUT</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            COURSES
                        </a>

                        <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php $base_url ?>?r=Bsc-CSIT">Bsc-CSIT</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?php $base_url ?>?r=BCA">BCA</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?php $base_url ?>?r=BIM">BIM</a></li>
                        </ul> -->

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                            $course = get_course();
                            if ($course) {
                                while ($row = $course->fetch_assoc()) {
                                    echo "<li><a class='dropdown-item' href='" . $base_url . "?r=showall&course_id=" . $row["course_id"] . "'>" . $row["c_name"] . "</a></li>";
                                }
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $_SESSION['active_url'] == 'contactus' ? 'active' : '' ?>" href="<?php $base_url ?>?r=contactus">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $_SESSION['active_url'] == 'notice' ? 'active' : '' ?>" href="<?php $base_url ?>?r=notice">Notice</a>
                    </li>



                    <?php
                    if (!empty($_SESSION['user']['login'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $base_url ?>?r=userprofile&id=<?php echo $_SESSION['user']['user_id'] ?>"><?php echo $_SESSION['user']['email'] ?></a>
                        </li>
                        <li class="nav-item login">
                            <a class="nav-link  <?php echo $_SESSION['active_url'] == 'logout' ? 'active' : '' ?> " href="<?= $base_url ?>?r=logout" class="btn-sm">Logout</a>
                        </li>
                    <?php  } else {
                    ?>
                        <li class="nav-item login">
                            <a class="nav-link round  <?php echo $_SESSION['active_url'] == 'Login' ? 'active' : '' ?>" href="<?php $base_url ?>?r=Login">Login</a>
                        </li>
                    <?php
                    }
                    ?>

                </ul>
            </div>
        </div>
        <!-- </div>
        </div> -->
    </nav>


    <?php
    if (hasFlash('message')) {
        $falshError = getFlash('message');
        foreach ($falshError as $fe) {
    ?>
            <div class="container-fluid" style="min-height: 50px; width:50%;">
                <div class="alert alert-<?php echo $fe['type']; ?> fade in alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                    <?php
                    echo empty($fe['title']) ? '' : "<strong>" . $fe['title'] . "</strong> ";
                    echo $fe['body'];
                    ?>
                </div>
            </div>
    <?php
        }
    }
    ?>