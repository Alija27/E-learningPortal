<div class="left side-menu style:'color:red'; ">
    <div class="sidebar-inner slimscrollleft  ">

        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Navigation</li>

                <li class="has_sub">
                    <a href="<?= $base_url ?>?r=dashboard" class="waves-effect"><i class="fas fa-tachometer-alt"></i> <span> Dashboard </span> </a>

                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-file-upload"></i> <span> Syllabus </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?= $base_url ?>?r=uploadsyllabus">Upload Syllabus </a></li>
                        <li><a href="<?= $base_url ?>?r=managesyllabus"> Manage Syllabus</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-book-reader"></i> <span> Note </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?= $base_url ?>?r=uploadnote">Upload Syllabus </a></li>
                        <li><a href="<?= $base_url ?>?r=managenote"> Manage Syllabus</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-file-upload"></i> <span> Old Question</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?= $base_url ?>?r=uploadoldquestion">Upload Old Question </a></li>
                        <li><a href="<?= $base_url ?>?r=manageoldquestion"> Manage Old Questions </a></li>
                    </ul>
                </li>


                <!-- <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Syllabus </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <?php
                        $course = get_course();
                        if ($course) {
                            while ($row = $course->fetch_assoc()) {
                                echo "<li><a href='" . $base_url . "?r=showsemester&course_id=" . $row["course_id"] . "'>" . $row["c_name"] . "</a></li>";
                            }
                        }
                        ?>
                    </ul>
                </li> -->



                <!-- <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-book-reader"></i><span> Notes </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">

                        <?php
                        $course = get_course();
                        if ($course) {
                            while ($row = $course->fetch_assoc()) {
                                echo "<li><a href='" . $base_url . "?r=showsemester&course_id=" . $row["course_id"] . "'>" . $row["c_name"] . "</a>
                                
                                </li>";
                            }
                        }
                        ?>


                    </ul>
                </li> -->


                <!--  <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Old Questions </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">

                        <?php
                        $course = get_course();
                        if ($course) {
                            while ($row = $course->fetch_assoc()) {
                                echo "<li><a href='" . $base_url . "?r=showsemester&course_id=" . $row["course_id"] . "'>" . $row["c_name"] . "</a></li>";
                            }
                        }
                        ?>


                    </ul>
                </li> -->



                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-users"></i> <span>Users</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <!--                         <li><a href="<?= $base_url ?>?r=addpost">Add Post</a></li>
 -->
                        <li><a href="<?= $base_url ?>?r=usermanage">Manage Users</a></li>

                        <!--                         <li><a href="<?= $base_url ?>?r=trashpost">Trash Post</a></li>
 -->
                    </ul>
                </li>


                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-book"></i> <span> Course </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">

                        <li><a href=" <?= $base_url ?>?r=addcourse"> Add Course</a></li>
                        <li><a href=" <?= $base_url ?>?r=managecourse"> Manage Course</a></li>

                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-plus-circle"></i> <span> Subject </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?= $base_url ?>?r=addsubject"> Add Subject </a></li>
                        <li><a href="<?= $base_url ?>?r=managesubject"> Manage Subject </a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-file"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?= $base_url ?>?r=about">About</a></li>
                        <li><a href="<?= $base_url ?>?r=contact">Contact Us</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="far fa-comment"></i> <span> Comments </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?= $base_url ?>?r=waiting">Waiting for Approval </a></li>
                        <li><a href="<?= $base_url ?>?r=approved">Approved Comments</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="<?= $base_url ?>?r=customermessage" class="waves-effect"><i class="fas fa-envelope"></i> <span> Customer Message </span> </a>

                </li>


                <li class="has_sub">
                    <a href="<?= $base_url ?>?r=notice" class="waves-effect"><i class="fas fa-exclamation"></i> <span>Notice </span> </a>

                </li>





            </ul>
        </div>

        <div class="clearfix "></div>

        <div class="help-box">
            <h5 class="text-muted m-t-0">For Help ?</h5>
            <p class=""><span class="text-custom">Email:</span> <br /> abc@gmail.com</p>
        </div>

    </div>


</div>