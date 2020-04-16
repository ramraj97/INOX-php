<?php
$movieid=$_GET["movieid"];
$servername='localhost';
$username='root';  
$databasename='project';
$password='';
 
$conn = mysqli_connect($servername, $username, $password) or die("Error".mysqli_error($conn));
 
$db=mysqli_select_db( $conn,$databasename) or die("Error".mysqli_error($conn));
 
$query="select * from movie where movieid='".$movieid."'";
 $recordset=mysqli_query($conn,$query) or die("Error :".mysqli_error($conn));
 $row=mysqli_fetch_object($recordset);

     $language=$row->language;
 
          
?>

<html>
<head>
<title>Update Movie</title>
<link href="css\bootstrap.css" rel="stylesheet">
<link href="css\bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form action="updatemovie1.php" enctype="multipart/form-data"  method="post">
<h1>UPDATING</h1>

 
 <label for="name"> MOVIE Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required value="<?php echo  $row->name?>">
	 
<label for="description">DESCRIPTION</label>
    <textarea name="description" id="description" rows=5 cols=140 required ><?php echo  $row->description?></textarea>
	
 <label for="releasedate">RELEASE DATE</label>
    <input type="date" class="form-control" id="releasedate" name="releasedate"  value="<?php echo  $row->releasedate?>">
  
<label for="totalduration">TOTAL DURATION</label>
    <input type="number" class="form-control" id="totalduration" name="totalduration"  placeholder="In minute" value="<?php echo $row->totalduretion?>">

<label>LANGUAGE</label>
 
<Input type="radio" name="language" id="hindi"  <?php if($language=="hindi") echo "checked"?> value="hindi">
<label class="custom-control-label" for="hindi">HINDI</label>


<Input type="radio" name="language" id="english" <?php if($language=="hindi") echo "checked"?> value="english">
<label class="custom-control-label" for="english">ENGLISH</label>

<br>

<div class="custom-file">
<input type="file" class="custom-file-input" id="poster" name="poster" >
<label class="custom-file-label" for="poster">Choose file</label>
</div>


<input type="hidden" value=<?php echo $movieid?> name="movieid">
<button type="Submit" id="btn" class="btn btn-primary"> Update </button>
</form>
</body>
</html>