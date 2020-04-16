<?php
$servername="localhost";
$username="root";
$password="";
$databasename="project";

$conn=mysqli_connect($servername,$username,$password) or die("error".mysqli_error($conn));
$db=mysqli_select_db($conn,$databasename) or die("error".mysqli_error($conn));


$name=$_POST["name"];
$email=$_POST["email"];
$age=$_POST["age"];
$city=$_POST["city"];
$password=$_POST["password"];



$query1="SELECT * from user WHERE email='".$email."' ";
$test=mysqli_query($conn,$query1);
if(mysqli_num_rows($test)>0)
{
echo("this email already taken");
}
else 
{

$query="insert into
user(name,email,age,city,password)
values('".$name."','".$email."','".$age."','".$city."','".$password."')";
$result=mysqli_query($conn,$query) or die("error".mysqli_error($conn));
if($result==1)
echo("you are successfully registered");
?>
<a href="userhome.php">HOME</a>
<?php
}
?>