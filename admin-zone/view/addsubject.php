<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <title>Add Subject </title>


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
                                <h4 class="page-title">Add Subject</h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="<?= $base_url ?>?r=dashboard">Admin</a>
                                    </li>
                                    <li>
                                        <a href="#">Add Subject</a>
                                    </li>

                                    <li class="active">
                                        Add Subject
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-sm-12">

                            <h4 class="m-t-0 header-title"><b>Add Subject</b></h4>
                            <hr />


                            <div class="row">
                                <div class="col-md-10">

                                    <form class="form-horizantal" method="post" action=" <?= $base_url ?>?r=addsubject" enctype="multipart/form-data">


                                        <label class="col-md-4 control-label">Subject Name</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="sub_name" placeholder=""><br>
                                        </div>
                                </div>





                                <div class="form-group">
                                    <label class="col-md-4 control-label">
                                        <h5> Select Semester </h5>
                                    </label>
                                    <div class="col-md-8">


                                        <input type="radio" name="semester_num" value="1">
                                        <label for="First Semester">First Semester</label>
                                        &nbsp;
                                        <input type="radio" name="semester_num" value="2">
                                        <label for="Second Semester">Second Semester</label>
                                        &nbsp;
                                        <input type="radio" name="semester_num" value="3">
                                        <label for="Third Semester">Third Semester</label>
                                        &nbsp;
                                        <input type="radio" name="semester_num" value="4">
                                        <label for="Fourth Semester">Fourth Semester</label>
                                        <br>
                                        <input type="radio" name="semester_num" value="5">
                                        <label for="Fifth Semester">Fifth Semester</label>
                                        &nbsp;
                                        <input type="radio" name="semester_num" value="6">
                                        <label for="Sixth Semester">Sixth Semester</label>
                                        &nbsp;
                                        <input type="radio" name="semester_num" value="7">
                                        <label for="Seventh Semester">Seventh Semester</label>
                                        &nbsp;
                                        <input type="radio" name="semester_num" value="8">
                                        <label for="Eight Semester">Eight Semester</label>

                                    </div>
                                </div>







                                <!-- <div class="form-group">

                                            <label class="col-md-4 control-label">

                                                <h5>Select Course ID </h5>
                                            </label>
                                            <div class="col-md-8">

                                                <br>
                                                <input type="radio" name="course_id" value="1">
                                                <label for="Bsc-CSIT">1.Bsc-CSIT</label>
                                                &nbsp;
                                                <input type="radio" name="course_id" value="2">
                                                <label for="BCA">2.BCA</label>
                                                &nbsp;
                                                <input type="radio" name="course_id" value="3">
                                                <label for="BIM">3.BIM</label>
                                            </div>
                                        </div> -->

                                <label class="col-md-4 control-label">

                                    <h5>Select Course ID </h5>
                                </label>
                                <div class="col-md-8">

                                    <select name="course_id" class="form-control">
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
                            </div>




                            <div class=" form-group">

                                <label class="col-md-4 control-label">

                                    <h5>Subject Code </h5>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="sub_code" placeholder="Enter Subject Code"><br>

                                </div>
                            </div>





                            <label class="col-md-4 control-label">

                                <h5>Credit Hours </h5>
                            </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="credit_hr" placeholder="Enter Credit Hours"><br>

                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label">
                                <h5> IS </h5>
                            </label>
                            <div class="col-md-8">


                                <input type="radio" name="is" value="0">
                                <label for="First Semester"> Compulsary</label>
                                &nbsp;
                                <input type="radio" name="is" value="1">
                                <label for="Second Semester"> Elective </label>
                                &nbsp;


                            </div>
                        </div>




                        <div class="form-group">
                            <label class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-8">

                                <input type="submit" name="add" value="Add" class="btn btn-danger" />
                                <input type="reset" value="clear" name="clear" class="btn btn-secondary" /> <br>
                                <hr>
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