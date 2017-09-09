<?php include("../includes/db.php"); ?>
<?php include("includes/admin_header.php"); ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include("includes/navigation.php"); ?>

        <div id="page-wrapper" style="margin-top: 69px;">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Categories
                            <!-- <small> &nbsp;Subheading</small> -->
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-edit"></i>  <a href="index.html">Categories</a>
                            </li>
                        </ol>
                <!-- Category Main Title -->						
			</div>
			
		</div>
		
		<div class="well">
			<div class="row">
				<!-- Category Column -->
				<div class="col-lg-3">
					<br/>

					<?php 

						// Function for inserting values into categories
						insert_into_categories();

					?>

					<!-- Category Title -->
                    <form method="post" action="">
	                    <div class="form-group">
	                    	<h4>Add Category :</h4>
	                        <input type="text" name="cat_title" class="form-control">
	                    </div>
						<button type="submit" class="btn btn-primary" name="submit">ADD</button>
					</form>

					

					<?php 

						// Updating category
						if (isset($_GET['edit'])) {

							include("includes/update_categories.php");
						
						}

					?>

					<br/>
					<br/>

				</div>
				
				<div class="col-lg-2">
					<!-- Just some spacing -->
				</div>

				<div class="col-lg-7">
					<br/>
					<div class="row">
						<!-- Edit Categories -->
						<div class="col-lg-4">
								<select class="form-control">
									<option selected hidden>Select your option</option>
									<option>Delete</option>
									<option>Clone</option>
								</select>
							<br/>
						</div>
						<div class="col-lg-6">
							<!-- Edit Categories -->
							<button type="submit" class="btn btn-primary">APPLY</button>
						</div>
					</div>
					
					<br/>
					
					<div class="row">
						<div id="tabletitle">
						<div class="table-responsive">
							<table class="table table-hover table-bordered">
								<thead>
								  <tr>
								  	<th>Select</th>
									<th>ID</th>
									<th>Title</th>
									<th>Edit</th>
									<th>Delete</th>
								  </tr>
								</thead>
								<tbody>

								<?php

									// Function for displaying all the categories
									show_all_data_from_categories();

								?>

								 <?php 

								 	// Function for deleting category
								 	delete_from_category();

								 ?>

								</tbody>
							  </table>
						</div>
						</div>
					</div>	
				</div>
			</div>
		</div>

		<hr>

		<footer>
            <div class="row">
                <div class="col-lg-6">
                    <p>&copy; Ricochet CMS | 2017</p>
                </div>
                <div class="col-lg-6">
                    <p class="pull-right">Developed by Team Ricochet</p>
                </div>         
            </div>
            <!-- /.row -->
        </footer>
		
<?php include("includes/admin_footer.php") ?>