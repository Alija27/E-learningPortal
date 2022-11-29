<!DOCTYPE html>
<html lang="en">

<head>

    <title>Manage SubCategories</title>
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
                                <h4 class="page-title">Manage Sub-Categories</h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="<?= $base_url ?>?r=dashboard">Admin</a>
                                    </li>
                                    <li>
                                        <a href="#">Sub-Category </a>
                                    </li>
                                    <li class="active">
                                        Manage Sub-Category
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>












                    <div class="row">
                        <div class="col-md-12">
                            <div class="demo-box m-t-20">
                                <div class="m-b-30">
                                    <a href="addsub.php">
                                        <button id="addToTable" class="btn btn-success waves-effect waves-light">Add <i class="mdi mdi-plus-circle-outline"></i></button>
                                    </a>
                                </div>

                                <div class="table-responsive">
                                    <table class="table m-0 table-colored-bordered table-bordered-primary">
                                        <thead>
                                            <tr>
                                                <th>userid </th>
                                                <th> firstname </th>
                                                <th>lastname </th>
                                                <th>password</th>
                                                <th> Email </th>
                                                <th>Faculty </th>
                                                <th>Address </th>
                                                <th>usertype</th>
                                                <th>created date </th>
                                                <th>action </th>
                                            </tr>
                                        </thead>
                                        <tbody>



                                        </tbody>

                                    </table>
                                </div>




                            </div>

                        </div>


                    </div>




                    <div class="row">
                        <div class="col-md-12">
                            <div class="demo-box m-t-20">
                                <div class="m-b-30">

                                    <h4><i class="fa fa-trash-o"></i> Deleted SubCategories</h4>

                                </div>

                                <div class="table-responsive">
                                    <table class="table m-0 table-colored-bordered table-bordered-danger">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th> Category</th>
                                                <th>Sub Category</th>
                                                <th>Description</th>

                                                <th>Posting Date</th>
                                                <th>Last updation Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                        </tbody>

                                    </table>
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