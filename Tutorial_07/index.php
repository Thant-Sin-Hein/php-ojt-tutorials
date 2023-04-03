<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QR Code Generate</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
</head>
<body>
<h1 class="mt-2 w-25 fs-3 pt-2 pb-2 text-center ms-auto me-auto bg-light">QR Code Generator</h1>
<div class=" w-25  ms-auto me-auto bg-gray border border-light p-2">
  <form action="" method="post"  class="needs-validation " novalidate >
    <label for="" class="form-label ">QR Name</label>
    <input type="text" name="qrtext" id=""  class="form-control" placeholder="Enter Folder Name" required>
    <span class="invalid-feedback"> Please choose a username.</span>
    <input type="submit" value="Generate" name="create" class="bg-primary pt-2 pb-2 text-light w-100 mt-3 border-0">
  </form>
</div>
<script src="libs/js/bootstrap.bundle.min.js"></script>
<script src="libs/js/validate.js"></script>
</body>
</html>
<?php
include('generate.php');
?>

