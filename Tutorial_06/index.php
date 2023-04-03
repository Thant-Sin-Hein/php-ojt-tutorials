<?php

if (isset($_POST['store'])) {
  	$folderName =$_POST['file'];
  	$path = "images/$folderName";
  	if (!file_exists($path)) {
    $newFolder=mkdir("images"."/$folderName",0777,true);
    $imgName=$_FILES['fileimg']['name'];
    $tmp=$_FILES['fileimg']['tmp_name'];

    $target_file= "images/$folderName/".$imgName;
    $image_file="images/$folderName/$imgName";
    if (file_exists("images/$folderName/$imgName")) {
      echo "<script>alert('Your image is already exit.')</script>";
    }
    else {
        if (move_uploaded_file($tmp,$target_file)) {
            move_uploaded_file($tmp,$target_file);
            echo "<p class='bg-info w-25 ms-auto me-auto mt-4 mb-0 p-3 text-primary'>Upload Image Successfully!</p>";
        }else{
            echo "error";
        }
    }
  }
  else {
    $imgName=$_FILES['fileimg']['name'];
    $tmp=$_FILES['fileimg']['tmp_name'];

    $target_file= "images/$folderName/".$imgName;
    if (file_exists("images/$folderName/$imgName")) {
        echo "<script>alert('Your image is already exit.')</script>";
    }
    else {
        if (move_uploaded_file($tmp,$target_file)) {
            move_uploaded_file($tmp,$target_file);
            echo "<p class='bg-info w-25 ms-auto me-auto mt-4 mb-0 p-3 text-primary'>Upload Image Successfully!</p>";
        }else{
            echo "error";
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
  <title>Tutorial 06</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="lib/css/bootstrap.min.css">
</head>
<body>
  <h1 class="mt-2 w-25 fs-3">Upload Image</h1>
  <div class="cover w-25">
  <form action="" method="post" class="needs-validation " novalidate  enctype="multipart/form-data">
    <label for="" class="form-label">Folder Name</label>
    <input type="text" name="file" id=""  class="form-control" placeholder="Enter Folder Name" required>
    <span class="invalid-feedback"> Please choose a username.</span>
    <label for="" class="form-label" >Choose Image</label>
    <input type="file" name="fileimg" id=""  class="form-control" aria-label="file example" required>
    <span class="invalid-feedback"> Please choose a username.</span>
       
    
    <input type="submit" value="Upload" name="store" class="bg-info text-light w-100 mt-3 border-0">
  </form>
  </div>
  
  
<?php 
include('upload.php');
?>


<script src="lib/js/bootstrap.bundle.min.js"></script>
<script src="lib/js/validate.js"></script>
<script>
  
</script>
</body>
</html>

