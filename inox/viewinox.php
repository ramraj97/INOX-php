<?php
session_start();
if(isset($_SESSION['email']))
{
$servername='localhost';
$username='root';  
$databasename='project';
$password='';
$conn = mysqli_connect($servername, $username, $password) or die("Error".mysqli_error($conn));
$db=mysqli_select_db( $conn,$databasename) or die("Error".mysqli_error($conn));
$query="select * from inox";
$recordset=mysqli_query($conn,$query) or die("Error :".mysqli_error($conn));
$totrows=mysqli_num_rows($recordset);
?>
<!DOCTYPE html>
<html>
<title>view inox</title>
<head>
<link href="css\bootstrap.css" rel="stylesheet">
<link href="css\bootstrap.min.css" rel="stylesheet">
</head>
<body>
 <table class="table">
       <thead>
       <tr>
              <th scope="col">INOX Id</th>
              <th scope="col">Name</th>
			  <th scope="col">Mobile Number</th>
			  <th scope="col">Email Address</th>
     </tr>
     </thead
	         <?php
         while($row=mysqli_fetch_object($recordset))
           {
         ?>
	 
	<tr>
				<td><?php echo $row->inoxid?></td>
				<td><?php echo $row->name?></td>
				<td><?php echo $row->phonenumber?></td>
				<td><?php echo $row->email?></td>
										
										
			<td><span class='material-icons' style='margin-right:15px'><a href="updateinox.php?inoxid=<?php echo trim($row->inoxid)?>"> Edit</a></span></td>
             <td> <span class='material-icons' style='margin-right:15px'><a href="deleteinox.php?inoxid=<?php echo $row->inoxid?>"> Delete</a></span></td>
	</tr>
            
          <?php
         }
}
else
{
header('location:adminlogin.php');
}

           ?>

	 
</table>
</body>
</html>	 