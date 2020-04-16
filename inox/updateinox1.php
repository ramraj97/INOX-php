<?php
$servername='localhost';
$username='root';  
$databasename='project';
$password='';
$conn = mysqli_connect($servername, $username, $password) or die("Error".mysqli_error($conn));
$db=mysqli_select_db( $conn,$databasename) or die("Error".mysqli_error($conn));
$name=$_POST["name"];
$email=$_POST["email"];
$phonenumber=$_POST["phonenumber"];
$inoxid=$_POST["inoxid"];
$query1="Update inox set name='".$name."',email='".$email."',phonenumber='".$phonenumber."' where inoxid='".$inoxid."'";
mysqli_query($conn,$query1);
echo("successfully updated");
?>
