<?php

    include 'include/connect.php';
    session_start();
    if (!empty($_POST)) {
        $error = [];
        extract($_POST);

        if (empty($unm)) {
            $error['username'] = 'plase enter uder name';
        }
        if (empty($pwd) || empty($cpwd)) {
            $error['password'] = 'plsase enter new password';
        } elseif ($pwd != $cpwd) {
            $error['same'] = 'not match password';
        }
        if (!empty($error)) {
            /* foreach ($error as $er)
                 {
                     echo'<font color="red">'.$er.'</font><br>';
                 }
             */
            $_SESSION['error'] = $error;
            header('location:forget.php');
        }
    }
