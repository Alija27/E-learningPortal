<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Manage </title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css
" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
 -->

    <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
    <script src="assets/js/modernizr.min.js"></script>
    <style>
        .fade:not(.show) {
            opacity: 1 !important;
        }

        .message {
            margin-top: 100px;
        }
    </style>
</head>

<div class="topbar">

    <div class=" topbar-left ">

        <a href=" #">
            <img src="assets/images/1.png" alt="" height="65">
        </a>
    </div>

    <div class="navbar bg-dark" role="navigation">
        <div class="container">
            <!--             <img src="assets/images/1.png" alt="" height="65">
 -->


            <ul class="nav navbar-nav navbar-left">

                <li>
                    <button class="button-menu-mobile open-left waves-effect">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </li>

            </ul>









            <ul class="nav navbar-nav navbar-right">


                <li class="dropdown user-box">
                    <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="assets/images/admin.png" alt="user-img" class="img-circle user-img">
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                        <li>
                            <h5>Admin, What's Up</h5>
                        </li>

                        <li><a href="<?= $base_url ?>?r=signup"><i class="ti-settings m-r-5"></i>Add Admin</a></li>

                        <li><a href="<?= $base_url ?>?r=pass"><i class="ti-settings m-r-5"></i> Change Password</a></li>

                        <li><a href="<?= $base_url ?>?r=logout"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                    </ul>
                </li>

            </ul>

        </div>
    </div>
</div>


<?php
if (hasFlash('message')) {
    $falshError = getFlash('message');
    foreach ($falshError as $fe) {
?>
        <div class="container-fluid" style="margin-top: 100px;min-height: 50px; width:50%;">
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

<style>
    .button-menu-mobile i {
        color: white;
    }
</style>