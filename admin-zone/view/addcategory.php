<!DOCTYPE html>
<html lang="en">

<head>

    <title>Add Category</title>


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
                                <h4 class="page-title"> NOTES </h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="<?= $base_url ?>?r=dashboard">Admin</a>
                                    </li>
                                    <li>
                                        <a href="#">Notes </a>
                                    </li>
                                    <li class="active">
                                        Add Notes
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title"><b>Add Notes</b></h4>
                                <hr />



                                <div class="row">
                                    <div class="col-sm-6">




                                    </div>
                                </div>





                                <div class="row">
                                    <div class="col-md-6">
                                        <form class="form-horizontal" name="category" method="post" enctype="multipart/form-data">

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Faculty</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="" name="faculty" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label"> Semester</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="" name="semester" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label"> Notes </label>
                                                <div class="col-md-10">
                                                    <input type="file" class="form-control" value="" name="notes" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">&nbsp;</label>
                                                <div class="col-md-10">

                                                    <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
                                                        Submit
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






            <!--  <div class="content-page"> -->

            <!--  <div class="content">
                <div class="container">
                    <div class="row">


                        <div class="col-sm-4">
                            <div class="card-box">



                                <h1> Bsc-CSIT</h1>


                            </div>
                        </div>


                        <div class="col-sm-4">
                            <a href="<?php $base_url ?>?r=Notice">
                                <div class="card-box">




                                    <h1> BCA</h1>



                                </div>
                            </a>
                        </div>




                        <div class="col-sm-4">
                            <div class="card-box">



                                <h1> BIM </h1>


                            </div>
                        </div>



                    </div>


                </div>



            </div>



        </div>

    </div>








 -->

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