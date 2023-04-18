<?php
include("../db.php");
session_start();

if (isset($_POST['login'])) {
    $loginEmail=$_POST['logemail'];
    $loginPassword=$_POST['logpass'];

    $login="SELECT * FROM user where email='$loginEmail'";
    $runlogin=mysqli_query($connect,$login);
    $count=mysqli_num_rows($runlogin);

    if ($count>0) {
        $data=mysqli_fetch_array($runlogin);
        $verify=password_verify($loginPassword,$data['password']);
        $_SESSION['uid']=$data['id'];
        $_SESSION['uname']=$data['name'];
        $_SESSION['uemail']=$data['email'];
        $_SESSION['uimage']=$data['img'];

        if ($verify==1) {
            echo "<script>alert('User Login Successful!Welcome!')</script>";
            echo "<script>location='../index.php'</script>";
        }else {
            echo "<script>alert('Email Or Password May be wrong! Pls try again!')</script>";
            echo "<script>location='login.php'</script>";
      
        }
    }else {
        echo "<script>alert('Email Or Password May be wrong! Pls try again!')</script>";
        echo "<script>location='login.php'</script>";
    }
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
<h1 class=" w-50  ms-auto me-auto bg-light border border-secondary p-2 ps-4 fs-4 mb-0 mt-5">Login</h1>
<div class=" w-50  ms-auto me-auto  border border-secondary p-4 mt-0 border-top-0">
  <form action="" method="post"  class="needs-validation " novalidate >

    <label for="" class="form-label mt-2">Email</label>
    <input type="text" name="logemail"  class="form-control" placeholder="name@example.com" required>
    <span class="invalid-feedback">Please choose your email.</span>

    <label for="" class="form-label mt-2">Password</label>
    <input type="password" name="logpass"  class="form-control" placeholder="Password" required>
    <span class="invalid-feedback">Please choose your phone.</span>

    <a href="forget_password.php" class="text-decoration-none">forget password?</a>
   
    <input type="submit" value="Login" name="login" class="btn btn-primary mt-3 w-100 mb-3">
    <p class="w-100 text-center mb-0">Not a member?<a href="register.php" class='text-decoration-none'>Sign Up</a></p>
  </form>
</div>

<script src="../libs/js/bootstrap.bundle.min.js"></script>
<script src="../libs/js/validate.js"></script>
</body>
</html>