 <?php
session_start();
if(isset($_SESSION['email']))
{
$movieid=$_POST["id"];
$showdate=$_POST["date"];
$showtime=$_POST["time"];
$showseat=$_POST["seat"];
$session=$_SESSION["email"];


$servername='localhost';
$username='root';  
$databasename='project';
$password='';
$conn = mysqli_connect($servername, $username, $password) or die("Error".mysqli_error($conn));
$db=mysqli_select_db( $conn,$databasename) or die("Error".mysqli_error($conn));

 

$query="insert into
ticket(userid,date,time,seat)
values('".$session."','".$showdate."','".$showtime."','".$showseat."')";
$result=mysqli_query($conn,$query) or die("error".mysqli_error($conn));
if($result==1)
echo("confirmed");

?>


<a href="congo.php"> TICKET DETAIL</a>







<?php

}

else
{
header('location:userlogin.php');
}

?>