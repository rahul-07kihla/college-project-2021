
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register</title>
        <link href="second.css" rel="stylesheet"/>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <!----bg-primary----->
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action="register_process.php" method="POST">
                                            <div class="row mb-3">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="unm" id="inputLastName" type="text" placeholder="Enter your last name" />
                                                <label for="inputLastName">User Name</label>
                                                <?php
                                                    if (isset($_SESSION['msg']['username'])) {
                                                        echo '<p class="error_color">'.$_SESSION['msg']['username'].'</p>';
                                                    }
                                                ?>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                                <?php
                                                    if (isset($_SESSION['msg']['email'])) {
                                                        echo '<p class="error_color">'.$_SESSION['msg']['email'].'</p>';
                                                    }
                                                ?>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="form-floating mb-3">
                                                <input class="form-control" name="pwd" id="inputPassword" type="password" placeholder="Create a password" />
                                                <label for="inputPassword">Password</label>
                                                <?php
                                                    if (isset($_SESSION['msg']['password'])) {
                                                        echo '<p class="error_color">'.$_SESSION['msg']['password'].'</p>';
                                                    }
                                                ?>
                                            </div>
                                                <div class="row mb-3">
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" name="cpwd" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                                            <label for="inputPasswordConfirm">Confirm Password</label>
                                                        <?php

                                                            if (isset($_SESSION['msg']['same'])) {
                                                                echo '<p class="error_color">'.$_SESSION['msg']['same'].'</p>';
                                                            }
                                                        ?>
                                                        <?php
                                                        if (isset($_SESSION['done'])) {
                                                            echo '<p class="sucssfull_color">'.$_SESSION['done'].'</p>';
                                                            unset($_SESSION['done']);
                                                        }
                                                    ?>
                                                    </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <button class="btn btn-primary btn-block" href="register_process.php" type="submit">Create Account</button></div>
                                            </div>
                                        </form>
                                        <?php unset($_SESSION['msg']); ?> 
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small">
                                            <a href="log.php">Have an account? Go to login</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <?php include 'include/footer.php'; ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
