<?php
session_start();
if(isset($_SESSION['email']))
{

?>
 

<DOCTYPE html>
<html>
<head>
<title>movie details</title>
<link href="css\bootstrap.css" rel="stylesheet">
<link href="js\bootstrap.js" rel="stylesheet">
</head>
<body >
<div class="col-md-8">
<h2>MOVIE DETAILS </h2>
<form action="addmovie1.php"  enctype="multipart/form-data"  method="POST">
  <div class="form-group" >
   
    <label for="movieid">MOVIE ID</label>
    <input type="text" class="form-control" id="movieid" name="movieid"  placeholder="Enter the id" required>
	
 <label for="name"> MOVIE Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
	 
<label for="description">DESCRIPTION</label>
    <textarea name="description" id="description" rows=5 cols=140 required></textarea>
	
 <label for="releasedate">RELEASE DATE</label>
    <input type="date" class="form-control" id="releasedate" name="releasedate" >
  
<label for="totalduration">TOTAL DURATION</label>
    <input type="number" class="form-control" id="totalduration" name="totalduration"  placeholder="In minute">
<label>LANGUAGE</label>
<div class="custom-control custom-radio">
<input type="radio" id="hindi" name="language" class="custom-control-input" value="hindi">
<label class="custom-control-label" for="hindi">HINDI</label>
</div>

<div class="custom-control custom-radio">
<input type="radio" id="english" name="language" class="custom-control-input" value="english">
<label class="custom-control-label" for="english">ENGLISH</label>
</div>
<br>

<div class="custom-file">
<input type="file" class="custom-file-input" id="poster" name="poster" >
<label class="custom-file-label" for="poster">Choose file</label>
</div>
  
</div>
<button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>
</body>
</html>


<?php
}
else
{
header('location:adminlogin.php');
}
?>









