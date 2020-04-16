<?php
session_start();
if(isset($_SESSION['email']))
{

$movieid=$_POST["id"];
$showdate=$_POST["date"];
$servername='localhost';
$username='root';  
$databasename='project';
$password='';
$conn = mysqli_connect($servername, $username, $password) or die("Error".mysqli_error($conn));
$db=mysqli_select_db( $conn,$databasename) or die("Error".mysqli_error($conn));
 

$query1="select * from showtime where movieid='".$movieid."'  AND showdate='".$showdate."' ";
$recordset1=mysqli_query($conn,$query1) or die("Error :".mysqli_error($conn));

$query2="select * from showtime where movieid='".$movieid."'  AND showdate='".$showdate."' ";
$recordset2=mysqli_query($conn,$query2) or die("Error :".mysqli_error($conn));
$row2=mysqli_fetch_object($recordset2);

$query3="select * from showtime where movieid='".$movieid."'  AND showdate='".$showdate."' ";
$recordset3=mysqli_query($conn,$query3) or die("Error :".mysqli_error($conn));
$row3=mysqli_fetch_object($recordset3);


?>








<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>booking</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
 <a class="navbar-brand" href="#"><h1>CINEMA</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="userhome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LOGIN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="userlogin.php">USER</a>
          <a class="dropdown-item" href="adminlogin.php">ADMIN</a>
        </div>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="userregister.php">USER REGISTER<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<center>
<h1>BOOKING</h1><br>
<div class="booking">
<form method="POST" id="booking" action="seat.php">
 

<label  for="time" >SHOW TIME</label> <select name="time" id="tme" required  class="custom-select">
                               <option value="">Select</option>
                               <?php
    while($row1=mysqli_fetch_object($recordset1))
           {                    
  
        ?>
     <option value='<?php echo $row1->showtime ?>'><?php echo $row1->showtime?></option>
                               <?php
     }

                               ?>
                               </select>
<input type="hidden" name="id"  value='<?php echo $row2->movieid?>'>
<input type="hidden" name="date"  value='<?php echo $row3->showdate?>'>
<button type="submit" class="btn btn-primary">Select Seat</button>
</center>


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