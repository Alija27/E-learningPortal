<!DOCTYPE html>
<html lang="en">

<head>

    <title>Add Sub Category</title>


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

                                <!--  <ol class="breadcrumb p-0 m-0">
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
 -->


                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box">
                                            <h4 class="m-t-0 header-title"><b>Add Notes</b></h4>
                                            <hr />







                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form class="form-horizontal" action="" name="category" method="post" enctype="multipart/form-data">

                                                        <?php
                                                        $subject = get_subject(1, 1);
                                                        if ($subject) {
                                                            while ($row = $subject->fetch_assoc()) {
                                                                echo "<div class='form-group'>
                                                                    <label class='col-md-6 control-label'>" . $row["sub_name"] . "</label>
                                                                    <div class='col-md-6'>
                                                                        <input type='file' class='form-control' name=" . $row["sub_name"] . " required>
                                                                    </div>
                                                                </div>";
                                                            }
                                                        }

                                                        ?>




                                                        <!--


                                                        <div class="form-group">
                                                            <label class="col-md-6 control-label"> C Programming</label>
                                                            <div class="col-md-6">
                                                                <input type="file" class="form-control" value="" name="notes" required>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-6 control-label"> Digital Logic </label>
                                                            <div class="col-md-6">
                                                                <input type="file" class="form-control" value="" name="notes" required>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-6 control-label"> Mathematics I </label>
                                                            <div class="col-md-6">
                                                                <input type="file" class="form-control" value="" name="notes" required>
                                                            </div>
                                                        </div>


                                                        <div class="form-group">
                                                            <label class="col-md-6 control-label"> Physics </label>
                                                            <div class="col-md-6">
                                                                <input type="file" class="form-control" value="" name="notes" required>
                                                            </div>
                                                        </div>
-->

                                                        <div class="form-group">
                                                            <label class="col-md-6 control-label">&nbsp;</label>
                                                            <div class="col-md-6">

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