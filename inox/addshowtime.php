<?php
session_start();
if(isset($_SESSION['email']))
{

?>


<?php
$servername='localhost';
$username='root';  
$databasename='project';
$password='';
 
$conn = mysqli_connect($servername, $username, $password) or die("Error".mysqli_error($conn));
 
$db=mysqli_select_db( $conn,$databasename) or die("Error".mysqli_error($conn));
 
$query="select inoxid from inox ";
 $recordset=mysqli_query($conn,$query) or die("Error :".mysqli_error($conn));

$query1="select movieid from movie ";
 $recordset1=mysqli_query($conn,$query1) or die("Error :".mysqli_error($conn));

$query2="select screenno from screen ";
 $recordset2=mysqli_query($conn,$query2) or die("Error :".mysqli_error($conn));
  
?>

<!DOCTYPE html>
<html>
<head>
<link href="css\bootstrap.css" rel="stylesheet">
<link href="css\bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form action="addshowtime1.php" method="POST">
  <div class="form-group">
   
    
    
		
<div class="col-md-8">
<label  for="I" >INOXID</label> <select name="I" id="I" required  class="custom-select">
                               <option value="">Select</option>
                               <?php
    while($row=mysqli_fetch_object($recordset))
           {                    
        ?>
     <option value='<?php echo $row->inoxid ?>'><?php echo $row->inoxid?></option>
                               <?php
     }
                               ?>
                               </select>


<label for="M" >MOVIE ID</label> <select name="M" id="M" required  class="custom-select">
                               <option value="">Select</option>
                               <?php
    while($row=mysqli_fetch_object($recordset1))
           {                    
        ?>
     <option value='<?php echo $row->movieid ?>'><?php echo $row->movieid?></option>
                               <?php
     }
                               ?>
                               </select>



<label  for="S" >SCREEN NUMBER</label> <select name="S" id="S" required  class="custom-select">
                               <option value="">Select</option>
                               <?php
    while($row=mysqli_fetch_object($recordset2))
           {                    
        ?>
     <option value='<?php echo $row->screenno ?>'><?php echo $row->screenno?></option>
                               <?php
     }
                               ?>
                               </select>

	
 <label for="showid">SHOW ID</label>
<input type="text" class="form-control" id="showid" name="showid"  placeholder="Enter Id" required>
 
<label for="frametime">Frame Time</label>
 <input type="number" class="form-control" id="frametime" name="frametime"  placeholder="Enter Frame Time" required>
 
<label for="intervaltime">Interval Time</label>
 <input type="number" class="form-control"  id="intervel"  name="intervel"  placeholder="Interval Time" required>
 
<label for="showdate">Show Date</label>
 <input type="date" class="form-control" id="showdate" name="showdate"  placeholder="Show Date" required>
 <label for="showtime">Show Time</label> 
 <input type="time" class="form-control" id="showtime" name="showtime"  placeholder="Show Time" required>
<input type="hidden" id="totaltime" name="totaltime" >
 <button type="submit" class="btn btn-primary"  onclick="sum()">Submit</button>
  </div>
</div>
</form>
</body>
</html>







<script>
 
function sum()

{

var num1=document.getElementById("frametime").value;
var num2=document.getElementById("intervel").value;
document.getElementById("totaltime").value=(num1*1)+(num2*1);
}
</script>    



<?php
}
else
{
header('location:adminlogin.php');
}
?>