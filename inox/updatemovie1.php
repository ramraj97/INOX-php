<?php
$servername='localhost';
$username='root';  
$databasename='project';
$password='';
$conn = mysqli_connect($servername, $username, $password) or die("Error".mysqli_error($conn));
$db=mysqli_select_db( $conn,$databasename) or die("Error".mysqli_error($conn));
$name=$_POST["name"];
$description=$_POST["description"];
$releasedate=$_POST["releasedate"];
$totalduration=$_POST["totalduration"];
$language=$_POST["language"];
$movieid=$_POST["movieid"];
$query="Update movie set name='".$name."' , description='".$description."'   ,releasedate='".$releasedate."' , totalduretion='".$totalduration."' ,  language='".$language."'   where movieid='".$movieid."'  ";
 
mysqli_query($conn,$query);
echo("successfully updated");
?>
<html>
<a href="adminhome.php">HOME</a>
</html>