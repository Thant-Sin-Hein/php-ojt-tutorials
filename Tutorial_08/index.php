<?php
error_reporting(E_ALL ^ E_WARNING);
include("db.php");
if ($_GET["id"]) {
    $id =$_GET["id"];
    echo "<script>";
    echo "var a=confirm('Are You sure to delete')
    if(a==true) {
      location='index.php?cid=$id';
    }
    else {
      location='index.php';
    }";
    echo "</script>";


}
if ($_GET["cid"]) {
    $cid=$_GET["cid"];
    
  	$delete="DELETE FROM posts WHERE ID=$cid";
  	$rundelete=mysqli_query($connect,$delete);
  	echo "<script>alert('Delete Successfully')</script>";
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
  <div class='container my-5'>
    <a href="create.php" class='btn btn-primary'>Create</a>
    <h1 class=" bg-light border border-light p-2 fs-4 mb-0 mt-4">Post List</h1>
    <table class="table">
      <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>Is Published</th>
        <th>Created Date</th>
        <th>Actions</th>
      </tr>
      </thead>
      <tbody>
        <?php
        	$create="SELECT*FROM posts";
        	$result=mysqli_query($connect,$create);
        	while ($row = $result->fetch_assoc()) {
          		echo "
          		<tr>
          		<td>$row[ID]</td>
          		<td>$row[Title]</td>
          		<td>" .substr($row['Content'], 0, 50) . '...' ."</td>
          		<td>$row[Is_published]</td>
          		<td>" . date('M d,Y', strtotime($row['created_date'])) . "</td>
          		<td>
            	<a href='detail.php?id=$row[ID]' class='btn btn-info btn-sm'>View</a>
            	<a href='edit.php?id=$row[ID]' class='btn btn-danger btn-sm'>Edit</a>
            	<a href='index.php?id=$row[ID]' class='btn btn-success btn-sm'>Delete</a>
				</td>
        		</tr>
          		";
        	}
        ?>
       
      </tbody>
    </table>
  </div>

<script src="libs/js/bootstrap.bundle.min.js"></script>
<script src="libs/js/validate.js"></script>
</body>
</html>