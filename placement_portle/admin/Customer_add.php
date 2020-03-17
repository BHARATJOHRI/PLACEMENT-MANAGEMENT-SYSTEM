<!-- <?php
include('connection/db.php');

// echo $email=$_POST['email'];
echo $email=$_POST['email'];
echo $Username=$_POST['Username'];
echo $Password=$_POST['Password'];
echo $first_name=$_POST['first_name'];
echo $last_name=$_POST['last_name'];
echo $admin_type=$_POST['admin_type'];

$q = "INSERT INTO `admin_login`(`id`, `admin_email`, `admin_pass`, `admin_username`, `first_name`, `last_name`, `admin_type`) VALUES (NULL,'$email','$Password','$Username','$first_name','$last_name','$admin_type')";
$query = mysqli_query($conn,$q);
var_dump($query);
if($query){
    echo "Data has been successfully Inserted";
}
else{
    echo "Some error please try again";
}

?> -->