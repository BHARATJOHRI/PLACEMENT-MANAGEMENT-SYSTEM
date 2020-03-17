<?php
require "connection.php";



if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $email = trim($_POST['email']);
echo $email;
echo $password."hej";
    $password = trim($_POST['password']);

} else {

    die('not getted');

}


$getQuery = "SELECT * FROM `users` where `email` = '$email' and `password` = '$password' ;";

$result = mysqli_query($connection, $getQuery);



$userData = mysqli_fetch_array($result);
if (!$userData) {
header("location:login.php");
	}
else{
	$user_id = $userData[0];
session_start();
$_SESSION['user'] = $user_id;
	header("location:dashbord.php");
}


?>