<?php 
    session_start();
    if (!empty($_POST)) {
        $msg = [];
    
        extract($_POST);
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["uname"])) {
            $nameErr = "Name is required";
          } else {
            $nameErr = test_input($_POST["uname"]);
          }
    
        if (empty($email)) {
            $msg['email'] = 'please enter email';
        }
        
        if (empty($number)) {
            $msg['number'] = 'please enter phone number';
        }
    
        if (empty($pwd)) {
            $msg['password'] = 'please enter password';
        } 
        elseif ($pwd != $cpwd) 
        {
            $msg['same'] = 'please enter same password';
        }
        if(isset($_POST["registration"]))
        {
            $pname = rand(0 , 10000) . "-" . $_FILES["resume"]["name"];
    
            $tname = $_FILES["resume"]["tmp_name"];

            $uploads_dir = 'uploader';

            $file_type = $_FILES['resume']['type'];

        if ($file_type=="application/pdf") 
        {
            echo "Success<br>";
        }
        else if($file_type=="image/gif" || $file_type=="image/jpeg" || $file_type=="image/jpg" || $file_type=="image/png")
        {
            echo "file type is invalid<br>";
        }

         move_uploaded_file($tname, $uploads_dir.'/'.$pname);
     }
        if (!empty($msg)) {
            foreach ($msg as $er)
                 {
                     echo'<font color="red">'.$er.'</font><br>';
                 }
            $_SESSION['msg'] = $msg;
            header('location:register.php');
        } 
    }
        else 
        {
            include 'include/connect.php';
    
            $sql = "INSERT INTO registration(username, email, phonenumber, password, confirmpassword, resume) VALUES ('$uname','$email','$number','$pwd','$cpwd','$pname')";
            
            $res = mysqli_query($conn  , $sql);
        }
        
        if (isset($_SESSION['username'])) {
            // logged in
        } else {
            // not logged in
        }
    session_destroy();
    }
    ?>