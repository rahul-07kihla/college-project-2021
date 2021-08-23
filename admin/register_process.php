<?php

session_start();
if (!empty($_POST)) {
    $msg = [];

    extract(($_POST));
    if (empty($unm)) {
        $msg['username'] = 'please enter user name';
    }

    if (empty($email)) {
        $msg['email'] = 'please enter full name';
    }

    if (empty($pwd) || empty($cpwd)) {
        $msg['password'] = 'please enter carret password';
    } elseif ($pwd != $cpwd) {
        $msg['same'] = 'please enter same password';
    }
    if (!empty($msg)) {
        /* foreach ($msg as $er)
             {
                 echo'<font color="red">'.$er.'</font><br>';
             }*/
        $_SESSION['msg'] = $msg;
        header('location:register.php');
    } else {
        include 'include/connect.php';

        $mysql = "INSERT INTO admin_login( username, email, password, confirmpassword) VALUES ('$unm','$email','$pwd','$cpwd')";

        $row = mysqli_query($conn, $mysql);

        if (!empty($row)) {
            $_SESSION['done'] = 'register sucssfully';
            header('location:log.php');
        } else {
            $_SESSION['done'] = 'register unsucssfully ';
            header('location:register.php');
        }
    }
} else {
    header('location:register.php');
}
?>