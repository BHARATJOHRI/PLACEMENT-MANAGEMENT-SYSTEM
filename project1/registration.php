<?php

session_start();
header('location:login.php');

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
    echo "Duplicate data";
}
else{
    $qy = "insert into signin(name, password) values ('$name','$pass')";
    mysqli_query($conn, $qy);
    echo "HEllo";
}


?>