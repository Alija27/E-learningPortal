<section class="bgimages">
    <div class="container">
        <div class="row justify-content-center">
            <div class='col-xs-12 col-sm-12 col-md-4 col-lg-4'>
                <!--  <p style="color:white">I hear and I forget. I see and I remember. </p> 
   <p style="color:white"> I do and I understand. </p> -->


                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>



                <!-- <img src="500.jpg" class="img-fluid" alt="..." height="400px"> -->
            </div>





        </div>
    </div>
</section>
<section class="Weprovide">
    <div class="container service">
        <div class="cardtext">
            <div class="container">

                <div class="row ;">
                    <div class="col-lg-12 text-center">

                        <h2 class="section-title pt-4" style="color:#091E39"> FACILITIES </h2>
                    </div>

                    <?php
                    $all_courses = all('course');
                    foreach ($all_courses as $item) : ?>
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <a href="<?php $base_url ?>?r=showall&course_id=<?php echo $item['course_id']; ?>">
                                <div class="card border-0 shadow rounded-xs pt-5">

                                    <div class="card-body"> <img src="images/book-of-black-cover-closed.png" width="50px" height="50px"> </i>
                                        <h4 class="mt-4 mb-3"><?php echo $item['c_name']; ?></h4>
                                        <p> </p>
                                    </div>

                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>


                    <div class=" col-lg-4 col-sm-6 mb-4">
                        <a href="<?php $base_url ?>?r=notice">
                            <div class="card border-0 shadow rounded-xs pt-5">
                                <div class="card-body"><img src="images/bell (1).png" width="50px" height="50px"> </i>
                                    <h4 class="mt-4 mb-3">NOTICE</h4>
                                    <p> </p>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-lg-4 col-sm-6 mb-4">
                        <a href="<?php $base_url ?>?r=notice">
                            <div class="card border-0 shadow rounded-xs pt-5">
                                <div class="card-body"><img src="images/exam.png" width="50px" height="50px"> </i>
                                    <h4 class="mt-4 mb-3">RESULT</h4>
                                    <p> </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


            </div>

</section>








<div class="container mb-2 py-5">
    <div id="testimonial" name="testimonial">
        <div class="row ">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card d-flex mx-auto">
                    <div class="card-image"> <img class="img-fluid d-flex mx-auto" src="images/Capture.png"> </div>
                    <div class="card-text">
                        <div class="card-title">Lorem Ipsum!</div> Lorem ipsum dolor sit amet, consectetuer adipiscing
                        elit. Aenean commodo ligula eget dolor. Aenean massa. Nam quam nunc, blandit vel, luctus
                        pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus Duis leo. Donec
                        sodales sagittis magna
                    </div>
                    <div class="footer"> <span id="name">Name<br></span> <span id="position">CEO of <a href="#">Google.com</a></span> </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card d-flex mx-auto ">
                    <div class="card-image"> <img class="img-fluid d-flex mx-auto" src="images/Capture.png"> </div>
                    <div class="card-text">
                        <div class="card-title">Lorem Ipsum!</div> Lorem ipsum dolor sit amet, consectetuer adipiscing
                        elit. Aenean commodo ligula eget dolor. Aenean massa. Nam quam nunc, blandit vel, luctus
                        pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus Duis leo. Donec
                        sodales sagittis magna
                    </div>
                    <div class="footer"> <span id="name">Name<br></span> <span id="position">UX Designer
                            at <a href="#">Youtube.com</a></span> </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card d-flex mx-auto ">
                    <div class="card-image"> <img class="img-fluid d-flex mx-auto" src="images/Capture.png"> </div>
                    <div class="card-text">
                        <div class="card-title">Lorem Ipsum!</div> Lorem ipsum dolor sit amet, consectetuer adipiscing
                        elit. Aenean commodo ligula eget dolor. Aenean massa. Nam quam nunc, blandit vel, luctus
                        pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus Duis leo. Donec
                        sodales sagittis magna
                    </div>
                    <div class="footer"> <span id="name">Name<br></span> <span id="position">UX Designer
                            at <a href="#">Youtube.com</a></span> </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card d-flex mx-auto ">
                    <div class="card-image"> <img class="img-fluid d-flex mx-auto" src="images/Capture.png"> </div>

                    <div class="card-text">
                        <div class="card-title">Lorem Ipsum!</div> Lorem ipsum dolor sit amet, consectetuer adipiscing
                        elit. Aenean commodo ligula eget dolor. Aenean massa. Nam quam nunc, blandit vel, luctus
                        pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus Duis leo. Donec
                        sodales sagittis magna
                    </div>
                    <div class="footer"> <span id="name">Name<br></span> <span id="position">UX Designer
                            at <a href="#">Youtube.com</a></span> </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="containerhome">
    <h1 class="text-center   text-light" style="padding-top:100px"> Be Addicted To Your Passion Not Your Distraction</h1>

</div>





</div>
</div>
</div>
</div>
</section>