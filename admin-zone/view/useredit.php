<!DOCTYPE html>
<html lang="en">

<head>

    <title>User Edit</title>


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
                        <h4 class="page-title"> User Edit </h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li>
                                <a href="<?= $base_url ?>?r=dashboard">Admin</a>
                            </li>

                            <li class="active">
                                User Edit
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <h4 class="m-t-0 header-title"><b>User Edit</b></h4>
                        <hr />








                        <div class="row">
                            <div class="col-md-10">
                                <form class="form-horizantal" method="post" action="<?php echo $base_url; ?>?r=useredit&id=<?php echo $id ?>" enctype="multipart/form-data">
                                    First Name<input type="text" class="form-control" value="<?php echo $user_data['firstname']; ?>" name="firstname" id="firstname" placeholder="Enter Your  First Name Here"><br>
                                    Last Name<input type="text" class="form-control" value="<?php echo $user_data['lastname']; ?>" name="lastname" id="lastname" placeholder="Enter Your Last Name Here"><br>
                                    Email<input type="email" class="form-control" value="<?php echo $user_data['email']; ?>" name="email" id="email" placeholder="email@gmail.com"><br>
                                    Faculty <input type="text" class="form-control" value="<?php echo $user_data['faculty']; ?>" name="faculty" id="faculty" placeholder="Enter Your Faculty"><br>
                                    Address<input type="text" class="form-control" value="<?php echo $user_data['address']; ?>" name="address" id="address" placeholder="Enter Your Address"><br>
                                    Password <input type="password" class="form-control" value="<?php echo $user_data['password']; ?>" name="password" id="password" placeholder="Enter password"><br>
                                    <!--                                      Confirm Password<input type="password" class="form-control" name="confirmpassord" placeholder="Password confirmation" required><br>
  Image <br> <input type="file" name="fileToUpload" id="fileToUpload" class="waves-effect left" value="<?php echo $user_data['fileToUpload']; ?>"> <br> <br>
                                    --> User Type <br>
                                    <input type="radio" id="usertype" name="usertype" value="1">
                                    <label for=" admin">admin</label>
                                    <input type="radio" id="usertype" name="usertype" value="0">
                                    <label for="user">user</label><br> <br>

                                    <input type="submit" name="signup" value="Submit" class="btn btn-danger" />
                                    <input type="reset" value="clear" name="clear" class="btn btn-secondary"> <br>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </section>
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


<script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="../plugins/counterup/jquery.counterup.min.js"></script>


<script src="../plugins/morris/morris.min.js"></script>
<script src="../plugins/raphael/raphael-min.js"></script>


<script src="assets/pages/jquery.dashboard.js"></script>


<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>

</body>

</html>