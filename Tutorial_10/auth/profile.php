<?php 
session_start();
include("../db.php");
$upid=$_SESSION['uid'];
$upuser="SELECT * FROM user where id='$upid' ";
$runupuser=mysqli_query($connect,$upuser);
$data=mysqli_fetch_array($runupuser);
if (isset($_POST['update'])) {
    $uploadName=$_POST['upname'];
    $uploaEmail=$_POST['upemail'];
    $upid=$_SESSION['uid'];
    $todaydate=date("Y-m-d-h-i-s");
  
    if (empty($_FILES['imgupload']['name'])) {
        $update="UPDATE user 
                SET name='$uploadName',
                email='$uploaEmail',
                updated_date='$todaydate'
                WHERE id='$upid'";
        $runupdate=mysqli_query($connect,$update);
        if($runupdate){
            echo "<script>alert('Profile Update Successful!')</script>";
            echo "<script>location='../index.php'</script>";
        }
        else {
            echo "<script>alert('Try again later!')</script>";
            echo "<script>location='profile.php'</script>";
        }
    }
else {
    $upimg=$_FILES['imgupload']['name'];
    $folder="../images/";
    $file_extension=pathinfo($upimg,PATHINFO_EXTENSION);
    $allowed_extensions=array('jpg','jpeg','png');
    $max_file_size = 1048576;
    $file_size = $_FILES["imgupload"]["size"];
    if (!in_array($file_extension, $allowed_extensions)) {
        echo "<script>alert('*Only JPG, JPEG, and PNG files are allowed.')</script>";
    }
    elseif ($file_size > $max_file_size) {
        echo "<script>alert('*File size must be less than 1MB!')</script>";
    }
    else {
        if ($upimg) {
            $filename=$folder."".$upimg;
            $copy=copy($_FILES['imgupload']['tmp_name'],$filename);
            if (!$copy) {
                exit ("Problem occured can't upload image!");
            }}
            $update="UPDATE user 
            SET name='$uploadName',
            email='$uploaEmail',
            img='$filename',
            updated_date='$todaydate'
            WHERE id='$upid'";
          
            $runupdate=mysqli_query($connect,$update);
            if($runupdate){
            echo "<script>alert('Profile Update Successful!')</script>";
            echo "<script>location='profile.php'</script>";
            }
            else {
            echo "<script>alert('Try again later!')</script>";
            echo "<script>location='profile.php'</script>";
            }
    }
      
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../libs/css/bootstrap.min.css">
</head>
<body>
<h1 class=" w-50  ms-auto me-auto bg-light border border-secondary p-2 ps-4 fs-4 mb-0 mt-5">My Profile Setting</h1>
<div class=" w-50  ms-auto me-auto  border border-secondary p-4 mt-0 border-top-0">
  <form action="" method="post"  class="needs-validation " novalidate enctype="multipart/form-data">
    <img src="<?php echo $data['img'] ?>" alt="" width="300px" height="300px" class='rounded-circle'>
    <label class="border border-1 border-primary rounded-3 p-1 text-primary ps-3 pe-3" style="cursor:pointer;">
    <input type="file" name="imgupload"  class='d-none'>Upload
    </label>

    <label for="" class="form-label mt-2 d-block">Name</label>
    <input type="text" name="upname"  class="form-control" placeholder="your name" value="<?php echo $data['name'] ?>" required>
    <span class="invalid-feedback">Please choose your email.</span>

    <label for="" class="form-label mt-2">Email</label>
    <input type="text" name="upemail"  class="form-control" placeholder="name@example.com" value="<?php echo $data['email'] ?>" required>
    <span class="invalid-feedback">Please choose your email.</span>
    <div class="d-flex justify-content-end">
    <input type="submit" value="Update" name="update" class="btn btn-primary mt-3 mb-3">
    </div>
  </form>
</div>

<script src="../libs/js/bootstrap.bundle.min.js"></script>
<script src="../libs/js/validate.js"></script>
</body>
</html>