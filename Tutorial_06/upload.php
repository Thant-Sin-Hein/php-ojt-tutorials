<?php 
$files = glob('images/*/*.jpg');
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
		echo "<script>alert('File deleted: $filePath')</script>";
    	header("Refresh:0");
		ob_end_flush();
	}
  }
?>
