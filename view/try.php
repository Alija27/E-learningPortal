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