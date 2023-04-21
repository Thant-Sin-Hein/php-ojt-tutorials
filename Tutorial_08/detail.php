<?php
include("db.php");
$id=$_GET["id"];
$select="SELECT * FROM posts WHERE ID=$id";
$runselect=mysqli_query($connect,$select);
$data=mysqli_fetch_array($runselect);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Posts View</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
</head>
<body>
<h1 class=" w-50  ms-auto me-auto bg-light border border-secondary p-2 fs-4 mb-0 border-bottom-0 mt-5">Post Details</h1>
<div class="border border-secondary w-50 ms-auto me-auto">
<h2 class=" w-100  bg-light  p-2 fs-4 mb-0"><?php echo $data['Title']?></h2>
<p class=" w-100  bg-light  p-2  mb-0"><?php echo $data['Is_published']?> at <?php echo date('M d,Y', strtotime($data['created_date']))?></p>
<p class=" w-100  bg-light  p-2  mb-0"><?php echo $data['Content']?></p>
<input class='btn btn-secondary ms-2 mt-4 mb-2 btn-sm' onclick="history.back()" value="Back">

<script src="libs/js/bootstrap.bundle.min.js"></script>
<script src="libs/js/validate.js"></script>
</body>
</html>