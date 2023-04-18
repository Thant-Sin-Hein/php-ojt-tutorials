<?php
include("../db.php");
if (isset($_POST['send'])) {
    $sendEmail=$_POST['sendemail'];
    $subject="Check Email";
    $body="Your Email";
    $headers="From:thant269269@gmail.com";
    $emailCheck="SELECT * FROM user where email='$sendEmail'";
    $runemailCheck=mysqli_query($connect,$emailCheck);
    $count=mysqli_num_rows($runemailCheck);

if ($count>0) {
    $data=mysqli_fetch_array($runemailCheck);
    if(mail($sendEmail,$subject,$body,$headers)) {
        echo "<script>alert('your account is found.please change your password!')</script>";
        echo "<script>location='reset_password.php'</script>";
    } 
    else {
        echo "error";
    }
}
else {
    echo "<script>alert('Your account is not found!')</script>";
    echo "<script>location='forget_password.php'</script>";
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
<h1 class=" w-50  ms-auto me-auto bg-light border border-secondary p-2 ps-4 fs-4 mb-0 mt-5">Forget Password</h1>
<div class=" w-50  ms-auto me-auto  border border-secondary p-4 mt-0 border-top-0">
  <form action="" method="post"  class="needs-validation " novalidate >

    <label for="" class="form-label mt-2">Email</label>
    <input type="text" name="sendemail"  class="form-control" placeholder="name@example.com" required>
    <span class="invalid-feedback">Please choose your email.</span>
   
    <div class='w-100 d-flex justify-content-between mt-3 '>
    <a href="login.php" class="text-decoration-none">Login</a>
    <input type="submit" value="Send" name="send" class="btn btn-primary">
    </div>
  </form>
</div>

<script src="../libs/js/bootstrap.bundle.min.js"></script>
<script src="../libs/js/validate.js"></script>
</body>
</html>