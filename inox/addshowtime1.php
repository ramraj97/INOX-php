<?php
$servername="localhost";
$username="root";
$password="";
$databasename="project";

$conn=mysqli_connect($servername,$username,$password) or die("error".mysqli_error($conn));
$db=mysqli_select_db($conn,$databasename) or die("error".mysqli_error($conn));

$inoxid=$_POST["I"];
$screenno=$_POST["S"];
$movieid=$_POST["M"];
$showid=$_POST["showid"];
$frametime=$_POST["frametime"];
$intervel=$_POST["intervel"];
$totaltime=$_POST["totaltime"];
$showdate=$_POST["showdate"];
$showtime=$_POST["showtime"];

$query1="SELECT showid from showtime WHERE showid='".$showid."' ";
$test=mysqli_query($conn,$query1);
if(mysqli_num_rows($test)>0)
{
echo("this ID already taken");
}
else 
{

$query="insert into
showtime(inoxid,screenno,movieid,showid,frametime,interveltime,totaltime,showdate,showtime)
values(' ".$inoxid." ','".$screenno."','".$movieid."','".$showid."','".$frametime."','".$intervel."','".$totaltime."','".$showdate."','".$showtime."')";

$result=mysqli_query($conn,$query) or die("error".mysqli_error($conn));
if($result==1)
echo("successfully added");
}
?>
<html>
<a href="addshowtime.php">ADD ANOTHER</a>
<a href="adminhome.php">HOME</a>
</html>