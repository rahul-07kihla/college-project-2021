<?php

session_start();
    if (!empty($_POST)) {
        $error = [];

        extract($_POST);

        if (empty($unm)) {
            $error['username'] = 'plaease enter user name';
        }
        if (empty($pwd)) {
            $error['password'] = 'plaease enter password';
        }
        if (!empty($error)) {
            $_SESSION['error'] = $error;
            header('location:log.php');
        // foreach ($error as $er) {
             //   echo'<font color="red">'.$er.'</font><br>';
            //}
        } else {
            include 'include/connect.php';

            $mysql = "select * from admin_login where username='$unm'
            and password='$pwd'";

            $res = mysqli_query($conn, $mysql);

            $row = mysqli_fetch_assoc(($res));
            if (!empty($row)) {
                session_start();
                $_SESSION['admin'] = $unm;

                header('location:index.php');
            } else {
                echo 'wrong Username OR Password';
            }
        }
    } else {
        header('location:log.php');
    }
