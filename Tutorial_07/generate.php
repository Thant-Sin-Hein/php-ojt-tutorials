<?php 
    if (isset($_POST['create'])) {
        $qrName = $_POST['qrtext'];
        require_once 'libs/phpqrcode/qrlib.php';
        $path='images/';
        $qrcode=$path.$qrName.".png";
        if (!file_exists($qrcode)) {
            QRcode::png($qrName,$qrcode,'H',6,6);
            echo "<p class='text-center mt-4'><img src='$qrcode' ></p>";
        }
        else {
        echo "<p class='text-center mt-4 w-50 ms-auto me-auto'><img src='$qrcode' class='w-25' ></p";
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