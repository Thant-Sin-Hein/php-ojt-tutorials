<?php
session_start();
if (isset($_POST['store'])) {
  	$folderName =$_POST['file'];
  	$path = "images/$folderName";
  	if (!file_exists($path)) {
    $newFolder=mkdir("images"."/$folderName",0777,true);
    $imgName=$_FILES['fileimg']['name'];
    $tmp=$_FILES['fileimg']['tmp_name'];
    $target_file= "images/$folderName/".$imgName;
    $image_file="images/$folderName/$imgName";
    $allowed_extensions=array('jpg','jpeg','png');
    $file_extension=pathinfo($imgName,PATHINFO_EXTENSION);
    $max_file_size = 2097152;
    $file_size = $_FILES["fileimg"]["size"];
    $check="";
    if (!in_array($file_extension, $allowed_extensions)) {
        echo "<P class='text-danger text-center w-100 ' style='position:absolute;top:38%;font-size:13px;'>*Only JPG, JPEG, and PNG files are allowed!</P>";
    }
    elseif ($file_size > $max_file_size) {
        echo "<P class='text-danger text-center w-100 ' style='position:absolute;top:38%;font-size:13px;'>*File size must be less than 2MB!</P>";
    }
    elseif (file_exists("images/$folderName/$imgName")) {
        echo "<P class='text-danger text-center w-100 ' style='position:absolute;top:38%;font-size:13px;'>*Your image is already exits!</P>";
    }
    elseif (move_uploaded_file($tmp, $target_file)) {
        move_uploaded_file($tmp, $target_file);
        echo "<p class='bg-info w-25 ms-auto me-auto mt-4 mb-0 p-3 text-primary'>Upload Image Successfully!</p>";
    } else {
        echo "Error uploading file.";
    }
    }
    else {
        $imgName=$_FILES['fileimg']['name'];
        $tmp=$_FILES['fileimg']['tmp_name'];

        $target_file= "images/$folderName/".$imgName;
        $allowed_extensions=array('jpg','jpeg','png');
        $file_extension=pathinfo($imgName,PATHINFO_EXTENSION);
        $max_file_size = 2097152;
        $file_size = $_FILES["fileimg"]["size"];
        if (!in_array($file_extension, $allowed_extensions)) {
            echo "<P class='text-danger text-center w-100 ' style='position:absolute;top:38%;font-size:13px;'>*Only JPG, JPEG, and PNG files are allowed.</P>";
       	}
        elseif ($file_size > $max_file_size) {
            echo "<P class='text-danger text-center w-100 ' style='position:absolute;top:38%;font-size:13px;'>*File size must be less than 1MB!</P>";
        }
       	elseif (file_exists("images/$folderName/$imgName")) {
            echo "<P class='text-danger text-center w-100 ' style='position:absolute;top:38%;font-size:13px;'>*Your image is already exits!</P>";
       	}
       	elseif (move_uploaded_file($tmp, $target_file)) {
           	move_uploaded_file($tmp, $target_file);
           	echo "<p class='bg-info w-25 ms-auto me-auto mt-4 mb-0 p-3 text-primary'>Upload Image Successfully!</p>";
       	} else {
           	echo "Error uploading file.";
       	}
    }
}
?>
