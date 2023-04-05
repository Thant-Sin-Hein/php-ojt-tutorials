<?php
$server="localhost";
$username="root";
$password="panda269";
$database="posts";
$connect=mysqli_connect($server,$username,$password,$database);
if(!$connect){
    echo mysqil_error($connect);
}
?>