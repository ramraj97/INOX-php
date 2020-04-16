<?php
$screenno=$_GET["screenno"];
$servername='localhost';
$username='root';  
$databasename='project';
$password='';
 
$conn = mysqli_connect($servername, $username, $password) or die("Error".mysqli_error($conn));
 
$db=mysqli_select_db( $conn,$databasename) or die("Error".mysqli_error($conn));
 
$query="select * from screen where screenno='".$screenno."'";
 $recordset=mysqli_query($conn,$query) or die("Error :".mysqli_error($conn));
 $row=mysqli_fetch_object($recordset);
?>

<html>
<head>
<title>Update Screen</title>
<link href="css\bootstrap.css" rel="stylesheet">
<link href="js\bootstrap.js" rel="stylesheet">
</head>
<body>
<form action="updatescreen1.php"   method="post">
<h1>UPDATING</h1>


     
	
    <label for="goldenseat">Golden Seat</label>
    <input type="text" class="form-control" id="goldenseat" name="goldenseat"  placeholder="Seat" required  value="<?php echo  $row->goldenseat?>">
  
    <label for="platinumseat">Platinum Seat</label>
    <input type="text" class="form-control" id="platinumseat" name="platinumseat"  placeholder="Seat" required value="<?php echo  $row->platinumseat?>">
 
    <label for="silverseat">Silver Seat</label>
    <input type="text" class="form-control" id="silverseat" name="silverseat" aria-describedby="emailHelp" placeholder="Seat" required value="<?php echo  $row->silverseat?>">

   <input type="hidden"  id="totalseat" name="totalseat" >

</div>

<script>
 
function sum()

{

var num1=document.getElementById("goldenseat").value;
var num2=document.getElementById("platinumseat").value;
var num3=document.getElementById("silverseat").value;
document.getElementById("totalseat").value=(num1*1)+(num2*1)+(num3*1);
}
</script>    

<input type="hidden" value=<?php echo $screenno?> name="screenno"  id="screenno">
 <button type="submit" class="btn btn-primary" onclick="sum()">update</button>
</form>
</body>
</html>