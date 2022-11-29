<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <title>Edit Course</title>


    <link href="../plugins/summernote/summernote.css" rel="stylesheet" />


    <link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />


    <link href="../plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
    <link href="../plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />


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
                                <h4 class="page-title">Edit Course</h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="<?= $base_url ?>?r=dashboard">Admin</a>
                                    </li>
                                    <li>
                                        <a href="#">Edit Course</a>
                                    </li>

                                    <li class="active">
                                        Edit Course
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>





                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-1">
                            <div class="p-6">

                                <form class="form-horizantal" method="post" action=" <?= $base_url ?>?r=editcourse&id=<?php echo $id ?>" enctype="multipart/form-data">
                                    <div class="form-group m-b-20">
                                        <label for="CourseName">Course Name</label>
                                        <input type="text" class="form-control" name="c_name" value="<?php echo $course_data['c_name']; ?>" placeholder="Enter Course">
                                    </div>







                                    <div class="row">
                                        <div class="col-sm-12">

                                            <label for="CourseDescription"> Course Desripction</label>
                                            <textarea class="form-control" name="c_description"><?php echo $course_data['c_description']; ?></textarea>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group m-b-20">
                                                <label for="courseduration"> Course Duration </label>
                                                <input type="text" class="form-control" name="c_duration" value="<?php echo $course_data['c_duration']; ?>" placeholder="Enter Course Duration">
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">

                                                    <label for="Banner"> Banner </label>
                                                    <input type="file" class="form-control" name="banner" value="<?php echo $course_data['banner']; ?>">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">

                                                    <label for="Banner"> Contain Semester</label>
                                                    <input type="text" class="form-control" name="semester" value="<?php echo $course_data['semester']; ?>">

                                                </div>
                                            </div>
                                            <br>

                                            <button type="submit" name="add" class="btn btn-success waves-effect waves-light">Update and Post</button>

                                </form>
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


    <script src="../plugins/summernote/summernote.min.js"></script>

    <script src="../plugins/select2/js/select2.min.js"></script>

    <script src="../plugins/jquery.filer/js/jquery.filer.min.js"></script>


    <script src="assets/pages/jquery.blog-add.init.js"></script>


    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

    <script>
        jQuery(document).ready(function() {

            $('.summernote').summernote({
                height: 240, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false // set focus to editable area after initializing summernote
            });
            // Select2
            $(".select2").select2();

            $(".select2-limiting").select2({
                maximumSelectionLength: 2
            });
        });
    </script>
    <script src="../plugins/switchery/switchery.min.js"></script>


    <script src="../plugins/summernote/summernote.min.js"></script>




</body>

</html>