<?php
include('upload.php');
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
    <span class="invalid-feedback"> Folder name field is required.</span>
    <label for="" class="form-label" >Choose Image</label>
    <input type="file" name="fileimg" id=""  class="form-control" aria-label="file example" required>
    <span class="invalid-feedback"> Image field is required.</span>
    <input type="submit" value="Upload" name="store" class="bg-info text-light w-100 mt-4 border-0">
  </form>
  </div>


<script src="lib/js/bootstrap.bundle.min.js"></script>
<script src="lib/js/validate.js"></script>
<script>
  
</script>
</body>
</html>
<?php 
ob_start();
$files = glob('images/*/*.{jpg,jpeg,png}', GLOB_BRACE);
echo "<div class='ms-5 mt-5'>";
foreach ($files as $file) {
  	$folder=basename(dirname($file));
    echo "<div class='w-25  d-inline-block ms-5 me-5'>";
    echo "<img src='$file' class='w-100 h-50'>";
    echo "<p class='text-center mb-0 fs-4'>$folder</p><br>";
    echo "<p class='ms-2 mt-0 w-100'><a href='$file' class=' mt-0 '>localhost/php-ojt-tutorials/Tutorial_06/$file</a></p>";

    echo "<form method='post' class='w-100'>";
    echo "<input type='hidden' name='file_path' value='$file'>";
    echo "<input type='submit' class='w-100 pt-2 pb-2 text-dark bg-danger border-0 mb-2' name='delete' value='delete'>";
    echo "</form>";
    echo "</div>";
}
echo "</div>";
if (isset($_POST['delete'])) {
	$filePath = $_POST['file_path'];
	if (file_exists($filePath)) {
		unlink($filePath);
    	header("Refresh:0");
        echo "<script>alert('File deleted: $filePath')</script>";
	}
}
ob_end_flush();
?>

