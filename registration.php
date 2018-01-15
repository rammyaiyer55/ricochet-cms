<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>

<!-- Navigation -->
<?php  include "includes/navbar.php"; ?>

<!-- Page Content -->
<div class="container">
    
    <section id="login">
        <div class="container">
            <div class="row">
                <br>
                <hr id="hr-style">
                <div class="col-xs-6 col-xs-offset-3">

                    <div class="form-wrap">
                        <h1><i class="fa fa-fw fa-edit"></i> Register</h1>
                        <hr id="hr-style">
                        <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">
                            <div class="form-group">
                                <label for="username" class="sr-only">username</label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Enter desired username">
                            </div>
                             <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                            </div>
                             <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" name="password" id="key" class="form-control" placeholder="Enter new password">
                            </div>
                            <hr id="hr-style">
                            <input type="submit" name="submit" id="btn-login" class="btn btn-primary btn-lg btn-block" value="Sign Up">
                        </form>
                     
                    </div>

                </div> <!-- /.col-xs-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>

    <br><br>
    <hr id="hr-style">

    <!-- Footer -->
    <?php include "includes/footer.php";?>