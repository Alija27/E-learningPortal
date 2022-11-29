<?php
include 'header.php';
?>

<section class="loginform">

    <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6 col-sm-10 col-xs-7 col-lg-5">
                    <div class="myborder ">
                        <form method="post" action="<?php echo $base_url; ?>?r=Login">

                            <div class="entryborder">
                                <h4> LOGIN </h4>
                                <hr style="color:#091E39">
                                <label for="email"> Email </label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email" required autofocus>

                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                                <br>
                                <label for="password"> password </label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password" required autofocus>

                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                                <br>
                                <div class="checkbox mb-3">
                                    <label>
                                        <input type="checkbox" value="remember-me"> Remember password
                                    </label>
                                </div>
                                <input type="submit" name="login" value="Login" class="btn btn-danger" />
                                <input type="reset" name="clear" value="clear" class="btn btn-secondary" /><br>
                                <!--                     <label><a class="Login" href="<?php $base_url ?>signup.php?r=signup"> Don't have an account ? Sign In </a></label>
 --> <label><a class="Login" href="<?php $base_url ?>?r=signup"> Don't have an account ? Sign Up </a></label>




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