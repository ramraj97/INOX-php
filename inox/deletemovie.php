<?php
$servername='localhost';
$username='root';  
$databasename='project';
$password='';
$conn = mysqli_connect($servername, $username, $password) or die("Error".mysqli_error($conn));
$db=mysqli_select_db( $conn,$databasename) or die("Error".mysqli_error($conn));
$movieid=$_GET["movieid"];
$query="delete from movie where movieid='".$movieid."'";
 mysqli_query($conn,$query);
echo "Record is deleted successfully";
?>