<?php
session_start();

if(isset($_SESSION['email']))
{
session_destroy();
echo"<script>alert('you are logged out')</script>";
header('location:userlogin.php');
}

else
{
echo"<script>alert('you are not logged in')</script>";
header('location:userlogin.php');
}
?>