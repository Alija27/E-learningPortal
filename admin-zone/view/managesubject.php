<!DOCTYPE html>
<html lang="en">

<head>

    <title> Manage Subject </title>
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
                                <h4 class="page-title"> Manage Subject </h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="<?= $base_url ?>?r=dashboard">Admin</a>
                                    </li>
                                    <li>
                                        <a href="#"> Manage Subject </a>
                                    </li>
                                    <li class="active">
                                        Manage Subject
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="demo-box m-t-20">

                                <h4><i class="fas fa-book"></i> Subject </h4>

                                <div class="table-responsive">
                                    <table class="table m-0 table-colored-bordered table-bordered-primary">

                                        <thead>
                                            <tr>
                                                <th>Subject ID </th>
                                                <th> Subject Name </th>
                                                <th> Course ID </th>
                                                <th> Semester </th>
                                                <th> Subject Code </th>
                                                <th> Credit hr </th>
                                                <th> IS Elective </th>
                                                <th> Manage Subject </th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $subject = view_subject();
                                            if ($subject) {
                                                while ($row = $subject->fetch_assoc()) {
                                                    echo "<tr><td>" . $row["sid"] .
                                                        "</td><td>" . $row["sub_name"] .
                                                        "</td><td>" . $row["course_id"] .
                                                        "</td><td>" . $row["semester_num"] .
                                                        "</td><td>" . $row["sub_code"] .
                                                        "</td><td>" . $row["credit_hr"] .
                                                        "</td><td>" . $row["is_elective"] .
                                                        "</td><td><a href='" . $base_url .
                                                        "?r=editsubject&id=" . $row["sid"] .
                                                        "'>edit </a> <a href='" . $base_url .
                                                        "?r=deletesubject&id=" . $row["sid"] .
                                                        "' >delete </a></td></tr>";
                                                }
                                                echo "</table>";
                                            } else {
                                                echo "no subject found";
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