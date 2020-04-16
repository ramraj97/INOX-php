<?php
session_start();
if(isset($_SESSION['email']))
{
$movieid=$_GET["movieid"];
$servername='localhost';
$username='root';  
$databasename='project';
$password='';
$conn = mysqli_connect($servername, $username, $password) or die("Error".mysqli_error($conn));
$db=mysqli_select_db( $conn,$databasename) or die("Error".mysqli_error($conn));
$query="select * from movie where movieid='".$movieid."' ";
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

    <title>Description</title>
  </head>
  <body>
   <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
 <a class="navbar-brand" href="#"><h1>INOX</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="userhome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Aboutus.php">ABOUT US<span class="sr-only">(current)</span></a>
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
    <h3>MOVIE DETAIL</h3>
	<div class="card" style="width: 30rem;">
  <img src="serverimage/<?php echo $row->filename?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">NAME:</h5>
	<p class="card-text"><?php echo $row->name?></p>
	 <h5 class="card-title">RELEASE DATE:</h5>
    <p class="card-text"><?php echo $row->releasedate?></p>
	 <h5 class="card-title">LANGUAGE:</h5>
    <p class="card-text"><?php echo $row->language?></p>
	 <h5 class="card-title">TOTAL DURATION:</h5>
    <p class="card-text"><?php echo $row->totalduretion?></p>
	 <h5 class="card-title">DESCRIPTION:</h5>
    <p class="card-text"><?php echo $row->description?></p>
    <center><a href="booking.php?movieid=<?php echo $row->movieid?>" class="btn btn-primary">Book Now</a></center>
  </div>
</div>


<footer>
<div class="container">
<div class="row">
<div class="col-sm-12 col-xs-12 col-md-4 col-lg-4">
<p style="color:brown">Developed by MCKVIANS</p><br>
<p style="color:brown">hackers@gmail.com</p>
</div>
<div class="col-sm-12 col-xs-12 col-md-4 col-lg-4">
<p style="color:brown">Copyright &copy;  E-Store. All Rights Reserved </p><br>
<p style="color:brown">Contact Us: +91 9988776655 </p>
</div>
<div class="col-sm-12 col-xs-12 col-md-4 col-lg-4">
<p style="color:brown">About us</p><br>
<a href="#" style="text-decoration: none;color:brown"><p>Contact form</p></a>
</div>
</div>
</div>
</footer></center> 

    
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