<?php
include 'header.php';
?>
<!--
 <section class="loginform">


     <form method="post" action="<?php echo $base_url; ?>?r=userprofile" enctype="multipart/form-data">
         <div class="page-content page-container" id="page-content">
             <div class="padding">
                 <div class="row container d-flex justify-content-center">
                     <div class="col-xl-6 col-md-12">
                         <div class="card user-card-full">
                             <div class="row m-l-0 m-r-0">
                                 <div class="col-sm-4 bg-c-lite-green user-profile">
                                     <div class="card-block text-center text-white">
                                         <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                         <h6 class="f-w-600">Hembo Tingor</h6>
                                         <p>Web Designer</p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                     </div>
                                 </div>
                                 <div class="col-sm-8">
                                     <div class="card-block">
                                         <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                         <div class="row">
                                             <div class="col-sm-6">
                                                 <p class="m-b-10 f-w-600">Email</p>
                                                 <h6 class="text-muted f-w-400">rntng@gmail.com</h6>
                                             </div>
                                             <div class="col-sm-6">
                                                 <p class="m-b-10 f-w-600">Phone</p>
                                                 <h6 class="text-muted f-w-400">98979989898</h6>
                                             </div>
                                         </div>
                                         <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Projects</h6>
                                         <div class="row">
                                             <div class="col-sm-6">
                                                 <p class="m-b-10 f-w-600">Recent</p>
                                                 <h6 class="text-muted f-w-400">Sam Disuja</h6>
                                             </div>
                                             <div class="col-sm-6">
                                                 <p class="m-b-10 f-w-600">Most Viewed</p>
                                                 <h6 class="text-muted f-w-400">Dinoter husainm</h6>
                                             </div>
                                         </div>
                                         <ul class="social-link list-unstyled m-t-40 m-b-10">
                                             <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                             <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                             <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>



     </form>
     </div>
     </div>
     </div>
     </div>
     </div>
     </div>

 </section>



 -->



<!-- <div class="student-profile py-4">
     <div class="container">
         <div class="row">
             <div class="col-lg-4">
                 <div class="card shadow-sm">
                     <div class="card-header bg-transparent text-center">
                         <form method="post" action="<?php echo $base_url; ?>?r=userprofile" enctype="multipart/form-data">

                             <img class="profile_img" src=" <?php echo $user_data['image_url']; ?> " alt="student dp">
                             <h3> <?php echo $user_data['firstname']; ?> &nbsp; <?php echo $user_data['lastname']; ?> </h3>
                     </div>
                     <div class="card-body">
                         <p class="mb-0"><strong class="pr-1">Course </strong>: BCA</p>
                     </div>
                 </div>
             </div>
             <div class="col-lg-8">
                 <div class="card shadow-sm">
                     <div class="card-header bg-transparent border-0">
                         <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                     </div>
                     <div class="card-body pt-0">
                         <table class="table table-bordered">
                             <tr>
                                 <th width="30%">First Name</th>
                                 <td width="2%">:</td>
                                 <td> <?php echo $user_data['firstname']; ?></td>
                             </tr>
                             <tr>
                                 <th width="30%">Last Name </th>
                                 <td width="2%">:</td>
                                 <td> <?php echo $user_data['lastname']; ?> </td>
                             </tr>
                             <tr>
                                 <th width="30%">Email</th>
                                 <td width="2%">:</td>
                                 <td> <?php echo $user_data['email']; ?> </td>
                             </tr>
                             <tr>
                                 <th width="30%">Faculty</th>
                                 <td width="2%">:</td>
                                 <td> <?php echo $user_data['faculty']; ?></td>
                             </tr>
                             <tr>
                                 <th width="30%">Address</th>
                                 <td width="2%">:</td>
                                 <td> <?php echo $user_data['address']; ?> </td>
                             </tr>
                         </table>
                     </div>
                 </div>
                 <div style="height: 26px"></div>
                 <div class="card shadow-sm">
                     <div class="card-header bg-transparent border-0">
                         <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
                     </div>
                     <div class="card-body pt-0">
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                     </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div> -->






<div class="container emp-profile">
    <form method="post" action="<?php echo $base_url; ?>?r=editprofile&id=<?php echo $id ?>" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="<?php echo $user_data['image_url']; ?>" />
                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="file" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                        <?php echo $user_data['firstname']; ?> <?php echo $user_data['lastname']; ?>
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
                                <p> <?php echo $user_data['userid']; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label> First Name</label>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    <?php echo $user_data['firstname']; ?>
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label> Last Name</label>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    <?php echo $user_data['lastname']; ?>
                                </p>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p> <?php echo $user_data['email']; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Faculty</label>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    <?php echo $user_data['faculty']; ?>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Address</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $user_data['address']; ?></p>
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





<?php


include 'footer.php';



?>