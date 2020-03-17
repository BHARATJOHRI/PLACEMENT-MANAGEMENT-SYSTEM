<?php
include('connection/db.php');
$q = "SELECT * FROM `admin_login` WHERE admin_email='{$_SESSION['email']}' && admin_type='1'";
$query = mysqli_query($conn,$q);
if (mysqli_num_rows($query)>0) {
?>
        <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <!-- <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a> -->
              </li>
              <li class="nav-item">
                <!-- <a class="nav-link" href="project1/login.php">
                  <span data-feather="shopping-cart"></span>
                  Mock Test
                </a> -->
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Customers.php">
                  <span data-feather="users"></span>
                  Freshers
                </a>
              </li>
              <li class="nav-item">
                <!-- <a class="nav-link" href="Job_create.php">
                  <span data-feather="bar-chart-2"></span>
                  Job Create
                </a> -->
              </li>
              <li class="nav-item">
                <a class="nav-link" href="create_company.php">
                  <span data-feather="layers"></span>
                  Company
                </a>
              </li>
            </ul>

 
          </div>
        </nav>
<?php
}else{
?>
  <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
          <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <!-- <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a> -->
              </li>
              <li class="nav-item">
                <a class="nav-link" href="project1/login.php">
                  <span data-feather="shopping-cart"></span>
                  Mock Test
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Customers.php">
                  <span data-feather="users"></span>
                  Freshers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Job_create.php">
                  <span data-feather="bar-chart-2"></span>
                  Job Create
                </a>
              </li>
              <li class="nav-item">
                <!-- <a class="nav-link" href="create_company.php">
                  <span data-feather="layers"></span>
                  Company
                </a> -->
              </li>
            </ul>

 
          </div>
        </nav>


<?php
}



?>