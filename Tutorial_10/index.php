<?php
include("db.php");
error_reporting(E_ALL ^ E_WARNING);
session_start();
$id=$_SESSION['uid'];
$user="SELECT * FROM user where id='$id' ";
$runuser=mysqli_query($connect,$user);
$data=mysqli_fetch_array($runuser);

if (!$data['id']) {
    echo "<div class='d-flex justify-content-around w-100 pt-3 pb-3 bg-light'>";
    echo "<a href='index.php' class='text-decoration-none text-dark fs-5'>Home</a>";
    echo "<div>";
    echo "<a href='auth/login.php' class='btn btn-primary btn-sm'>Login</a>";
    echo "<a href='auth/register.php' class='btn btn-primary btn-sm ms-2'>Register</a>";
    echo "</div>";
    echo "</div>";
}
else {
    if (!$data['img']) {
        echo "<div class='d-flex justify-content-around w-100 pt-3 pb-3 bg-light'>";
        echo "<a href='index.php' class='text-decoration-none text-dark fs-5'>Home</a>";
        echo "<img src='images/user.jpg' alt='profile' width='50px' height='50px' class='rounded-circle'>";
        echo "</div>";
        echo "<div class='w-75 mt-0 mb-0 ms-auto me-auto d-flex justify-content-end '>";
        echo "<div class='w-25 '>";
        echo "<div class='w-50 border border-1 ps-3 pt-2 pb-2'>";
        echo "<a href='auth/profile.php' class='text-decoration-none text-dark d-block'>Profile</a>";
        echo "<input type='button' value='logout' onclick='show()' class='border border-0 bg-white'>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
    else {
        $image= "images/".basename($data['img']);
        echo "<div class='d-flex justify-content-around w-100 pt-3 pb-3 bg-light'>";
        echo "<a href='index.php' class='text-decoration-none text-dark fs-5'>Home</a>";
        echo "<img src='$image' alt='profile' width='50px' height='50px' class='rounded-circle'>";
        echo "</div>";
        echo "<div class='w-75 mt-0 mb-0 ms-auto me-auto d-flex justify-content-end '>";
        echo "<div class='w-25 '>";
        echo "<div class='w-50 border border-1 ps-3 pt-2 pb-2'>";
        echo "<a href='auth/profile.php' class='text-decoration-none text-dark d-block'>Profile</a>";
        echo "<input type='button' value='logout' onclick='show()' class='border border-0 bg-white'>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
}

if ($_GET["id"]) {
	$id =$_GET["id"];
  	$delete="DELETE FROM user WHERE id=$id";
  	$rundelete=mysqli_query($connect,$delete);
  	echo "<script>alert('Logout Successfully')</script>";
    echo "<script>location='index.php'</script>";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
</head>
<body>
  
  <h1 class="text-center align-bottom fs-1" style="margin-top:14%;">Welcome From My Website</h1>
<script src="libs/js/bootstrap.bundle.min.js"></script>
<script src="libs/js/validate.js"></script>
<script>
  function show()
  {
    var a=confirm("Are you sure to logout");
    if(a==true) {
      location="index.php?id=<?php echo $data['id'] ?>";
    }
    else {
      location="index.php";
    }
  }
</script>
</body>
</html>