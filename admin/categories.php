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

					if (isset($_POST['submit'])) {
						$add_cat_title = mysqli_real_escape_string($connection, $_POST['cat_title']);

						if ($add_cat_title == "" || empty($add_cat_title)) {
							die("This field cannot be empty. Please try again! ");
						}
						else {
							$query  = "INSERT INTO categories(cat_title) ";
							$query .= "VALUE ('$add_cat_title')";

							$add_categories_in_table = mysqli_query($connection, $query);
							if (!$add_categories_in_table) {
								die("Input cannot be added into categories. Sorry! " . mysqli_error($connection));
							}
						}
					}

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

									$query = "SELECT * FROM categories";
									$show_categories_in_table = mysqli_query($connection, $query);

									if (!$show_categories_in_table) {
										die("Query cannot be processed. Sorry!" . mysqli_error($connection));
									}
									else {

										while ($row = mysqli_fetch_assoc($show_categories_in_table)) {

											$table_cat_id 	 = $row['cat_id'];
											$table_cat_title = $row['cat_title'];

								?>

								  <tr>
									<td><input type="checkbox" value=""></td>
									<td><?php echo $table_cat_id; ?></td>
									<td><?php echo $table_cat_title; ?></td>
									<td><a href="categories.php?edit=<?php echo $table_cat_id; ?>" id = "text-link">Edit</a></td>
									<td><a href="categories.php?delete=<?php echo $table_cat_id; ?>" id = "text-link">Delete</a></td>
								  </tr>

								 <?php 

								 		}
									}

								 ?>

								 <?php 

								 	if (isset($_GET['delete'])) {
								 		
								 		$delete_cat_id = $_GET['delete'];

								 		$query = "DELETE FROM categories WHERE cat_id = '$delete_cat_id'";
								 		$delete_category_from_table = mysqli_query($connection, $query);

								 		header("Location: categories.php");

								 		if (!$delete_category_from_table) {
								 			die("Category cannot be deleted. Sorry! " . mysqli_error($connection));
								 		}

								 	}

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