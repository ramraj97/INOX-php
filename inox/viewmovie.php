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
$query="select * from movie";
$recordset=mysqli_query($conn,$query) or die("Error :".mysqli_error($conn));
$totrows=mysqli_num_rows($recordset);
?>
       
<!DOCTYPE html>
<html>
<title>view movie</title>
<link href="css\bootstrap.css" rel="stylesheet">
<link href="css\bootstrap.min.css" rel="stylesheet">
<body>
<h4>TOTAL MOVIES : <?php echo($totrows)?></h4>
   <table class="table">
       <thead>
       <tr>
              <th scope="col">Poster</th>
              <th scope="col">Movie Id</th>
              <th scope="col"> Movie Name</th>
              <th scope="col">Description</th>
              <th scope="col">Release Date</th>
              <th scope="col">Total Duretion</th>
              <th scope="col">Language</th>
              <th scope="col">Poster File</th>

     </tr>
     </thead>                 
                                   
        <?php
         while($row=mysqli_fetch_object($recordset))
           {
       ?>
       <tr>
           <td><img src="serverimage/<?php echo $row->filename?>" height="150px" width="100px"></td>
           <td><?php echo $row->movieid?></td>
          <td><?php echo $row->name?></td>
          <td><?php echo $row->description?></td>
          <td><?php echo $row->releasedate?></td>
          <td><?php echo $row->totalduretion?></td>
          <td><?php echo $row->language?></td>
          <td><?php echo $row->filename?></td>
           <td><span class='material-icons' style='margin-right:15px'><a href="updatemovie.php?movieid=<?php echo $row->movieid?>"> Edit</a></span>
               <span class='material-icons' style='margin-right:15px'><a href="deletemovie.php?movieid=<?php echo $row->movieid?>"> Delete</a></span>
                

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