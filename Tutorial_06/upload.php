<?php
if (isset($_POST['store'])) {
  	$folderName =$_POST['file'];
  	$path = "images/$folderName";
  
  	$imgName=$_FILES['fileimg']['name'];
  	$tmp=$_FILES['fileimg']['tmp_name'];

  	$target_file= "images/$folderName/".$imgName;
  	$image_file="images/$folderName/$imgName";

  	$folder_dir="images/";
  	$folder=scandir($folder_dir);
  	$file_dir="images/$folderName/";
  	$fileImage=scandir($file_dir);
  

  	for ($i=0; $i < count($fileImage); $i++) { 
    	if ($fileImage[$i] != '.' && $fileImage[$i] != '..') {
      	//echo $fileImage[$i];
      	$filePath='images/$folderName/$fileImage[$i]';
      	echo "<div class='w-25  mb-5 mt-5 d-inline-block ms-5 me-5'>";
     
      	echo "<img src='$file_dir$fileImage[$i]' alt='Image' class='w-100 h-25'>";
      	echo "<p class='text-center mb-0'>$folderName</p>";
      	echo "<a href='images/$folderName/$fileImage[$i]' class='mb-5 '>localhost/Tutorial_06/images/$folderName/$fileImage[$i]</a>";
     
      	echo "<form method='post' class='w-100'>";
      	echo "<input type='hidden' name='file_path' value='images/$folderName/$fileImage[$i]'>";
      	echo "<input type='submit' class='w-100 pt-2 pb-2 text-dark bg-danger border-0 mb-2' name='delete' value='delete'>";
      	echo "</form>";
    	echo "</div>";
    }
}

}
if (isset($_POST['delete'])) {
	$filePath = $_POST['file_path'];
	if (file_exists($filePath)) {
		unlink($filePath);
		echo "<script>alert('File deleted: $filePath')</script>";
	} else {
		echo "File not found: $filePath";
	} 
  }
?>