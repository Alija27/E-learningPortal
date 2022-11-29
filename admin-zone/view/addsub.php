


<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Add Sub Category</title>

        
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        
        <div id="wrapper">


 <?php include('includes/header.php');?>




           <?php include('includes/sidebar.php');?>
 

            <div class="content-page">
                
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Add Sub-Categories</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="<?=$base_url?>?r=dashboard">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Sub-Category </a>
                                        </li>
                                        <li class="active">
                                            Add Sub-Category
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Add Sub-Category </b></h4>
                                    <hr />
                        		


<div class="row">
<div class="col-sm-6">  


</div>
</div>





                        			<div class="row">
                        				<div class="col-md-6">
                        					<form class="form-horizontal" name="category" method="post">
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Category</label>
	                                                <div class="col-md-10">
	                                                  <select class="form-control" name="category" required>
                                                   <option value="">Select Category </option>

                                                        </select> 
	                                                </div>
	                                            </div>
	                                     



    <div class="form-group">
                                                    <label class="col-md-2 control-label">Sub-Category</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" value="" name="subcategory" required>
                                                    </div>
                                                </div>
                                         





	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Sub-Category Description</label>
	                                                <div class="col-md-10">
	                                                    <textarea class="form-control" rows="5" name="sucatdescription" required></textarea>
	                                                </div>
	                                            </div>

        <div class="form-group">
                                                    <label class="col-md-2 control-label">&nbsp;</label>
                                                    <div class="col-md-10">
                                                  
                                                <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submitsubcat">
                                                    Submit
                                                </button>
                                                    </div>
                                                </div>

	                                        </form>
                        				</div>


                        			</div>


                        			




           
                       


                                </div>
                            </div>
                        </div>
                        


                    </div> 

                </div> 

<?php include('includes/footer.php');?>

            </div>




        </div>
        



        <script>
            var resizefunc = [];
        </script>

        
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

    
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>