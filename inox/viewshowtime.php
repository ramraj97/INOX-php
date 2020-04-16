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
$query="select * from showtime";
$recordset=mysqli_query($conn,$query) or die("Error :".mysqli_error($conn));
$totrows=mysqli_num_rows($recordset);
?>
       
<!DOCTYPE html>
<html>
<title>view showtime</title>
<link href="css\bootstrap.css" rel="stylesheet">
<link href="css\bootstrap.min.css" rel="stylesheet">
<body>
   <table class="table">
       <thead>
       <tr>
              <th scope="col">inoxid</th>
              <th scope="col">screenno</th>
              <th scope="col">movieid</th>
              <th scope="col">showid</th>
              <th scope="col">frame time</th>
              <th scope="col">interval time</th>
              <th scope="col">total time</th>
              <th scope="col">show date</th>
              <th scope="col">show time</th>
              
     </tr>
     </thead>                 
                                   
        <?php
         while($row=mysqli_fetch_object($recordset))
           {
       ?>
       <tr>
           
           <td><?php echo $row->inoxid?></td>
          <td><?php echo $row->screenno?></td>
          <td><?php echo $row->movieid?></td>
          <td><?php echo $row->showid?></td>
          <td><?php echo $row->frametime?></td>
          <td><?php echo $row->interveltime?></td>
          <td><?php echo $row->totaltime?></td>
          <td><?php echo $row->showdate?></td>
          <td><?php echo $row->showtime?></td>

           <td><span class='material-icons' style='margin-right:15px'><a href="updateshowtime.php?showid=<?php echo $row->showid?>"> Edit</a></span>
               <span class='material-icons' style='margin-right:15px'><a href="deleteshowtime.php?showid=<?php echo $row->showid?>"> Delete</a></span>
                

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