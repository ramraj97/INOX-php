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
$query="select * from screen";
$recordset=mysqli_query($conn,$query) or die("Error :".mysqli_error($conn));
$totrows=mysqli_num_rows($recordset);
?>
<!DOCTYPE html>
<html>
<title>view screen</title>
<head>
<link href="css\bootstrap.css" rel="stylesheet">
<link href="css\bootstrap.min.css" rel="stylesheet">
</head>
<body>
 <table class="table">
       <thead>
       <tr>
                                                             <th scope="col">INOX Id</th>
                                                            <th scope="col">Screen Number</th>
			  <th scope="col">Golden Seat</th>
			  <th scope="col">Platinum Seat</th>
                                                           <th scope="col">Silver Seat</th>
                                                           <th scope="col">Total Seat</th>
     </tr>
     </thead
	         <?php
         while($row=mysqli_fetch_object($recordset))
           {
         ?>
	 
	<tr>
				<td><?php echo $row->inoxid?></td>
				<td><?php echo $row->screenno?></td>
				<td><?php echo $row->goldenseat?></td>
				<td><?php echo $row->platinumseat?></td>
				<td><?php echo $row->silverseat?></td>
				<td><?php echo $row->totalseat?></td>										
										
<td><span class='material-icons' style='margin-right:15px'><a href="updatescreen.php?screenno=<?php echo $row->screenno?>"> Edit</a></span></td>
            
 <td> <span class='material-icons' style='margin-right:15px'><a href="deletescreen.php?screenno=<?php echo $row->screenno?>"> Delete</a></span></td>
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