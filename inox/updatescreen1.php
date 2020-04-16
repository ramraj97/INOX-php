<?php
$servername='localhost';
$username='root';  
$databasename='project';
$password='';
$conn = mysqli_connect($servername, $username, $password) or die("Error".mysqli_error($conn));
$db=mysqli_select_db( $conn,$databasename) or die("Error".mysqli_error($conn));

$goldenseat=$_POST["goldenseat"];
$platinumseat=$_POST["platinumseat"];
$silverseat=$_POST["silverseat"];
$totalseat=$_POST["totalseat"];
$screenno=$_POST["screenno"];

$query="Update screen set goldenseat='".$goldenseat."' , platinumseat='".$platinumseat."'   ,silverseat='".$silverseat."' ,  totalseat='".$totalseat."'    where screenno='".$screenno."'";
mysqli_query($conn,$query);
echo("successfully updated");
?>
<html>
<a href="adminhome.php">HOME</a>
</html>