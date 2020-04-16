<?php
$servername='localhost';
$username='root';  
$databasename='project';
$password='';
$conn = mysqli_connect($servername, $username, $password) or die("Error".mysqli_error($conn));
$db=mysqli_select_db( $conn,$databasename) or die("Error".mysqli_error($conn));
$query="select * from movie";
$recordset=mysqli_query($conn,$query) or die("Error :".mysqli_error($conn));


$query1="select * from movie";
$recordset1=mysqli_query($conn,$query1) or die("Error :".mysqli_error($conn));

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

    <title>INOX HOMEPAGE</title>
  </head>
  <body>
 <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
 <a class="navbar-brand" href="#"><h1>CINEMAS</h1></a>
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

      
      <li class="nav-item">
        <a class="nav-link" href="contactus.php">CONTACT US<span class="sr-only">(current)</span></a>
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
	   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          REGISTER
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="userregister.php">USER</a>
          <a class="dropdown-item" href="registrationform.php">ADMIN</a>
        </div>
      </li>
 <li class="nav-item">
        <a class="nav-link" href="userlogout.php">LOGOUT<span class="sr-only">(current)</span></a>
      </li>
    </ul>
     
  </div>
</nav>
  





<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel" "height="567px">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="800">
      <img src="image\popcorn.jpg" class="d-block w-100" alt="..."height="567px">
    </div>
    <div class="carousel-item" data-interval="800">
      <img src="image\super30.jpg" class="d-block w-100" alt="..."height="567px">
    </div>
    <div class="carousel-item" data-interval="800">
      <img src="image\offer.jpg" class="d-block w-100" alt="...">
    </div>
 

  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>









<h2>NOWSHOWING:</h2>
<div class="card-group">
  <?php
         while($row=mysqli_fetch_object($recordset))
           {
       if( ($row->releasedate)<date('Y-m-d'))
           {
       ?>
  <div class="card">
    <img src="serverimage/<?php echo $row->filename?>"  alt="..."height="344">
    <div class="card-body">
      <h5 class="card-title"><?php echo $row->name?></h5>
      <p class="card-text"><?php echo $row->description?></p>
      <center><a href="detail.php?movieid=<?php echo $row->movieid?>" class="btn btn-primary" >Get Details</a></center>
    </div>
  </div>
 
<?php
         }
}
           ?>
</div>





<h2>COMING SOON:</h2>
<div class="card-group">
  <?php

  while($row1=mysqli_fetch_object($recordset1))
           {
   if( ($row1->releasedate)>date('Y-m-d'))
           {
       ?>
  <div class="card">
    <img src="serverimage/<?php echo $row1->filename?>"  alt="..."height="344">
    <div class="card-body">
      <h5 class="card-title"><?php echo $row1->name?></h5>
      <p class="card-text"><?php echo $row1->description?></p>
      <center><a href="detail.php?movieid=<?php echo $row1->movieid?>" class="btn btn-primary" class="btn btn-primary">Get Details</a></center>
    </div>
  </div>
<?php

}
 
}

           ?>
</div>






 <footer>
<div class="container">
<div class="row">
<div class="col-sm-12 col-xs-12 col-md-4 col-lg-4">
<p style="color:brown">Developed by MCKVIANS</p><br>
</div>
<div class="col-sm-12 col-xs-12 col-md-4 col-lg-4">
<p style="color:brown">Copyright &copy;  E-Store. All Rights Reserved </p><br>

</div>
<div class="col-sm-12 col-xs-12 col-md-4 col-lg-4">
<p style="color:brown">Help: +91 8450934370</p>
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



$query1="SELECT email,password  from user WHERE email='".$email1."' and  password='".$password1."' ";
$test=mysqli_query($conn,$query1);
if(mysqli_num_rows($test)>0)
{

$_SESSION['email']=$email1;


header('location:userhome.php');

}
else 
{
echo"<script>alert('wrong info')</script>";
header('location:userlogin.php');
}
}
?>
