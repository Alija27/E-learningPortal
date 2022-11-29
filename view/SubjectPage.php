 <?php
  include 'header.php'
  ?>

 <div class="subjectborder">
   <div class="container">
     <div class="row  justify-content-center">
       <div class="col-md-8">

         <section class="syllabus">

           <h1 class="text-center" style="border:2px solid black"> Syllabus </h1>
           <div class="cshadow card mb-3">

             <div class="card-body">

               <li class="list-group-item"> <br>
                 <a class="syllabus-link" href="<?php echo $base_url ?>admin-zone/<?php echo $syllabus['upload']; ?>">
                   <span class="download" download>View and Download &nbsp;<i class="fas fa-arrow-down"></i></span>
                 </a> 
               </li>
             </div>
           </div>

           <!-- <iframe height="500px" width="100%" src="<?php echo $base_url ?>/admin-zone/<?php echo $syllabus['upload']; ?>"></iframe> -->

         </section>

         <section class=notes>
           <h1 class="text-center" style="border:2px solid black"> Notes </h1>
           <div class=" cshadow card mb-3">

             <div class="card-body">

               <ul class="list-group list-group-flush">

                 <?php foreach ($notes as $note) : ?>
                   <li class="list-group-item"> <?php echo $note['name']; ?> <br>
                     <a class="syllabus-link" href="<?php echo $base_url ?>admin-zone/<?php echo $note['upload']; ?>">
                       <span class="download" download>View and Download &nbsp;<i class="fas fa-arrow-down"></i></span>
                     </a>
                   </li>
                 <?php endforeach; ?>



               </ul>
             </div>
           </div>

         </section>
         <section class="oldquestions">
           <h1 class="text-center" style="border:2px solid black"> Old Questions </h1>
           <div class=" cshadow card mb-3">

             <div class="card-body">
               <ul class="list-group list-group-flush">
                 <?php foreach ($oldquestions as $oldquestion) : ?>
                   <li class="list-group-item"> <?php echo $oldquestion['years']; ?> <br>
                     <a class="syllabus-link" href="<?php echo $base_url ?>admin-zone/<?php echo $oldquestion['upload']; ?>">
                       <span class="download" download>View and Download &nbsp;<i class="fas fa-arrow-down"></i></span>
                     </a>
                   </li>
                 <?php endforeach; ?>



               </ul>

             </div>
           </div>

         </section>
       </div>
     </div>
   </div>
 </div>

 </div>
 </div>
 </div>
 </div>


 <div class="container">
   <div class="row justify-content-center">
     <div class="col-lg-8">
       <div class="cshadow card mb-3">
         <h5 class="card-header"> Comments</h5>
         <div class="card-body">

         </div>
       </div>

     </div>
   </div>
 </div>



 <div class="container">
   <div class="row  justify-content-center">
     <div class="col-md-8">
       <div class="cshadow card mb-3">
         <h5 class="card-header">Leave a Comment:</h5>
         <div class="card-body">
           <form name="comment" method="post" action="<?php echo $base_url; ?>?r=SubjectPage">
             <input type="hidden" name="csrftoken" value="" />



             <div class="form-group">
               <textarea class="form-control" name="comment" rows="3" placeholder="Type Your Comment.." required> </textarea> <br>
             </div>

             <button type="submit" class="btn btn-secondary" name="submit">Submit</button>

           </form>
         </div>
       </div>

     </div>
   </div>
 </div>
 </div>




 <!--  <div class="imageContainer mondayteer" style="transform: matrix(1, 0, 0, 1, 0, 0); width: 268px; height: 192px; cursor: pointer;"></div>
 -->
 <?php
  include 'footer.php'
  ?>

































































 <!-- <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 ">
      <div class="sidebar d-flex">
        </div>
      </div>
      <div class="col-md-6 ">
        <div class="container">
          <div class="row">
            <div class="col">

            <div class="place d-flex ms-left">
          abcde
        </div>

            </div>
          </div>
        </div>
       
      </div>

      </div>

     
    </div>

</div>
 -->