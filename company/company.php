<?php
    session_start();
    include '../include/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="action1.php" method="post">
        Company logo : <input type="file" name="logo"><br>
        Company name : <input type="text" name="name"><br>
        Company Requirement : <input type="text" name="requirement"><br>
        <input type="submit">
    </form>
</body>
</html>
<?php
session_destroy();
include '../include/footer.php';
?>