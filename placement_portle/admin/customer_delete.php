<?php
include('connection/db.php');
$del = $_GET['del'];
$q = "DELETE FROM `admin_login` WHERE id='$del'";
$query = mysqli_query($conn,$q);
if($query){
    echo "<script>alert('Record has been deleted')</script>";
    header('location:Customers.php');
}

?>