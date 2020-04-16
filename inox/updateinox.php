<?php
$inoxid=$_GET["inoxid"];
$servername='localhost';
$username='root';  
$databasename='project';
$password='';
 
$conn = mysqli_connect($servername, $username, $password) or die("Error".mysqli_error($conn));
 
$db=mysqli_select_db( $conn,$databasename) or die("Error".mysqli_error($conn));
 
$query="select * from inox where inoxid='".$inoxid."' ";
 $recordset=mysqli_query($conn,$query) or die("Error :".mysqli_error($conn));
 $row=mysqli_fetch_object($recordset);
 
?>
<DOCTYPE html>
<head>
<link href="css\bootstrap.css" rel="stylesheet">
<link href="css\bootstrap.min.css" rel="stylesheet">
</head>
<form action="updateinox1.php"   method="post">
<h1>UPDATING</h1>
<label>name</label><Input type="text" name="name" id="name" required placeholder="Name" value="<?php echo  $row->name?>"><br>
<label>phone number</label><Input type="text" name="phonenumber" id="phonenumber" required placeholder="number" value="<?php echo  $row->phonenumber?>"><br>
<label>email</label><Input type="email" name="email" id="email" required placeholder="email" value="<?php echo  $row->email?>"><br>

<input type="hidden" value=<?php echo $inoxid?> id="inoxid" name="inoxid">
<button type="Submit" id="btn"> Update </button>
</form>
</body>
</html>