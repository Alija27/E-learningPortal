<!DOCTYPE html>
<html lang="en">

<head>

    <title> Manage Notice </title>
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
                                <h4 class="page-title"> Manage Notice </h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="<?= $base_url ?>?r=dashboard">Admin</a>
                                    </li>
                                    <li>
                                        <a href="#"> Manage Notice</a>
                                    </li>
                                    <li class="active">
                                        Manage Notice
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="demo-box m-t-20">

                                <h4><i class="fas fa-book"></i> Notice </h4>

                                <div class="table-responsive">
                                    <table class="table m-0 table-colored-bordered table-bordered-primary">

                                        <thead>
                                            <tr>
                                                <th>Notice ID</th>
                                                <th>Heading </th>
                                                <th> Notice</th>
                                                <th> Duration </th>

                                                <th>action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $notices = view_notice();
                                            if ($courses) {
                                                while ($row = $notices->fetch_assoc()) {
                                                    echo "<tr><td>" . $row["notice_id"] .
                                                        "</td><td>" . $row["heading"] .
                                                        "</td><td>" . $row["notice"] .
                                                        "</td><td><a href='" . $base_url .
                                                        "?r=editnotice&id=" . $row["notice_id"] .
                                                        "'>edit </a> <a href='" . $base_url .
                                                        "?r=deletenotice&id=" . $row["notice_id"] .
                                                        "' >delete </a></td></tr>";
                                                }
                                                echo "</table>";
                                            } else {
                                                echo "no course found";
                                            }

                                            ?>

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