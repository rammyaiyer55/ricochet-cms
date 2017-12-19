
				<div class="table-responsive">
					<table class="table table-hover table-bordered">
						<thead>
							<th>ID</th>
							<th>USERNAME</th>
							<th>FIRST NAME</th>
							<th>LAST NAME</th>
							<th>EMAIL</th>
							<th>ROLE</th>
							<th></th>
							<th></th>
							<th></th>
						</thead>
						<tbody>
							<?php 

								$query = "SELECT * FROM users";
				                $show_data_from_users = mysqli_query($connection, $query);

				                while ($row = mysqli_fetch_assoc($show_data_from_users)) {
				                    
				                    $user_id  	=  $row['user_id'];
				                    $username  	=  $row['username'];
				                    $user_password  	=  $row['user_password'];
				                    $user_firstname  	=  $row['user_firstname'];
				                    $user_lastname  	=  $row['user_lastname'];
				                    $user_email  	=  $row['user_email'];
				                    $user_image  	=  $row['user_image'];
				                    $user_role  	=  $row['user_role'];

				                    echo "<tr>";
				                    echo "<td>$user_id</td>";
				                    echo "<td>$username</td>";
				                    echo "<td>$user_firstname</td>";
				                    echo "<td>$user_lastname</td>";

				                    /*

				                    $query = "SELECT * FROM categories WHERE cat_id = '$post_category_id'";
									$edit_category_in_table = mysqli_query($connection, $query);

									while ($row = mysqli_fetch_assoc($edit_category_in_table)) {
										$cat_id    = $row['cat_id'];
										$cat_title = $row['cat_title'];
				                	
				                    	echo "<td>$cat_title</td>";
				                	} 

				                	*/

				                    echo "<td>$user_email</td>";
				                    echo "<td>$user_role</td>";

				                    /*
				                    $query = "SELECT * FROM posts WHERE post_id = $comment_post_id";
				                    $select_post_category_id = mysqli_query($connection, $query);
				                    while ($row = mysqli_fetch_assoc($select_post_category_id)) {
				                    	$post_id = $row['post_id'];
				                    	$post_title = $row['post_title'];
				                    	echo "<td><a href='../post.php?p_id=$post_id'>$post_title</a></td>";
				                    }
				                    */

				                    echo "<td><a href='comments.php?approve=' id='text-link'>Approve</a>";
				                    echo "<td><a href='comments.php?unapprove=' id='text-link'>Unapprove</a>";
				                    echo "<td><a href='users.php?delete=$user_id' id='text-link'>Delete</a>";
				                    echo "</tr>";

				                }

							?>

							<!-- Approve -->
							<?php 

								if (isset($_GET['approve'])) {
									
									$approve_comment_id = $_GET['approve'];

									$query = "UPDATE comments SET comment_status = 'Approved' WHERE comment_id = $approve_comment_id";
									$approve_comment_query = mysqli_query($connection, $query);
									header("Location: comments.php");

								}

							?>

							<!-- Unpprove -->
							<?php 

								if (isset($_GET['unapprove'])) {
									
									$unapprove_comment_id = $_GET['unapprove'];

									$query = "UPDATE comments SET comment_status = 'Unapproved' WHERE comment_id = $unapprove_comment_id";
									$unapprove_comment_query = mysqli_query($connection, $query);
									header("Location: comments.php");

								}

							?>

							<!-- Delete -->
							<?php 

								if (isset($_GET['delete'])) {
									
									$delete_user_id = $_GET['delete'];

									$query = "DELETE FROM users WHERE user_id = $delete_user_id";
									$delete_comment_query = mysqli_query($connection, $query);
									header("Location: users.php");

								}

							?>

						</tbody>
					</table>
				</div>