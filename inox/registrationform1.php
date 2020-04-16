<?php
$servername="localhost";
$username="root";
$password="";
$databasename="project";

$conn=mysqli_connect($servername,$username,$password) or die("error".mysqli_error($conn));
$db=mysqli_select_db($conn,$databasename) or die("error".mysqli_error($conn));


$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];



$query1="SELECT * from admin WHERE email='".$email."' ";
$test=mysqli_query($conn,$query1);
if(mysqli_num_rows($test)>0)
{
echo("this email already taken");
}
else 
{

$query="insert into
admin(name,email,password)
values('".$name."','".$email."','".$password."')";

$result=mysqli_query($conn,$query) or die("error".mysqli_error($conn));
if($result==1)
echo("successfully an admin added");
}
?>