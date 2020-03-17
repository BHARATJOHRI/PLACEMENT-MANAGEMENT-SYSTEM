<?php
include('connection/db.php');
$del = $_GET['del'];
$q = "DELETE FROM `company` WHERE company_id='$del'";
$query = mysqli_query($conn,$q);
if($query){
    echo "<script>alert('Record has been deleted')</script>";
    header('location:create_company.php');
}

?>