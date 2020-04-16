 <?php
$servername='localhost';
$username='root';  
$databasename='project';
$password='';
$conn = mysqli_connect($servername, $username, $password) or die("Error".mysqli_error($conn));
$db=mysqli_select_db( $conn,$databasename) or die("Error".mysqli_error($conn));

$showid=$_POST["showid"];
$frametime=$_POST["frametime"];
$intervel=$_POST["intervel"];
$totaltime=$_POST["totaltime"];
$showdate=$_POST["showdate"];
$showtime=$_POST["showtime"];

$query="Update showtime set  frametime='".$frametime."'   ,interveltime='".$intervel."' ,  totaltime='".$totaltime."',  showdate='".$showdate."', showtime='".$showtime."'  where showid='".$showid."' ";
mysqli_query($conn,$query);
echo("successfully updated");
?>
<html>
<a href="adminhome.php">HOME</a>
</html>