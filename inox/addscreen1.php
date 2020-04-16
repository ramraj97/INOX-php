<?php
$servername="localhost";
$username="root";
$password="";
$databasename="project";

$conn=mysqli_connect($servername,$username,$password) or die("error".mysqli_error($conn));
$db=mysqli_select_db($conn,$databasename) or die("error".mysqli_error($conn));

$inoxid=$_POST["inoxid"];
$screenno=$_POST["screenno"];
$goldenseat=$_POST["goldenseat"];
$platinumseat=$_POST["platinumseat"];
$silverseat=$_POST["silverseat"];
$totalseat=$_POST["totalseat"];


$query1="SELECT screenno from screen WHERE screenno=' ".$screenno." ' ";
$test=mysqli_query($conn,$query1);
if(mysqli_num_rows($test)>0)
{
echo("this ID already taken");
}
else 
{

$query="insert into
screen(inoxid,screenno,goldenseat,platinumseat,silverseat,totalseat)
values(' ".$inoxid." ','".$screenno."','".$goldenseat."','".$platinumseat."','".$silverseat."','".$totalseat."')";

$result=mysqli_query($conn,$query) or die("error".mysqli_error($conn));
if($result==1)
echo("successfully added");
}
?>
<html>
<a href="addscreen.php">ADD ANOTHER</a>
<a href="adminhome.php">HOME</a>
</html>
