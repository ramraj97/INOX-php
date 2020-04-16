<?php
$servername="localhost";
$username="root";
$password="";
$databasename="project";

$conn=mysqli_connect($servername,$username,$password) or die("error".mysqli_error($conn));
$db=mysqli_select_db($conn,$databasename) or die("error".mysqli_error($conn));


$inoxid1=$_POST["inoxid"];
$name1=$_POST["name"];
$phonenumber1=$_POST["phonenumber"];
$email1=$_POST["email"];


$query1="SELECT * from inox WHERE inoxid='".$inoxid1."' ";
$test=mysqli_query($conn,$query1);
if(mysqli_num_rows($test)>0)
{
echo("this ID already taken");
}
else 
{

$query="insert into
inox(inoxid,name,phonenumber,email)
values('".$inoxid1."','".$name1."','".$phonenumber1."','".$email1."')";

$result=mysqli_query($conn,$query) or die("error".mysqli_error($conn));
if($result==1)
echo("successfully added");
}
?>