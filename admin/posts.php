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
                            All Posts
                            <!-- <small> &nbsp;Subheading</small> -->
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-edit"></i>  <a>View All Posts</a>
                            </li>
                        </ol>
                <!-- Category Main Title -->						
			</div>
			
		</div>
		
		<div class="container-fluid">
			<div class="row">
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
						</thead>
						<tbody>
							<?php 

								$query = "SELECT * FROM posts";
				                $show_data_from_posts = mysqli_query($connection, $query);

				                while ($row = mysqli_fetch_assoc($show_data_from_posts)) {
				                    
				                    $post_id			 =  $row['post_id'];
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
				                    echo "<td>$post_category_id</td>";
				                    echo "<td>$post_status</td>";
				                    echo "<td align='center'><img src=\"../images/$post_image\" width=\"130\"></td>";
				                    echo "<td>$post_tags</td>";
				                    echo "<td>$post_comment_count</td>";
				                    echo "<td>$post_date </td>";
				                    echo "</tr>";

				                }

							?>
						</tbody>
					</table>
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