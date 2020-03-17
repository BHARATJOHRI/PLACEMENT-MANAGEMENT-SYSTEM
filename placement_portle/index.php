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
	
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height:90vh;
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
<!--<h1 style="text-align: center;color:green;text-transform: capitalize;"> Welcome vivek</h1>-->
				
			
<!--							Bootstap start									-->

<!--<h1 class="text-center bg-primary text-capitalize font-weight:bold;">hello world</h1>-->


<!--nav bar using bootstrap-->
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
        <a class="nav-link" href="#aboutus">About Us</a>
      </li>
     
     
	    <li class="nav-item">
        <a class="nav-link" href="#contactus"  >ContactUs</a>
      </li>
<li class="nav-item">
<a class="nav-link btn btn-outline-success " href="signup.php" >SignUp</a></li>   
<li class="nav-item">
<a class="nav-link btn btn-outline-primary " data-toggle="modal" data-target="#myModal" href="login.php" >Login</a></li>   
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
        <form action="validation.php" method="post" class="form-signin" id="admin_login" name="admin_login">
                    <div class="form-group">
                    <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>
                    </div>

                    <div class="form-group">
                    <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" required>
                    </div>

                    <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" id="submit" placeholder="sign in">
                </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators couresel slideshow -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img1.jpg" alt="Los Angeles" width="800px" height="500px">
    </div>
    <div class="carousel-item">
      <img src="images/img2.jpg" alt="Chicago" width="800px" height="500px">
    </div>
    <div class="carousel-item">
      <img src="images/img3.jpg" alt="New York" width="800px" height="500px">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section id="aboutus">
	<div class="container-fluid">
		<h1 class="text-center text-capitalize pt-5 pb-5">AboutUs</h1>
		<hr class="w-25 mx-auto ">
	</div>
	

<div class="row mb-5 container bg-body">
	<div class="col-lg-6 col-md-6 col-12">
		<img src="images/img4.jpg" class="img-fluid">
	</div>
	<div class="col-lg-6 col-md-6 col-12">
	<h3 class="text-center text-capitalize;">
			Our Mission
			
		</h3>
		<hr>
	<p>
	The Mission of our Training and Placement Cell is to train the students on industry needs and provide best of opportunities available in India and abroad for its students. The Goal of Training and Placement Cell is to provide career guidance and placement opportunities to 100% students studying in UIT.</p>
	</div>
</div>
</section >
  <section class="bg-light" id="contactus">
      <div class="container">
	  <br><br>
        <div class="row d-flex">
          <div class="col-md-12 ">
            <h2 class="h3">Contact Information</h2>
			<br>
          </div>
          <div class=""></div>
          <div class="col-md-3">
            <p><span>Address:</span>17km Stone, NH-2, Mathura-Delhi Road
P.O. Chaumuhan, Mathura-281 406</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="#">+ 1235 2355 98</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">placement.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="#">placementinfo.com</a></p>
          </div>
        </div>
        <div class="col-md-10">
          <div class="col-md-10 ">
            <form action="contactus.php" class="bg-white p-5 contact-form" method="POST">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea id="" cols="30" rows="7" name="message" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          
        </div>
      </div>
    </section>
	
	 
	

	
	
	<footer style="height:50px" class="bg-dark">
<p class="bg-dark text-white text-center">	@copyright placementportal.com</p>
</footer>