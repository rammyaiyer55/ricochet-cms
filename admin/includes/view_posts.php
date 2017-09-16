<?php include("post_functions.php"); ?>
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
							<th>DELETE</th>
						</thead>
						<tbody>
							<?php 
							display_posts();
								// $query = "SELECT * FROM posts";
				    //             $show_data_from_posts = mysqli_query($connection, $query);

				    //             while ($row = mysqli_fetch_assoc($show_data_from_posts)) {
				                    
				    //                 $post_id 			 =  $row['post_id'];
				    //                 $post_title     	 =  $row['post_title'];
				    //                 $post_author    	 =  $row['post_author'];
				    //                 $post_category_id	 =  $row['post_category_id'];
				    //                 $post_date      	 =  $row['post_date'];
				    //                 $post_image     	 =  $row['post_image'];
				    //                 $post_tags	    	 =  $row['post_tags'];
				    //                 $post_status    	 =  $row['post_status'];
				    //                 $post_comment_count  =  $row['post_comment_count'];

				    //                 echo "<tr>";
				    //                 echo "<td>$post_id</td>";
				    //                 echo "<td>$post_author</td>";
				    //                 echo "<td>$post_title</td>";
				    //                 echo "<td>$post_category_id</td>";
				    //                 echo "<td>$post_status</td>";
				    //                 echo "<td align='center'><img src=\"../images/$post_image\" width=\"130\"></td>";
				    //                 echo "<td>$post_tags</td>";
				    //                 echo "<td>$post_comment_count</td>";
				    //                 echo "<td>$post_date </td>";
				    //                 echo "<td><a href=\"view_posts.php?delete={$post_id}\" id =\"text-link\" >Delete</a></td>";
								// 	echo "</tr>";

				                
								//Function for deleting a Post 
								delete_post();
							?>

						</tbody>
					</table>
				</div>