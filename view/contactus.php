<?php
include 'header.php';
?>
<!-- <div class= "containerbanner">
    <h1 class="text-center" style="color:#fff"> NOTICE </h1>
</div> -->
<div class="container">
  <div class="row justify-content-center py-5">

    <div class="col-md-4">
      <div class="contactpic">

        <img src="images/ok10.jpg" alt="image" width="100%" height="550px" class="pt-3" />
      </div>
    </div>
    <div class="col-md-6">
      <div class="entryborder ">
        <div class="contactform ">
          <form action="<?php echo $base_url; ?>?r=contactus" method="post">
            <h2> Contact Us </h2>
            <hr>
            <label>Your Name </label>
            <input type="text" class="form-control" placeholder="Enter UserName" name="name" value="" required autofocus>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
            <br>

            <!-- <label> Faculty </label>
                                 <input type="text" class="form-control" id="txtname" placeholder="Enter Faculty Name" name="txtname" value="" required autofocus>
                                 <div class="valid-feedback">Valid.</div>
                                 <div class="invalid-feedback">Please fill out this field.</div>
                                 <br> -->

            <label> College Name </label>
            <input type="text" class="form-control" placeholder="Enter College Name" name="collegename" value="" required autofocus>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
            <br>

            <!-- <label> Address </label>
                                 <input type="text" class="form-control" id="txtname" placeholder="Enter Your Address " name="txtname" value="" required autofocus>
                                 <div class="valid-feedback">Valid.</div>
                                 <div class="invalid-feedback">Please fill out this field.</div>
                                 <br> -->

            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter Your Email" name="email" value="" required autofocus>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
            <br>

            <label> Message </label>
            <textarea type="textarea" class="form-control" placeholder=" Write Your Message Here" name="messege" value="" required autofocus> </textarea>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
            <br>

            <input type="submit" name=btnSubmit class="btn btn-secondary ">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<?php


include 'footer.php';



?>