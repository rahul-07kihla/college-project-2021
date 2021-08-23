<?php session_start();
//print_r($_SESSION['error']);?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/second.css" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary"><!------bg-primary--->
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Forget Fassword</h3></div>
                                    <div class="card-body">
                                        <form action="log_process.php" method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="unm" id="UserName" type="text" placeholder="username" />
                                                <label for="UserName">UserName</label>
												Phone number : <input id="" type="text" class="form-control" placeholder="Phone number" />
                                                
                                                <?php

                                            if (isset($_SESSION['error']['username'])) {
                                                echo '<p class="error_color">'.$_SESSION['error']['username'].'</p>';
                                            }

                                            ?>
                                            
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="pwd" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>

                                                <?php

                                            if (isset($_SESSION['error']['password'])) {
                                                echo '<p class="error_color">'.$_SESSION['error']['password'].'</p>';
                                            }

                                            ?>

                                            </div>
                                           
                                            <div class="form-floating mb-3">
                                                       <input class="form-control" name="cpwd" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                        <?php

                                                            if (isset($_SESSION['error']['same'])) {
                                                                echo '<p class="error_color">'.$_SESSION['error']['same'].'</p>';
                                                            }
                                                        ?>

                                            </div>                                        
                                                
                                                <button class="btn btn-primary">change password</button>
                                            </div>
                                        </form>

                                        <?php unset($_SESSION['error']); ?> 
                                    
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
