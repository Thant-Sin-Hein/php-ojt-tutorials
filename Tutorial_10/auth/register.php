<?php
session_start();
include("../db.php");
if (isset($_POST['sub'])) {
    $name=$_POST['username'];
    $email=$_POST['useremail'];
    $phone=$_POST['userphone'];
    $password=$_POST['userpass'];
    $address=$_POST['txtarea'];
    if ( strlen($password)>=4) {
        $hashedPassword=password_hash($password,PASSWORD_DEFAULT);
        $img="../images/user.jpg";
  
    $checkemail="SELECT * FROM user WHERE email='$email'";
    $runcheck=mysqli_query($connect,$checkemail);
    $count=mysqli_num_rows($runcheck);
    if ($count==0) {
        $insertuser="INSERT INTO user(name,email,password,phone,img,address)values('$name','$email','$hashedPassword','$phone','$img','$address')";
        $runinsert=mysqli_query($connect,$insertuser);
        if ($runinsert) {
            echo "<script>alert('User Register Sucessful.')</script>";
        }
        else{
            echo "<script>alert('Something went wrong!Try Again!')</script>";}
        }
      
  
    
    else{
        echo "<script>alert('Email already Used Change Another Email')</script>";
    }
  }
else {
    echo "<script>alert('Password Must Be At Least 4 digit')</script>";
}
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../libs/css/bootstrap.min.css">
</head>
<body>
<h1 class=" w-50  ms-auto me-auto bg-light border border-secondary p-2 ps-4 fs-4 mb-0 mt-5">Register</h1>
<div class=" w-50  ms-auto me-auto  border border-secondary p-4 mt-0 border-top-0">
  <form action="" method="post"  class="needs-validation " novalidate >
    <label for="" class="form-label mt-2">Name</label>
    <input type="text" name="username"  class="form-control" placeholder="name" required>
    <span class="invalid-feedback">Please choose your name.</span>

    <label for="" class="form-label mt-2">Email</label>
    <input type="text" name="useremail"  class="form-control" placeholder="name@example.com" required>
    <span class="invalid-feedback">Please choose your email.</span>

    <label for="" class="form-label mt-2">Phone</label>
    <input type="number" name="userphone"  class="form-control" placeholder="09*********" style="appearance:textfield" required>
    <span class="invalid-feedback">Please choose your phone.</span>

    <label for="" class="form-label mt-2">Password</label>
    <input type="password" name="userpass"  class="form-control" placeholder="Password" required>
    <span class="invalid-feedback">Please choose your phone.</span>

    <label for="" class="form-label mt-2">Address</label>
    <textarea name="txtarea" cols="10" rows="1"  class="form-control"  required></textarea>
    <span class="invalid-feedback"> Please choose address.</span>
   
    <input type="submit" value="Register" name="sub" class="btn btn-primary mt-3 w-100 mb-3">
    <p class="w-100 text-center mb-0"><a href="login.php" class='text-decoration-none'>Already have an account</a></p>
  </form>
</div>

<script src="../libs/js/bootstrap.bundle.min.js"></script>
<script src="../libs/js/validate.js"></script>
</body>
</html>