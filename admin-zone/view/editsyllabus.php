<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <title> Edit Syllabus </title>


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
                                <h4 class="page-title">Edit Syllabus</h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="<?= $base_url ?>?r=dashboard">Admin</a>
                                    </li>
                                    <li>
                                        <a href="#"> Edit Syllabus </a>
                                    </li>

                                    <li class="active">
                                        Edit Syllabus
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>





                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="p-6">

                                <form class="form-horizantal" method="post" action=" <?= $base_url ?>?r=editsyllabus&id=<?php echo $id ?>" enctype=" multipart/form-data">
                                    <div class="form-group m-b-20">
                                        <label for="SyllabusName"> Syllabus Name</label>
                                        <input type="text" class="form-control" name="name" value="" placeholder="Enter Course">
                                    </div>
                                    <div class="form-group m-b-20">
                                        <label for="NoteName"> Select Course ID</label>

                                        <select onchange="get_sub()" id="course_id" name="course_id" class="form-control">
                                            <?php
                                            $course = get_course();
                                            if ($course) {
                                                while ($row = $course->fetch_assoc()) {
                                                    echo "<option value='" . $row["course_id"] . "'>" . $row["c_name"] . "</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group m-b-20">
                                        <label for="NoteName"> Select Semester</label>

                                        <select onchange="get_sub()" id="semester" name="semester_num" class="form-control">
                                            <?php for ($i = 1; $i <= 8; $i++) : ?>
                                                <option value="<?php echo $i; ?>">Semester <?php echo $i; ?></option>
                                            <?php endfor; ?>
                                        </select>
                                    </div>

                                    <div class="form-group m-b-20">
                                        <label for="Subject"> Select Subject </label>

                                        <select name="sid" class="form-control" id="subjects">
                                            <option value="">Choose a Subject</option>
                                        </select>
                                    </div>










                                    <div class="row">
                                        <div class="col-sm-12">

                                            <label for="upload"> Edit Syllabus</label>
                                            <input type="file" class="form-control" name="upload">

                                        </div>
                                    </div>



                                    <button type="submit" name="add" class="btn btn-success waves-effect waves-light"> Update </button>

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

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
        function get_sub() {
            let course_id = document.getElementById('course_id').value;
            let semester = document.getElementById('semester').value;

            $('#subjects').load('?r=subjectlist&course_id=' + course_id + "&semester=" + semester);
        }


        $(document).ready(function() {
            get_sub();
        });
    </script>
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

    <!-- <script>
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
 -->



</body>

</html>