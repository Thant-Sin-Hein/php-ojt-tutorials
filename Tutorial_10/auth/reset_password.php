<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED & ~E_WARNING);
include("../db.php");
session_start();
$changepass= $_SESSION['newpass'];
$hashedChangepass=password_hash($changepass,PASSWORD_DEFAULT);
if ($_GET["id"]) {
	$id =$_GET["id"];
  	$updatePassword="UPDATE user 
                    SET 
                    password='$hashedChangepass'
                    WHERE id='$id'";
  	$runupdate=mysqli_query($connect,$updatePassword);
  	echo "<script>alert('Password Change Successfully')</script>";
    echo "<script>location='login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../libs/css/bootstrap.min.css">
</head>
<body>
<h1 class=" w-50  ms-auto me-auto bg-light border border-secondary p-2 ps-4 fs-4 mb-0 mt-5">Reset Password</h1>
<div class=" w-50  ms-auto me-auto  border border-secondary p-4 mt-0 border-top-0">
  <form action="" method="post"  class="needs-validation " novalidate >

    <label for="" class="form-label mt-2">Email</label>
    <input type="text" name="oldemail"  class="form-control" placeholder="name@example.com" required>
    <span class="invalid-feedback">Please choose your email.</span>

    <label for="" class="form-label mt-2">New Password</label>
    <input type="password" name="newpass"   class="form-control" placeholder="********" required>
    <span class="invalid-feedback">Please choose your phone.</span>
   
    <label for="" class="form-label mt-2">Confirm Password</label>
    <input type="password" name="conpass"  class="form-control" placeholder="********" required>
    <span class="invalid-feedback">Please choose your phone.</span>
    <?php 
    if (isset($_POST['confirm'])) {
      $newpass=$_POST['newpass'];
      $conpass=$_POST['conpass'];
      $oldemail=$_POST['oldemail'];
      $_SESSION['newpass']=$newpass;
      if ( strlen($newpass)>=4 &&  strlen($conpass)>=4) { 
        if ($newpass == $conpass) {
          $emailCheck="SELECT * FROM user where email='$oldemail'";
          $runemailCheck=mysqli_query($connect,$emailCheck);
          $count=mysqli_num_rows($runemailCheck);
          if ($count>0) {
            $data=mysqli_fetch_array($runemailCheck);
            //$_SESSION['cid']=$data['CustomerId'];
            //$_SESSION['cname']=$data['CustomerName'];
            echo "<script>location='reset_password.php?id=$data[id]'</script>";
    
          }
          else {
            echo "<script>alert('Email May be wrong! Pls try again!')</script>";
            echo "<script>location='reset_password.php'</script>";
            
          }
        }
        else {
          echo "<p class='text-danger'>*Password Must Be Match!</p>";
        }
      }
      else {
        echo "<p class='text-danger'>*Password Must Be At Least 4 digit!</p>";
      }
     
    }
    ?>
    <p class="text-end"><input type="submit" value="Confirm" name="confirm" class="btn btn-primary mt-3 mb-3" onclick="checkpass()" ></p>
  </form>
</div>
<script src="../libs/js/bootstrap.bundle.min.js"></script>
<script src="../libs/js/validate.js"></script>

</body>
</html>