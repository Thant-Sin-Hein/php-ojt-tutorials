<?php 
    require_once 'libs/phpqrcode/qrlib.php';
    include('generate.php');
?>
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
    <input type="text" name="qrtext" id=""  class="form-control" placeholder="Enter QR Name" required>
    <span class="invalid-feedback"> Please choose a QR name.</span>
    <input type="submit" value="Generate" name="create" class="bg-primary pt-2 pb-2 text-light w-100 mt-4 border-0">
  </form>
</div>
<?php 
    if (isset($_POST['create'])) {
        $qrName = $_POST['qrtext'];
        $path='images/';
        $qrcode=$path.$qrName.".png";
        if (!file_exists($qrcode)) {
            QRcode::png($qrName,$qrcode,'H',6,6);
            echo "<p class='text-center mt-4'><img src='$qrcode' ></p>";
        }
    }
	echo  "<br>";
    echo "<h2 class='w-75 ms-auto me-auto fs-4 mt-4 pt-2 pb-2 bg-secondary ps-2 mb-0 '>QR List</h2>";
	$folder_dir="images/";
    $folder=scandir($folder_dir);
    echo "<div class='w-75 ms-auto me-auto ps-5 bg-light mt-0'>";
    for ($i=0; $i < count($folder); $i++) { 
        if ($folder[$i] != '.' && $folder[$i] != '..') {
            $filePath='images/$folderName/$fileImage[$i]';
            echo "<div class='w-25  mb-5 mt-5 d-inline-block ms-5 bg-white'>";
            echo "<p class='text-center'><img src='$folder_dir$folder[$i]' alt='Image' class='w-75 '></p>";
            echo "<p class='text-center mb-0 pb-3'>$folder[$i]</p>";
            echo "</div>";
    }
    }
    echo "</div>";
?>
<script src="libs/js/bootstrap.bundle.min.js"></script>
<script src="libs/js/validate.js"></script>
</body>
</html>



