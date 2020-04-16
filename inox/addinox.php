<?php
session_start();
if(isset($_SESSION['email']))
{

?>

<DOCTYPE html>
<html>
<head>
<link href="css\bootstrap.css" rel="stylesheet">
<link href="css\bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form action="addinox1.php" method="POST">
  <div class="form-group">
   
    <label for="inoxid">INOX ID</label>
    <input type="text" class="form-control" id="inoxid" name="inoxid" aria-describedby="emailHelp" placeholder="Enter Id" required>
	 <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Name" required>
	 <label for="phonenumber">Mobile Number</label>
    <input type="text" class="form-control" id="phonenumber" name="phonenumber" aria-describedby="emailHelp" placeholder="Enter Number" required>
	 <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
 <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

<?php
}
else
{
header('location:adminlogin.php');
}
?>