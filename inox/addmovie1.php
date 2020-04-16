<?php
$servername="localhost";
$username="root";
$password="";
$databasename="project";

$conn=mysqli_connect($servername,$username,$password) or die("error".mysqli_error($conn));
$db=mysqli_select_db($conn,$databasename) or die("error".mysqli_error($conn));


$movieid=$_POST["movieid"];
$name=$_POST["name"];
$description=$_POST["description"];
$releasedate =$_POST["releasedate"];
$language =$_POST["language"];
$totalduretion =$_POST["totalduration"];
$filename=$_FILES["poster"]["name"];
$serverpath="serverimage/".$filename;
move_uploaded_file($_FILES["poster"]["tmp_name"],$serverpath);

$query1="SELECT movieid from movie WHERE movieid='".$movieid."' ";
$test=mysqli_query($conn,$query1);
if(mysqli_num_rows($test)>0)
{
echo("this ID already taken");
}
else 
{

$query="insert into
movie(movieid,name,description,releasedate,language,totalduretion,filename)
values('".$movieid."','".$name."','".$description."','".$releasedate."','".$language."','".$totalduretion."','".$filename."')";

$result=mysqli_query($conn,$query) or die("error".mysqli_error($conn));
if($result==1)
echo("successfully added");
}
?>
<html>
<a href="addmovie.php">ADD ANOTHER</a>
<a href="adminhome.php">HOME</a>
</html>