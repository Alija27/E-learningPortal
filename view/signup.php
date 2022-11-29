<?php error_reporting(0);
include 'header.php';
?>
<!-- <div class= "containerbanner">
    <h1 class="text-center" style="color:#fff"> NOTICE </h1>
</div> -->
<section class="s">

    <div class="container signup">

        <div class="row  justify-content-center">
            <div class="col-md-10 col-sm-10 col-xs-10 col-lg-6">
                <div class="signup1">

                    <div class="entryborder">

                        <h4> SIGN UP</h4>
                        <hr class="bg-dark">
                        <div class="mybordersignup">
                            <form class="form-horizantal" method="post" action="<?php echo $base_url; ?>?r=signup" enctype="multipart/form-data">
                                First Name<input type="text" class="form-control" name="firstname" placeholder="Enter Your  First Name Here"><br>
                                Last Name<input type="text" class="form-control" name="lastname" placeholder="Enter Your Last Name Here"><br>
                                Email<input type="email" class="form-control" name="email" placeholder="email@gmail.com"><br>
                                Faculty <input type="text" class="form-control" name="faculty" placeholder="Enter Your Faculty"><br>
                                Address<input type="text" class="form-control" name="address" placeholder="Enter Your Address"><br>
                                Password <input type="password" class="form-control" name="password" placeholder="Enter password"><br>
                                Image <br> <input type="file" name="fileToUpload" id="fileToUpload" class="waves-effect left"> <br> <br>
                                <!-- User Type <br>
                                          <input type="radio" id="usertype" name="usertype" value="1">
                                          <label for="admin">admin</label>
                                          <input type="radio" id="usertype" name="usertype" value="0" checked>
                                          <label for="user">user</label><br> <br> -->

                                <input type="submit" name="signup" value="SIGN UP" class="btn btn-danger" />
                                <input type="reset" value="clear" name="clear" class="btn btn-secondary"> <br>
                                <hr>
                                <p> <a href="<?php $base_url ?>?r=Login"> Already Have an account? Login </a> </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php


include 'footer.php';



?>