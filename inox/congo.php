 <?php
session_start();
if(isset($_SESSION['email']))
{

$session=$_SESSION["email"];
$servername='localhost';
$username='root';  
$databasename='project';
$password='';
$conn = mysqli_connect($servername, $username, $password) or die("Error".mysqli_error($conn));
$db=mysqli_select_db( $conn,$databasename) or die("Error".mysqli_error($conn));
 
 

$query="select * from ticket where userid='".$session."'  ";
$recordset=mysqli_query($conn,$query) or die("Error :".mysqli_error($conn));
$row=mysqli_fetch_object($recordset);












?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>congratulation</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
 <a class="navbar-brand" href="#"><h1>CINEMA</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
  </div>
</nav>
    <div class="card">
  <div class="card-header">
    <center><h2>CONGRATULATION</h2></center>
  </div>
    <div class="card-header">
    <center><h5><p>Your Tickets are booked Successfully</p></h5></center>
  </div>
  <div class="card-body">
    <center><h3 class="card-title">TICKET DETAILS</h3>
    <h5 class="card-title">USERID</h5>
	<p class="card-text">'<?php echo $row->userid?></p>
	<h5 class="card-title">DATE</h5>
	<p class="card-text">'<?php echo $row->date?></p>
	<h5 class="card-title">TIME</h5>
	<p class="card-text">'<?php echo $row->time?></p>
	<h5 class="card-title">SEAT NUMBER</h5>
	<p class="card-text">'<?php echo $row->seat?></p>
	</center>
  </div>
  <div class="card-header">
     <center><a href="userhome.php" class="btn btn-primary"> BACK TO Home</a></center>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


<?php
   
}
else
{
header('location:userlogin.php');
}

?>


