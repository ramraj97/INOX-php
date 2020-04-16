 
<?php

 

$servername="localhost";
$username="root";
$password="";
$databasename="project";

$conn=mysqli_connect($servername,$username,$password) or die("error".mysqli_error($conn));
$db=mysqli_select_db($conn,$databasename) or die("error".mysqli_error($conn));


session_start();

if(isset($_SESSION['email']))
{
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
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
        <a class="nav-link" href="adminhome.php">Home <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="registrationform.php">REGISTER<span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="adminlogout.php">Logout<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<center><h1>ADMIN<h1></center>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><center>ADD INOX</center></h5>
        <center><a href="addinox.php" class="btn btn-primary">ADD</a></center>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><center>VIEW INOX</center></h5>
       <center> <a href="viewinox.php" class="btn btn-primary">VIEW</a></center>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><center>ADD SCREEN</center></h5>
        <center><a href="addscreen.php" class="btn btn-primary">ADD</a></center>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><center>VIEW SCREEN</center></h5>
       <center> <a href="viewscreen.php" class="btn btn-primary">VIEW</a></center>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><center>ADD MOVIE</center></h5>
        <center><a href="addmovie.php" class="btn btn-primary">ADD</a><center>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><center>VIEW MOVIE</center></h5>
        <center><a href="viewmovie.php" class="btn btn-primary">VIEW</a></center>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><center>ADD SHOW-TIME</center></h5>
       <center> <a href="addshowtime.php" class="btn btn-primary">ADD</a></center>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><center>VIEW SHOWTIME</center></h5>
        <center><a href="viewshowtime.php" class="btn btn-primary">VIEW</a></center>
      </div>
    </div>
  </div>
</div>
<footer>
<div class="container">
<div class="row">
<div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
<p style="color:brown">Developed by MCKVIANS</p><br>
</div>
 
<div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
<p style="color:brown">Copyright &copy;  E-Store. All Rights Reserved</p><br>
</div>

</div>
</div>
</footer></center> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


<?php

}




else{
$email1=$_POST["email"];
$password1=$_POST["password"];



$query1="SELECT email,password  from admin WHERE email='".$email1."' and  password='".$password1."' ";
$test=mysqli_query($conn,$query1);
if(mysqli_num_rows($test)>0)
{

$_SESSION['email']=$email1;


header('location:adminhome.php');

}
else 
{
echo"<script>alert('wrong info')</script>";
header('location:adminlogin.php');
}
}
?>










 

