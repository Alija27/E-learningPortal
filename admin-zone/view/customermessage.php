<!DOCTYPE html>
<html lang="en">

<head>

    <title>User Manage </title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <!-- <link href="assets/css/icons.css" rel="stylesheet" type="text/css" /> -->
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css
" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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
                                <h4 class="page-title">Admin </h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="<?= $base_url ?>?r=dashboard">Admin</a>
                                    </li>
                                    <li>
                                        <a href="#"> Customer Message </a>
                                    </li>
                                    <li class="active">
                                        Customer Message
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>












                    <div class="row">
                        <div class="col-md-12">
                            <div class="demo-box m-t-20">

                                <h4><i class="fas fa-user"></i> Customer Message</h4>

                                <div class="table-responsive">
                                    <table class="table m-0 table-colored-bordered table-bordered-primary">
                                        <thead>
                                            <tr>

                                                <th> Username </th>

                                                <th>College Name </th>

                                                <th> Email </th>
                                                <th> Message </th>



                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $message = view_message();
                                            if ($message) {

                                                while ($row = $message->fetch_assoc()) {
                                                    echo "<tr><td>" . $row["name"] .
                                                        "</td><td>" . $row["collegename"] .

                                                        "</td><td>" . $row["email"] .
                                                        "</td><td>" . $row["message"] .



                                                        "</td></tr>";
                                                }
                                                echo "</table>";
                                            } else {
                                                echo "no message found";
                                            }

                                            ?>


                                        </tbody>

                                    </table>
                                </div>




                            </div>

                        </div>


                    </div>




                    <!--  <div class="row">
                        <div class="col-md-12">
                            <div class="demo-box m-t-20">
                                <div class="m-b-30">

                                    <h4><i class="fa fa-trash-o"></i> Deleted Users</h4>

                                </div>

                                <div class="table-responsive">
                                    <table class="table m-0 table-colored-bordered table-bordered-danger">
                                        <thead>
                                            <tr>
                                                <th>Userid </th>
                                                <th> Firstname </th>
                                                <th>Lastname </th>
                                                <th>Password</th>
                                                <th> Email </th>
                                                <th>Faculty </th>
                                                <th>Address </th>
                                                <th>Usertype</th>
                                                <th>Created date </th>
                                                <th>Action </th>
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

 -->


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