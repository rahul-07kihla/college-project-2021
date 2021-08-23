<?php
    include '../include/connect.php';
    extract($_POST);
    $logo = $_POST['logo'];
    $cname = $_POST['name'];
    $req = $_POST['requirement'];
    echo $logo;
    echo "<br>";
    echo $cname;
    echo "<br>";
    echo $req;

    $q = "INSERT INTO company(logo, companyname, requirement) VALUES ('$logo','$cname','$req')";

    $res = mysqli_query($conn , $q);
    
?>