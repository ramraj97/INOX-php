 <?php
session_start();
if(isset($_SESSION['email']))
{
$movieid=$_POST["id"];
$showdate=$_POST["date"];
$showtime=$_POST["time"];
$servername='localhost';
$username='root';  
$databasename='project';
$password='';
$conn = mysqli_connect($servername, $username, $password) or die("Error".mysqli_error($conn));
$db=mysqli_select_db( $conn,$databasename) or die("Error".mysqli_error($conn));
 

$query1="select * from showtime where movieid='".$movieid."'  AND showdate='".$showdate."' ";
$recordset1=mysqli_query($conn,$query1) or die("Error :".mysqli_error($conn));

$query2="select * from showtime where movieid='".$movieid."'  AND showdate='".$showdate."' ";
$recordset2=mysqli_query($conn,$query2) or die("Error :".mysqli_error($conn));
$row2=mysqli_fetch_object($recordset2);

$query3="select * from showtime where movieid='".$movieid."'  AND showdate='".$showdate."' ";
$recordset3=mysqli_query($conn,$query3) or die("Error :".mysqli_error($conn));
$row3=mysqli_fetch_object($recordset3);


?>




<!DOCTYPE html>
<html>
<head>
<title>Seat layout</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="jquery/jquery.min.js"></script>
        <script src="jquery/jquery-1.12.4.min.js"></script>


</head>
<body >
<div class="col-md-6">
 <table class="table tabel-bordered">
<thead>
<tr>
<td></td>
<td>1</td>
<td>2</td>
<td>3</td>
<td>4</td>
<td>5</td>
<td>6</td>
<td>7</td>
<td>8</td>
<td>9</td>
<td>10</td>
</tr>
</thead>
<tbody>
<tr>
<td>A</td>
<td ><div  id="a1" class="seat" onclick="myseat()" style="cursor:pointer"> A1</div></td>
<td><div  id="a2" class="seat" onclick="myseat()" style="cursor:pointer"> A2</div></td>
<td><div  id="a3" class="seat" onclick="myseat()" style="cursor:pointer"> A3</div></td>
<td><div  id="a4" class="seat" onclick="myseat()" style="cursor:pointer"> A4</div></td>
<td ><div  id="a5" class="seat" onclick="myseat()" style="cursor:pointer"> A5</div></td>
<td><div  id="a6" class="seat" onclick="myseat()" style="cursor:pointer"> A6</div></td>
<td><div  id="a7" class="seat" onclick="myseat()" style="cursor:pointer"> A7</div></td>
<td ><div  id="a8" class="seat" onclick="myseat()" style="cursor:pointer"> A8</div></td>
<td><div  id="a9" class="seat" onclick="myseat()" style="cursor:pointer"> A9</div></td>
<td><div  id="a10" class="seat" onclick="myseat()" style="cursor:pointer"> A10</div></td>
</tr>
<tr>
<td>B</td>
<td><div  id="b1" class="seat" onclick="myseat()" style="cursor:pointer"> B1</div></td>
<td><div  id="b2" class="seat" onclick="myseat()" style="cursor:pointer"> B2</div></td>
<td><div  id="b3" class="seat" onclick="myseat()" style="cursor:pointer"> B3</div></td>
<td><div  id="b4" class="seat" onclick="myseat()" style="cursor:pointer"> B4</div></td>
<td><div  id="b5" class="seat" onclick="myseat()" style="cursor:pointer"> B5</div></td>
<td ><div id="b6" class="seat" onclick="myseat()"style="cursor:pointer">B6</div></td>
<td><div  id="b7" class="seat" onclick="myseat()" style="cursor:pointer"> B7</div></td>
<td><div  id="b8" class="seat" onclick="myseat()" style="cursor:pointer"> B8</div></td>
<td><div  id="b9" class="seat" onclick="myseat()" style="cursor:pointer"> B9</div></td>
<td><div  id="b10" class="seat" onclick="myseat()" style="cursor:pointer"> B10</div></td>
</tr>
<tr>
<td>C</td>
<td><div  id="c1" class="seat" onclick="myseat()" style="cursor:pointer"> C1</div></td>
<td><div  id="c2" class="seat" onclick="myseat()" style="cursor:pointer"> C2</div></td>
<td><div  id="c3" class="seat" onclick="myseat()" style="cursor:pointer"> C3</div></td>
<td><div  id="c4" class="seat" onclick="myseat()" style="cursor:pointer"> C4</div></td>
<td><div  id="c5" class="seat" onclick="myseat()" style="cursor:pointer"> C5</div></td>
<td><div  id="c6" class="seat" onclick="myseat()" style="cursor:pointer"> C6</div></td>
<td><div  id="c7" class="seat" onclick="myseat()" style="cursor:pointer"> C7</div></td>
<td><div  id="c8" class="seat" onclick="myseat()" style="cursor:pointer"> C8</div></td>
<td><div  id="c9" class="seat" onclick="myseat()" style="cursor:pointer"> C9</div></td>
<td><div  id="c10" class="seat" onclick="myseat()" style="cursor:pointer">C10</div></td>
</tr>
<tr>
<td>D</td>
<td><div  id="d1" class="seat" onclick="myseat()" style="cursor:pointer"> D1</div></td>
<td><div  id="d2" class="seat" onclick="myseat()" style="cursor:pointer"> D2</div></td>
<td><div  id="d3" class="seat" onclick="myseat()" style="cursor:pointer"> D3</div></td>
<td><div  id="d4" class="seat" onclick="myseat()" style="cursor:pointer"> D4</div></td>
<td><div  id="d5" class="seat" onclick="myseat()" style="cursor:pointer"> D5</div></td>
<td><div  id="d6" class="seat" onclick="myseat()" style="cursor:pointer"> D6</div></td>
<td><div  id="d7" class="seat" onclick="myseat()" style="cursor:pointer"> D7</div></td>
<td><div  id="d8" class="seat" onclick="myseat()" style="cursor:pointer"> D8</div></td>
<td><div  id="d9" class="seat" onclick="myseat()" style="cursor:pointer"> D9</div></td>
<td><div  id="d10" class="seat" onclick="myseat()" style="cursor:pointer">D10</div></td>
</tr>
<tr><td  colspan="11">____________________________Screen This  Way________________________________</td></tr>

</tbody>
</table>
<form  method="POST" action="ticket.php">
SELECTED SEAT<input type="text" id="txtseatno" name="seat" >
<input type="hidden" name="id"  value='<?php echo $row1->movieid?>'>
<input type="hidden" name="date"  value='<?php echo $row2->showdate?>'>
<input type="hidden" name="time"  value='<?php echo $row3->showtime?>'>
<input type="submit" value="book">
</form>
</div>
</body>
<script> 
var allseat=document.querySelectorAll('.seat');


function myseat()
{


for(i=0;i<allseat.length;i++)
{
var seat=allseat[i];
//alert(seat);
seat.addEventListener('click',function()
{
var bgclr=this.style.backgroundColor;
if(bgclr=='red')
this.style.backgroundColor='white'
else
{
var seatno=document.getElementById("txtseatno").value;
seatno=seatno+this.innerHTML+",";
document.getElementById("txtseatno").value=seatno;
this.style.backgroundColor='red'
}

},false);
}
}
</script>
</html>

<?php
   
}
else
{
header('location:userlogin.php');
}

?>