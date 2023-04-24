<?php
include("db.php");
error_reporting(E_ALL ^ E_WARNING);
$id=$_GET["id"];
$select="SELECT * FROM posts WHERE ID=$id";
$runselect=mysqli_query($connect,$select);
$data=mysqli_fetch_array($runselect);
if (isset($_POST['update'])) {
    if ($_POST['check']) { 
        $title=$_POST['title'];
  	    $txtArea=$_POST['txtarea'];
  	    $checkbox=$_POST['check'];
  	    $todayDate=date("Y-m-d");
  	    $update="UPDATE posts SET Title='$title',
        Content='$txtArea',
        Is_published='$checkbox',
        updated_date = '$todayDate'   
        WHERE ID='$id'";
        $runinsert=mysqli_query($connect,$update);
        if ($runinsert) {
            header("location:index.php");
        }
        else{
     	    echo "<script>alert('Something went wrong!Try Again!')</script>";}
        }
    elseif (!$_POST['check']) {
        $title=$_POST['title'];
        $txtArea=$_POST['txtarea'];
        $checkbox="Unpublished";
        $todayDate=date("Y-m-d");
        $update="UPDATE posts SET Title='$title',
        Content='$txtArea',
        Is_published='$checkbox',
        updated_date = '$todayDate'   
        WHERE ID='$id'";
        $runinsert=mysqli_query($connect,$update);
        if ($runinsert) {
            header("location:index.php");
      }
      else{
           echo "<script>alert('Something went wrong!Try Again!')</script>";}
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
<h1 class=" w-50  ms-auto me-auto bg-light border border-light p-2 fs-4 mb-0 mt-5">Edit Post</h1>
<div class=" w-50  ms-auto me-auto  border border-light p-2 mt-0">
  <form action="" method="post"  class="needs-validation " novalidate >
    <label for="" class="form-label ">Title</label>
    <input type="text" name="title"  class="form-control" placeholder="name@example.com" value="<?php echo $data['Title']?>" required>
    <span class="invalid-feedback"> Please choose a title.</span>

    <label for="" class="form-label ">Content</label>
    <textarea name="txtarea" cols="10" rows="5"  class="form-control"  required><?php echo $data['Content']?></textarea>
    <span class="invalid-feedback"> Please choose a content.</span>
    <?php
    if ($data['Is_published']=='Published') {
        echo "<input type='checkbox' name='check' value='Publish' class='mt-3 mb-3' checked>
            <label >Publish</label>";
    }else {
        echo "<input type='checkbox' name='check' value='Publish' class='mt-3 mb-3'>
            <label >Publish</label>";
    }
    ?>
    
    <div class='w-100 d-flex justify-content-between'>
    <input type="submit" value="Back" name="back"  onclick="history.back()" class="btn btn-secondary ">
    <input type="submit" value="Update" name="update" class="btn btn-primary">
    </div>
  </form>
  </div>

<script src="libs/js/bootstrap.bundle.min.js"></script>
<script src="libs/js/validate.js"></script>
</body>
</html>