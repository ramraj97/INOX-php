<!DOCTYPE html>
<html>
    <head>
        <title>admin registration</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">

    </head>
    <style>
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

        input[type=text], input[type=password],input[type=date] {
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


button[type=submit]
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
        <h1>Admin Registration </h1>
      
    
<form action="registrationform1.php" method="POST">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>

    <label for="email">Email Id</label>
    <input type="text" class="form-control" id="emailid" name="email" placeholder="Email Id" required>

    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    
 
<button id="btn" type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</body>
</html>