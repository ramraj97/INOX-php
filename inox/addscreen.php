<?php
session_start();
if(isset($_SESSION['email']))
{

?>



<DOCTYPE html>
<html>
<head>
<title>addscreen</title>
<link href="css\bootstrap.css" rel="stylesheet">
<link href="css\bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="col-md-8">
<form action="addscreen1.php" method="POST">
  <div class="form-group">
   
   
<?php
$servername='localhost';
$username='root';  
$databasename='project';
$password='';
 
$conn = mysqli_connect($servername, $username, $password) or die("Error".mysqli_error($conn));
 
$db=mysqli_select_db( $conn,$databasename) or die("Error".mysqli_error($conn));
 
$query="select inoxid from inox ";
 $recordset=mysqli_query($conn,$query) or die("Error :".mysqli_error($conn));
?>
<label>INOX ID</label> <select name="inoxid" id="inoxid" required>
                               <option value="">Select </option>
                               <?php
    while($row=mysqli_fetch_object($recordset))
           {                    
        ?>
     <option value='<?php echo $row->inoxid ?>'><?php echo $row->inoxid?></option>
                               <?php
     }
                               ?>
                               </select>

    <label for="screenno">Screen Number</label>
    <input type="text" class="form-control" id="screenno" name="screenno" aria-describedby="emailHelp" placeholder="Email Screen Number" required>
	
    <label for="goldenseat">Golden Seat</label>
    <input type="text" class="form-control" id="goldenseat" name="goldenseat"  placeholder="Seat" required>
  
    <label for="platinumseat">Platinum Seat</label>
    <input type="text" class="form-control" id="platinumseat" name="platinumseat"  placeholder="Seat" required>
 
    <label for="silverseat">Silver Seat</label>
    <input type="text" class="form-control" id="silverseat" name="silverseat" aria-describedby="emailHelp" placeholder="Seat" required>

   <input type="hidden"  id="totalseat" name="totalseat" >

</div>
 <button type="submit" class="btn btn-primary" onclick="sum()">Submit</button>
</form>
</body>
</div>
</html>


<script>
 
function sum()

{

var num1=document.getElementById("goldenseat").value;
var num2=document.getElementById("platinumseat").value;
var num3=document.getElementById("silverseat").value;
document.getElementById("totalseat").value=(num1*1)+(num2*1)+(num3*1);
}
</script>    



<?php
}
else
{
header('location:adminlogin.php');
}
?>