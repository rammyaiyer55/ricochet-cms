
<nav class="navbar navbar-inverse navbar-fixed-top animated bounceInDown" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand text-uppercase" href="#">Ricochet CMS</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                <!-- PHP for displaying the categories dynamically for the database -->
                <?php 

                    $query = "SELECT * FROM categories";
                    $show_data_from_categories = mysqli_query($connection, $query);

                    while ($row = mysqli_fetch_assoc($show_data_from_categories)) {
                        $cat_title = $row['cat_title'];

                ?>

                <li>
                    <a href="#" class="text-uppercase"><?php echo $cat_title; ?></a>
                </li>

                <?php } ?>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>