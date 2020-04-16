<?php
$showid=$_GET["showid"];
$servername='localhost';
$username='root';  
$databasename='project';
$password='';
 
$conn = mysqli_connect($servername, $username, $password) or die("Error".mysqli_error($conn));
 
$db=mysqli_select_db( $conn,$databasename) or die("Error".mysqli_error($conn));
 
$query="select * from showtime where showid='".$showid."'";
 $recordset=mysqli_query($conn,$query) or die("Error :".mysqli_error($conn));
 $row=mysqli_fetch_object($recordset);
?>

<html>
<head>
<title>Update showtime</title>
<link href="css\bootstrap.css" rel="stylesheet">
<link href="js\bootstrap.js" rel="stylesheet">
</head>
<body>
<form action="updateshowtime1.php"   method="post">
<h1>UPDATING</h1>

<input type="hidden" value=<?php echo $showid?> name="showid"  id="showid">


<label for="frametime">Frame Time</label>
 <input type="number" class="form-control" id="frametime" name="frametime"  placeholder="Enter Frame Time" required value="<?php echo  $row->frametime?>">
 
<label for="intervaltime">Interval Time</label>
 <input type="number" class="form-control"  id="intervel"  name="intervel"  placeholder="Interval Time" required value="<?php echo  $row->interveltime?>">
 
<label for="showdate">Show Date</label>
 <input type="date" class="form-control" id="showdate" name="showdate"  placeholder="Show Date" required value="<?php echo  $row->showdate?>">

 <label for="showtime">Show Time</label> 
 <input type="text" class="form-control" id="showtime" name="showtime"  placeholder="Show Time" required value="<?php echo $row->showtime?>"> 

<input type="hidden" id="totaltime" name="totaltime" >
 
     
 <?php echo $row->showtime?>
</div>

<script>
 
function sum()

{

var num1=document.getElementById("frametime").value;
var num2=document.getElementById("intervel").value;
document.getElementById("totaltime").value=(num1*1)+(num2*1);
}
</script>    


 <button type="submit" class="btn btn-primary" onclick="sum()">update</button>
</form>
</body>
</html>