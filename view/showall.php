<?PHP

include 'header.php';
?>


<!-- Page Content -->
<div class="container ">
    <div class="row justify-content-center">
        <!-- Post Content Column -->
        <div class="col-lg-8">
            <!-- Preview Image -->
            <!-- <img class="img-fluid rounded my-4" src="images/Bsc.png" alt="" height="10%" > -->
            <!--    <div class="bsc"> -->
            <div class="bsc">
                <!-- <marquee behavior="scroll" direction="left" scrollamount="10"><h1 style="color:#6C63FF;"> Bsc-CSIT </h1></marquee>
 -->

                <img src="<?php echo $course_detail['banner']; ?>" style="max-width: 100%; height:auto">

            </div>

            <!--    </div> -->


            </section>
            <section id="csitdescription">
                <div class=csitdescription-inner>
                    <h3> Introduction </h3>
                    <?php
                    echo "<p>" . $course_detail["c_description"] . "</p>";
                    ?>

            </section>



            <!--   <h2 class=" text-white" style="text-align:center; background-color:#0B2647 ">COURSE TITLE</h2>
 -->

            <?php for ($i = 0; $i < $course_detail['semester']; $i++) {
                $sem = $i + 1;

                $sem_subjects = query("SELECT * FROM `subject` WHERE `is_elective` = 0 AND `course_id` = $id AND `semester_num` = $sem");


                if (count($sem_subjects) > 0) {

            ?>

                    <h2 style="text-align: center;" class="colorsemester"> <?php echo $semesters[$i]; ?> Semester </h2>
                    <div class="container">

                        <div class="table-responsive" style="margin-bottom: 20px!important">
                            <table class="table m-0 table-colored-bordered table-bordered-primary">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Course Code</th>
                                        <th> Course Title</th>
                                        <th>Credit hours </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $sn = 1;
                                    foreach ($sem_subjects as $sub) { ?>
                                        <tr>
                                            <td><?php echo $sn ?></td>
                                            <td><?php echo $sub['sub_code'] ?></td>
                                            <td>

                                                <a href="?r=SubjectPage&id=<?php echo $sub['sid']; ?>"><?php echo $sub['sub_name'] ?></a>

                                            </td>
                                            <td><?php echo $sub['credit_hr'] ?></td>
                                        </tr>
                                    <?php $sn++;
                                    } ?>
                                </tbody>

                            </table>
                        </div>
                    </div>


                    <?php

                    $electives = query("SELECT * FROM `subject` WHERE `is_elective` = 1 AND `course_id` = $id AND `semester_num` = $sem ");

                    if (count($electives) > 0) {
                    ?>
                        <h2 style="text-align: center;" class="colorsemester">List of Electives</h2>
                        <div class="container">

                            <div class="table-responsive" style="margin-bottom: 20px!important">
                                <table class="table m-0 table-colored-bordered table-bordered-primary">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Course Code</th>
                                            <th> Course Title</th>
                                            <th>Credit hours </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $sn = 1;
                                        foreach ($electives as $sub) { ?>
                                            <tr>
                                                <td><?php echo $sn ?></td>
                                                <td><?php echo $sub['sub_code'] ?></td>
                                                <td><a href="?r=SubjectPage&id=<?php echo $sub['sid']; ?>"><?php echo $sub['sub_name'] ?></a></td>
                                                <td><?php echo $sub['credit_hr'] ?></td>
                                            </tr>
                                        <?php $sn++;
                                        } ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
            <?php }
                } /* ?>
                    <hr /> <?php */
            }
            ?>



        </div>
    </div>
</div>
<?php
include 'footer.php';
?>