<!DOCTYPE html>
<html lang="en">

<head>

    <title>Change Password</title>


    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
    <script src="assets/js/modernizr.min.js"></script>



</head>


<body class="fixed-left">


    <div id="wrapper">


        <?php include('includes/header.php'); ?>



        <?php include('includes/sidebar.php'); ?>


        <div class="content-page">

            <div class="content">
                <div class="container">


                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Change Password</h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="<?= $base_url ?>?r=dashboard">Admin</a>
                                    </li>

                                    <li class="active">
                                        Change Password
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title"><b>Change Password </b></h4>
                                <hr />



                                <div class="row">
                                    <div class="col-sm-6">

                                    </div>
                                </div>





                                <div class="row">
                                    <div class="col-md-10">
                                        <form class="form-horizontal" name="chngpwd" method="post" onSubmit="return valid();">

                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Current Password</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" value="" name="password" placeholder="Enter current password" required>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-4 control-label">New Password</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" value="" name="newpassword" placeholder="Enter new password" required>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Confirm Password</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" value="" name="confirmpassword" placeholder="Confirm" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4 control-label">&nbsp;</label>
                                                <div class="col-md-8">

                                                    <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
                                                        Update
                                                    </button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>


                                </div>




                            </div>
                        </div>
                    </div>



                </div>

            </div>

            <?php include('includes/footer.php'); ?>

        </div>
    </div>

    <script>
        var resizefunc = [];
    </script>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="../plugins/switchery/switchery.min.js"></script>


    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

</body>

</html>