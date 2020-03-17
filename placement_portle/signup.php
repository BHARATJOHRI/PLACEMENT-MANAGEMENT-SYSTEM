<!DOCTYPE html>
<html lang="">
<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title></title>
				<link rel="stylesheet" href="bootstrap-grid.min" type="text/css">
				
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<style>
	*{
		padding: 0;
		margin: 0;
	}
	
  

	</style>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Placement Portal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
<li class="nav-item">
<a class="nav-link btn btn-outline-success " href="signup.php" >SignUp</a></li>   
<li class="nav-item">
<a class="nav-link btn btn-outline-primary " data-toggle="modal" data-target="#myModal" href="" >Login</a></li>     
   </ul>
   
  </div>
</nav>
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
            <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form action="login.php" method="POST">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
<form class="form-horizontal" name="form" action="signup.php"  method="POST">
<fieldset>



<!-- Text input-->
<div class="container col-md-8 bg-secondary">
<div style="color:white">
<center><h1>Register Yourself</h1></center>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">

  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Select your gender" class="form-control input-md" >
   <option value="N/A">Select Gender</option>
  <option value="M">Male</option>
  <option value="F">Female</option> </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">

  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="" name="branch" placeholder="Select Your Branch" class="form-control input-md" >
<option value="N/A">Select Your Branch</option>  
  <option value="Computer Engineering">Computer Engineering</option>
		 <option value="Mechanical engineering">Mechanical Engineering</option>
  		
  		<option value="Civil Engineering">Civil Engineering</option>
  		<option value="Electical Engineering">Electical Engineering</option>

		<option value="Electronics Engineering">Electronics Engineering</option> </select>

  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label title1" for="email"></label>
  <div class="col-md-12">
    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="mob"></label>  
  <div class="col-md-12">
  <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
   <center> <input  type="submit" class="btn btn-success " value="SignUp" class="btn btn-primary"/></center>
  </div>
</div>

</fieldset>
</form>
</div><!--col-md-6 end-->
</div></div>
</div>
</div>
</body>
</html>
<?php
include "connection/db.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$branch=$_POST['branch'];
	$email=$_POST['email'];
	$mob=$_POST['mob'];
	$password=$_POST['password'];
$query="INSERT INTO `users`(`name`, `gender`, `branch`, `email`, `mob`, `password`) VALUES ('$name' , '$gender' , '$branch','$email' ,'$mob', '$password')";
	$result=mysqli_query($connection,$query);
	
}
?>
