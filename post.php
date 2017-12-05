
<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>

    <!-- Navigation -->
    <?php include "includes/navbar.php"; ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <!-- <h1 class="page-header"> -->
                <h1>
                    #Our-Blogs
                    <small> &nbsp;Team Ricochet</small>
                </h1>

            <?php 

                if (isset($_GET['p_id'])) {
                    $caught_id  = $_GET['p_id'];
                }

                $query = "SELECT * FROM posts WHERE post_id = $caught_id";
                $show_data_from_posts = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($show_data_from_posts)) {
                    
                    $post_id        =   $row['post_id'];
                    $post_title     =   $row['post_title'];
                    $post_author    =   $row['post_author'];
                    $post_date      =   $row['post_date'];
                    $post_image     =   $row['post_image'];
                    $post_content   =   $row['post_content'];

            ?>

                <hr>
                <hr>
                <!-- First Blog Post -->
                <h2>
                    <a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date; ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
                <hr>
                <p><?php echo $post_content; ?></p><br>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <?php } ?>

                <hr>

                <!-- Blog Comments -->

                <?php 

                    if (isset($_POST['create_comment'])) {
                        
                        // $caught_id = $_GET['p_id'];
                        $comment_author   = $_POST['comment_author'];
                        $comment_email    = $_POST['comment_email'];
                        $comment_content  = mysqli_real_escape_string( $connection, $_POST['comment_content']);

                        $query  = "INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date) ";
                        $query .= "VALUES ('$caught_id', '$comment_author', '$comment_email', '$comment_content', 'unapproved', now())";

                        $create_comment_query = mysqli_query($connection, $query);

                        if (!$create_comment_query) {
                            die('Sorry! Query failed. ' . mysqli_error($connection));
                        }

                    }

                ?>

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <hr>
                    <form role="form" action="" method="post">
                        <div class="form-group">
                            <label>Name :</label>
                            <input type="text" class="form-control" name="comment_author" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label>Email :</label>
                            <input type="email" class="form-control" name="comment_email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label>Your comment :</label>
                            <textarea name="comment_content" class="form-control" rows="4" placeholder="Type here . . ."></textarea>
                        </div>
                        <button type="submit" name="create_comment" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">First comment
                            <small>&nbsp; Month Date, at Time</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

                <br>

                <!-- Comment -->
                <div class="media" style="margin-bottom: 40px;">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Second comment
                            <small>&nbsp; Month Date, at Time</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested comment
                                    <small>&nbsp; Month Date, at Time</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>

                <hr>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
           <?php include "includes/sidebar.php"; ?>

        </div>
        <!-- /.row -->

        <hr>

<!-- Footer -->
<?php include "includes/footer.php"; ?>