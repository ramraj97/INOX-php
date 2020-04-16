<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
      

    <title>INOX HOMEPAGE</title>
  </head>
    <style>
.body{
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

    

.form-group{
  padding: 16px;
  background-color: white;
    width: 300px;
  height: 100px;
  border: 1px;
    
}

        input[type=text], input[type=password],input[type=date],{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus,input[type=text]:focus{
  background-color: #ddd;
  outline: none;
}


button[type=submit1]
        {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.submit:hover {
  opacity: 1;
}

</style>
    
    
  <body>
 <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
 <a class="navbar-brand" href="#"><h1>INOX</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="userhome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Aboutus.php">ABOUT US<span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LOGIN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="userlogin.php">USER</a>
          <a class="dropdown-item" href="adminlogin.php">ADMIN</a>
        </div>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="userregister.php">USER REGISTER<span class="sr-only">(current)</span></a>
      </li>
    </ul>
     
  </div>
</nav>




<h1>Contact Us:</h1>

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Name:</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp"  placeholder="Name" required>
    <label for="exampleInputEmail1">Email:</label>
    <input type="text" class="form-control" id="email" aria-describedby="emailHelp"  placeholder="Email" required>
    <label for="exampleInputEmail1">Contact No:</label>
    <input type="text" class="form-control" id="contactno" aria-describedby="emailHelp" placeholder="Contact No" required>
      <label for="exampleInputEmail1">Subject:</label>
    <input type="text" class="form-control" id="subject" aria-describedby="emailHelp" placeholder="Subject" required>
       Comment: 
         <br />
         
         <textarea rows="5" cols="50" name="comment">
         </textarea>
    <div>
<button id="btn" type="submit1">Submit</button>
</div>
</form>
    </body>
      </html>