<?php
$servername='localhost';
$username='root';  
$databasename='project';
$password='';
$conn = mysqli_connect($servername, $username, $password) or die("Error".mysqli_error($conn));
$db=mysqli_select_db( $conn,$databasename) or die("Error".mysqli_error($conn));
$screenno=$_GET["screenno"];
$query="delete from screen where screenno='".$screenno."'";
 mysqli_query($conn,$query);
echo "Record is deleted successfully";
?>