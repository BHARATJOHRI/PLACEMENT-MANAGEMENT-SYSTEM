<?php
include('connection/db.php');
include('include/header.php');
include('include/sidebar.php');

$id = $_GET['edit'];
$q = "SELECT * FROM `admin_login` WHERE id='$id'";
$query = mysqli_query($conn,$q);
while($row=mysqli_fetch_array($query)){
    $email = $row['admin_email'];
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $admin_pass = $row['admin_pass'];
    $admin_username = $row['admin_username'];
    $admin_type = $row['admin_type'];

}


?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="customers.php">Customers</a></li>
            <li class="breadcrumb-item"><a href="#">Update Customers</a></li>
        </ol>
        </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Update Customer</h1>
            
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">

              </div>
              <!-- <a class="btn btn-primary" href="add_customer.php">Add Customer </a> -->
            </div>
          </div>

        <div style="width:60%; margin-left:20%; background-color:#F2F4F4;">
          <div id="msg"></div>
          <form action="" method="POST" style="margin:3%; padding:3%;" name="customer_form" id="customer_form">
            <div class="form-group">
              <label for="Customer Email">Enter Email</label>
              <input type="email" name="email" id="email" value="<?php echo $email; ?>" class="form-control" placeholder="Enter Customer Email">
            </div>
            <div class="form-group">
              <label for="Customer Username" >Enter Username</label>
              <input type="text" name="Username" id="Username" value="<?php echo $admin_username; ?>" class="form-control" placeholder="Enter Customer Username">
            </div>
            <div class="form-group">
              <label for="First name" >Enter Password</label>
              <input type="pass" name="Password" id="Password" class="form-control" value="<?php echo $admin_pass; ?>" placeholder="Enter Password">
            </div>
            <div class="form-group">
              <label for="First name" >Enter Firstname</label>
              <input type="text" name="first_name" id="first_name" class="form-control" value="<?php echo $first_name; ?>" placeholder="Enter First name">
            </div>
            <div class="form-group">
              <label for="Last name" >Enetr Lastname</label>
              <input type="text" name="last_name" id="last_name" class="form-control" value="<?php echo $last_name; ?>" placeholder="Enter Last name">
            </div>
            <div class="form-group">
              <label for="Admin Type" >Admin Type</label>
              <select name="admin_type" class="form-control" value="<?php echo $admin_type; ?>" id="admin_type" >
                <option value="1">Super Admin</option>
                <option value="2">Customer Admin</option>
              </select>
              <br>
              <div class="form-group">
              <input type="submit" class="btn btn-block btn-success" placeholder="Update" name="submit" id="submit">
            </div>
            </div>
          </form>
        </div>



          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

            <div class="table-reponsive">
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    <!-- datatables plugin -->

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
  <!-- <script>
    $(document).ready(function(){
      $("#submit").click(function(){
          var email=$("#email").val();
          var Username=$("#Username").val();
          var Password=$("#Password").val();
          var first_name=$("#first_name").val();
          var last_name=$("#last_name").val();
          var admin_type=$("#customer_form").val();
      
          var data=$(form).serialize();

          $.ajax({
            type:"POST",
            url:"Customer_add.php",
            data:data,
            success:function(data){
              alert(data);
            }
          })
      });
    });
  </script> -->


  </body>
</html>

 
<?php
include('connection/db.php');
if(isset($_POST['submit'])){
$email = $_POST['email'];
$Password = $_POST['Password'];
$Username = $_POST['Username'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$admin_type = $_POST['admin_type'];
$q = "UPDATE `admin_login` SET `admin_email`='$email',`admin_pass`=$Password,`admin_username`='$Username',`first_name`='$first_name',`last_name`='$last_name',`admin_type`='$admin_type' WHERE id='$id'";
$queryresult = mysqli_query($conn,$q);
if($queryresult){
    echo "<script>alert('Record has been update successfully')</script>";
}
}

?>
