<?php
error_reporting(E_ALL ^ E_WARNING);
include("db.php");
if (isset($_POST['create'])) {
  	if ($_POST['check']) {
    	$title=$_POST['title'];
    	$txtArea=$_POST['txtarea'];
    	$checkbox="Published";
    	print_r($checkbox);
    	$todayDate=date("Y-m-d");
    	$checkTitle="SELECT * FROM posts WHERE Title='$title'";
    	$runcheck=mysqli_query($connect,$checkTitle);
    	$count=mysqli_num_rows($runcheck);
    if ($count==0) {
      	$insertcustomer="INSERT INTO posts(Title,Content,Is_published,created_date)values('$title','$txtArea','$checkbox','$todayDate')";
      	$runinsert=mysqli_query($connect,$insertcustomer);
      
    if ($runinsert) {
      	header("Refresh:0");
     	echo "<script>alert('Post Created Sucessful.')</script>";
    }
    else{
     	echo "<script>alert('Something went wrong!Try Again!')</script>";}
    }
  	else {
    	echo "Title Name is already exits";
  	}
  	}
elseif (!$_POST['check']) {
    $title=$_POST['title'];
    $txtArea=$_POST['txtarea'];
    $checkbox="Unpublished";
    print_r($checkbox);
    $todayDate=date("Y-m-d");
    $checkTitle="SELECT * FROM posts WHERE Title='$title'";
    $runcheck=mysqli_query($connect,$checkTitle);
    $count=mysqli_num_rows($runcheck);
    if ($count==0) {
      	$insertcustomer="INSERT INTO posts(Title,Content,Is_published,created_date)values('$title','$txtArea','$checkbox','$todayDate')";
      	$runinsert=mysqli_query($connect,$insertcustomer);
    if ($runinsert) {
     	header("Refresh:0");
     	echo "<script>alert('Post Created Sucessful.')</script>";
    }
    else{
     	echo "<script>alert('Something went wrong!Try Again!')</script>";}
    }
  	else {
    	echo "Title Name is already exits";
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
  <title>Document</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
</head>
<body>
<h1 class=" w-50  ms-auto me-auto bg-light border border-light p-2 fs-4 mb-0 mt-5">Create Post</h1>
<div class=" w-50  ms-auto me-auto  border border-light p-2 mt-0">
  <form action="" method="post"  class="needs-validation " novalidate >
    <label for="" class="form-label ">Title</label>
    <input type="text" name="title"  class="form-control" placeholder="name@example.com" required>
    <span class="invalid-feedback"> Please choose a title.</span>
    <label for="" class="form-label ">Content</label>
    <textarea name="txtarea" cols="10" rows="5"  class="form-control"  required></textarea>
    <span class="invalid-feedback"> Please choose a content.</span>
    <input type="checkbox" name="check"  class="mt-3 mb-3">
    <label >Publish</label>
    <div class='w-100 d-flex justify-content-between'>
    <a href="index.php" class="btn btn-secondary " >Back</a>
    <input type="submit" value="Create" name="create" class="btn btn-primary">
    </div>
  </form>
  </div>

<script src="libs/js/bootstrap.bundle.min.js"></script>
<script src="libs/js/validate.js"></script>
</body>
</html>