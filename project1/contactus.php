<?php require"connection.php";

	
if($_SERVER['REQUEST_METHOD']=="POST"){
	$name=$_POST['name'];
	
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	
	$message=$_POST['message'];
	
	$contactQuery="INSERT INTO `contactus`(`name`, `email`, `subject`, `message`)VALUES ('$name','$email','$subject','$message')";
	$result=mysqli_query($connection,$contactQuery);
	
$query="SELECT * from `contactus`";
$result1=mysqli_query($connection,$query);
$row=mysqli_fetch_array($result1);



header("location:index.php");






}

?>