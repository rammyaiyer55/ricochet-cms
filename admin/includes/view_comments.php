				
				<?php

					// Function for deleting posts
					delete_from_posts();

				?>

				<div class="table-responsive">
					<table class="table table-hover table-bordered">
						<thead>
							<th>ID</th>
							<th>AUTHOR</th>
							<th>COMMENT</th>
							<th>EMAIL</th>
							<th>STATUS</th>
							<th>IN RESPONSE TO</th>
							<th>DATE</th>
							<th>APPROVE</th>
							<th>UNAPPROVE</th>
							<th>DELETE</th>
						</thead>
						<tbody>
							<?php 

								$query = "SELECT * FROM comments";
				                $show_data_from_comments = mysqli_query($connection, $query);

				                while ($row = mysqli_fetch_assoc($show_data_from_comments)) {
				                    
				                    $comment_id			 =  $row['comment_id'];
				                    $comment_post_id     =  $row['comment_post_id'];
				                    $comment_author    	 =  $row['comment_author'];
				                    $comment_content	 =  $row['comment_content'];
				                    $comment_email     	 =  $row['comment_email'];
				                    $comment_status    	 =  $row['comment_status'];
				                    $comment_date    	 =  $row['comment_date'];

				                    echo "<tr>";
				                    echo "<td>$comment_id</td>";
				                    echo "<td>$comment_author</td>";
				                    echo "<td>$comment_content</td>";

				                    /*

				                    $query = "SELECT * FROM categories WHERE cat_id = '$post_category_id'";
									$edit_category_in_table = mysqli_query($connection, $query);

									while ($row = mysqli_fetch_assoc($edit_category_in_table)) {
										$cat_id    = $row['cat_id'];
										$cat_title = $row['cat_title'];
				                	
				                    	echo "<td>$cat_title</td>";
				                	} 

				                	*/

				                    echo "<td>$comment_email</td>";
				                    echo "<td>$comment_status</td>";
				                    echo "<td>Some Title Here...</td>";
				                    echo "<td>$comment_date</td>";
				                    echo "<td><a href='posts.php?source=edit_post&p_id=' id='text-link'>Approve</td>";
				                    echo "<td><a href='posts.php?delete=' id='text-link'>Unapprove</a>";
				                    echo "<td><a href='posts.php?delete=' id='text-link'>Delete</a>";
				                    echo "</tr>";

				                }

							?>
						</tbody>
					</table>
				</div>