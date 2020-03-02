<?php

session_start();


$servername='localhost';
$user='root';
$password='Bharat_786';
// $dbname = 'user_info';

$conn = mysqli_connect($servername,$user,$password);

if ($conn){
    echo "Connection created";
}
else{
    die("Connection not created due to :".mysqli_connect_error());
}

mysqli_select_db($conn,'sessionpractical');

$name = $_POST['user'];
$pass = $_POST['password'];

$q = "SELECT * FROM `signin` where name = '$name' && password = '$pass'";
$result = mysqli_query($conn,$q);
$num = mysqli_num_rows($result);

if($num == 1){
    
        $_SESSION['username'] = $name;
        header('location:home.php');


}
else{
    header('location:login.php');
}


?>