<?php include("../includes/db.php"); ?>
<?php include("includes/header.php"); ?>

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
						// echo "<h4>Connection Established!</h4><br>";
                      $add_cat_title = $_POST['cat_title'];

                      if ($add_cat_title == "" || empty($add_cat_title)) {
                      	echo "This field cannot be empty";
                      }
                      else {
                      	$query  = "INSERT INTO categories(cat_title) " ;
                        $query .= "VALUE ('$add_cat_title')";
                        $add_connection = mysqli_query($connection , $query);

                        if (!$add_connection) {
                        	die("Error!" . mysqli_error($connection));
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

					<br/>
					<br/>

					<div id="editcategory">
						<div class="form-group">
							<h4>Update Category :</h4>
							<input type="text" class="form-control">
						</div>
						<button type="submit" class="btn btn-primary" name="update">UPDATE</button>
					</div>

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
									<option seected hidden>Select your option</option>
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

								 <?php 

		                            $query = "SELECT * FROM categories";
		                            $show_data_from_categories = mysqli_query($connection, $query);

		                            while ($row = mysqli_fetch_assoc($show_data_from_categories)) {
		                                $cat_title = $row['cat_title'];
		                                $cat_id = $row['cat_id'];

		                        ?>

								<tbody>
								  <tr>
									<td><input type="checkbox" value=""></td>
									<td><?php echo $cat_id; ?></td>
									<td><?php echo $cat_title; ?></td>
									<td><a href="#" id = "text-link">Edit</a></td>
									<td><a href="#" id = "text-link">Delete</a></td>
								  </tr>
								</tbody>

								<?php } ?>

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
		
		
		
		    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>