				
				<?php

					// Function for deleting posts
					delete_from_posts();

				?>

				<form action="" method="post">

				<div class="row">
					<div class="col-lg-3 col-xs-6">
						<div id="bulk_options_container">
							<select class="form-control" name="" id="">
								<option selected hidden>Select Your Option</option>
								<option value="">Publish</option>
								<option value="">Draft</option>
								<option value="">Delete</option>
							</select>
						</div>
					</div>
					<div class="col-lg-4 col-xs-6">
						<input type="submit" name="submit" class="btn btn-success" value="Apply">
						&nbsp;&nbsp;&nbsp;
						<a href="posts.php?source=add_post" class="btn btn-primary">Add New Post</a>
					</div>
				</div>

				<hr id="hr-style1">

				<div class="table-responsive">
					<table class="table table-hover table-bordered">

						<thead>
							<th>ID</th>
							<th>AUTHOR</th>
							<th>TITLE</th>
							<th>CATEGORY</th>
							<th>STATUS</th>
							<th>IMAGE</th>
							<th>TAGS</th>
							<th>COMMENTS</th>
							<th>DATE</th>
							<th>EDIT</th>
							<th>DELETE</th>
						</thead>
						<tbody>
							<?php 

								$query = "SELECT * FROM posts";
				                $show_data_from_posts = mysqli_query($connection, $query);

				                while ($row = mysqli_fetch_assoc($show_data_from_posts)) {
				                    
				                    $post_id 			 =  $row['post_id'];
				                    $post_title     	 =  $row['post_title'];
				                    $post_author    	 =  $row['post_author'];
				                    $post_category_id	 =  $row['post_category_id'];
				                    $post_date      	 =  $row['post_date'];
				                    $post_image     	 =  $row['post_image'];
				                    $post_tags	    	 =  $row['post_tags'];
				                    $post_status    	 =  $row['post_status'];
				                    $post_comment_count  =  $row['post_comment_count'];

				                    echo "<tr>";
				                    echo "<td>$post_id</td>";
				                    echo "<td>$post_author</td>";
				                    echo "<td>$post_title</td>";

				                    $query = "SELECT * FROM categories WHERE cat_id = '$post_category_id'";
									$edit_category_in_table = mysqli_query($connection, $query);

									while ($row = mysqli_fetch_assoc($edit_category_in_table)) {
										$cat_id    = $row['cat_id'];
										$cat_title = $row['cat_title'];
				                	
				                    	echo "<td>$cat_title</td>";
				                	}

				                    echo "<td>$post_status</td>";
				                    echo "<td align='center'><img src=\"../images/$post_image\" width=\"105\"></td>";
				                    echo "<td>$post_tags</td>";
				                    echo "<td>$post_comment_count</td>";
				                    echo "<td>$post_date </td>";
				                    echo "<td><a href='posts.php?source=edit_post&p_id=$post_id' id='text-link'>Edit</td>";
				                    echo "<td><a href='posts.php?delete=$post_id' id='text-link'>Delete</a>";
				                    echo "</tr>";

				                }

							?>
						</tbody>
					</table>

				</div>
				</form>