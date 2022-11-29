<!-- <?php include 'view/header.php' ?>
<div class="container emp-profile">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="images/wang.jpg" alt="" />
                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="file" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                        Kshiti Ghelani
                    </h5>


                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>

                    </ul>
                </div>

                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>User Id</label>
                            </div>
                            <div class="col-md-6">
                                <p>Kshiti123</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                            </div>
                            <div class="col-md-6">
                                <p>Kshiti Ghelani</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p>kshitighelani@gmail.com</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-6">
                                <p>123 456 7890</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Profession</label>
                            </div>
                            <div class="col-md-6">
                                <p>Web Developer and Designer</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" />
            </div>
        </div>
</div>
</div>
</form>
</div>
<?php include 'view/footer.php' ?> -->









<?php
include 'header.php';
?>

<body class="bg-light">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 mt-5 pt-5 ">
                <div class="row z-depth-3" style="border-style:groove; border-color:black">
                    <div class="col-sm-4  rounded-left" style="background-color:white;">

                        <div class="card-block text-center text-white mt-3">

                            <img src=" images/11111.jpg" width="200px" style="border:1px solid black; border-radius:100%">
                            <br> <br>

                            <input type="submit" value="EDIT">

                        </div>
                    </div>
                    <div class="col-sm-8 bg-white rounded-right">
                        <h3 class="mt-3 text-center"> Information </h3>
                        <hr class="badge-primary mt-0">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="font-weight-bold"> First Name</p>
                                <h6 class="text-muted"> <?php echo $user_data['firstname']; ?> </h6>


                                <p class="font-weight-bold"> Last Name</p>
                                <h6 class="text-muted"> <?php echo $user_data['lastname']; ?> </h6>


                                <p class="font-weight-bold"> Email </p>
                                <h6 class="text-muted"> </h6>

                                <p class="font-weight-bold"> Faculty </p>
                                <h6 class="text-muted"> </h6>

                                <p class="font-weight-bold"> Address </p>
                                <h6 class="text-muted"> </h6>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>