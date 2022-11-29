<!DOCTYPE html>
<html lang="en">

<head>

    <title>Sign Up</title>


    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
    <script src="assets/js/modernizr.min.js"></script>

    <style>
        .entryborder {
            border: 5px solid #f5f5f5;

            background-color: #f5f5f5;
            border-width: 20px;
            border-color: #DFDFDF;
            border-radius: 2%;
            border-style: solid;
            padding: 20px;
            margin: 10px;

        }
    </style>

</head>


<!-- <body class="fixed-left">


    <div id="wrapper"> -->


<?php include('includes/header.php'); ?>



<?php include('includes/sidebar.php'); ?>


<div class="content-page">

    <div class="content">
        <div class="container">


            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Sign Up</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li>
                                <a href="<?= $base_url ?>?r=signup">Admin</a>
                            </li>

                            <li class="active">
                                Sign Up
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <h4 class="m-t-0 header-title"><b>Sign Up</b></h4>
                        <hr />








                        <div class="row">
                            <div class="col-md-10">
                                <form class="form-horizantal" method="post" action=" <?= $base_url ?>?r=signup" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">First Name</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="firstname" placeholder="Enter Your  First Name Here"><br>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Last Name</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="lastname" placeholder="Enter Your Last Name Here"><br>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Email</label>
                                        <div class="col-md-8">
                                            <input type="email" class="form-control" name="email" placeholder="email@gmail.com"><br>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Address</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="address" placeholder="Enter Address"><br>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Password</label>
                                        <div class="col-md-8">
                                            <input type="password" class="form-control" name="password" placeholder="Enter password"><br>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Image</label>
                                        <div class="col-md-8">
                                            <input type="file" name="fileToUpload" class="waves-effect left"> <br> <br>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">User Type</label>
                                        <div class="col-md-8">

                                            <input type="radio" name="usertype" value="1">
                                            <label for="admin">admin</label>
                                            <input type="radio" name="usertype" value="0" checked>
                                            <label for="user">user</label><br> <br>
                                        </div>
                                    </div>




                                    <div class="form-group">
                                        <label class="col-md-4 control-label">&nbsp;</label>
                                        <div class="col-md-8">

                                            <input type="submit" name="signup" value="SIGN UP" class="btn btn-danger" />
                                            <input type="reset" value="clear" name="clear" class="btn btn-secondary" /> <br>
                                            <hr>
                                            <!--                                             <p>  Already Have an account? Login </a>
 -->
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

</html> -->