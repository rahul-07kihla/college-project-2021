<?php
    session_start();
    include 'include/header.php';
?>
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["number"])) {
    $numberErr = "Phone number required";
  } else {
    $number = test_input($_POST["number"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["password"])) {
    $cpwdErr = "password is required";
  } else {
    $cpwd = test_input($_POST["password"]);
  }

  if (empty($_POST["resume"])) {
    $resume = "resume is required";
  } else {
    $resume = test_input($_POST["resume"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  User Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Phone Number: <input type="text" name="number">
  <span class="error">*<?php echo $numberErr;?></span>
  <br><br>
  Password <input type="password" name="pwd">
  <span class="error">*<?php echo $passwordErr;?></span>
  <br><br>
  Confirm Password <input type="password" name="cpwd">
  <span class="error">*<?php echo $cpwdErr;?></span>
  <br><br>
  Resume : <input type="file" name="resume">
  <span class="error">* <?php echo $resume;?></span><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
// echo "<h2>Your Input:</h2>";
// echo $name;
// echo "<br>";
// echo $email;
// echo "<br>";
// echo $website;
// echo "<br>";
// echo $comment;
// echo "<br>";
// echo $gender;
?>

</body>
</html>
<?php
session_destroy();
include 'include/footer.php';
?>