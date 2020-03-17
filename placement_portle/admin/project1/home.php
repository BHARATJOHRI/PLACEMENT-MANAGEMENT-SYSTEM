<?php

session_start();
if(!isset($_SESSION['username'])){
  header('location:logout.php');
}


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
mysqli_select_db($conn,'quizdbase');

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <br>
    <h1 class="text-center text-primary">PLACEMENT MANAGEMENT QUIZ</h1>
    <br>


    <h2 class="text-center text-success">Welcome <?php echo $_SESSION['username']; ?></h2>
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 m-auto d-block">
    <div class="card">
    <h3 class="text-center card-header">Welcome <?php echo $_SESSION['username']; ?>,you have to select only one out of 4.<b>BEST OF LUCK</b></h3>
    </div><br>

    <form action="check.php" method="POST">

    <?php
    for($i=1;$i<12;$i++){
    $q = "SELECT * FROM `questions` WHERE qid = $i";
    $query = mysqli_query($conn,$q);

    while ($rows = mysqli_fetch_array($query)) {
      ?>
    <div class="card">
      <h4 class="card-header"><?php echo $rows['question']; ?></h4>
       <?php
      $q = "SELECT * FROM `answers` WHERE ans_id = $i";
      $query = mysqli_query($conn,$q);
  
      while ($rows = mysqli_fetch_array($query)) {
       ?> 
       <div class="card-body">
        <input type="radio" name="quizcheck[<?php echo $rows['ans_id']; ?>]" value="<?php echo $rows['aid']; ?>">
        <?php echo $rows["answer"]; ?>
       </div>

    
      
    <?php
    }
  }
}
    ?>
    <br> 
  <input type="submit" name="submit" value="Submit" class="btn btn-success m-auto d-block">

    </form>
    </div>
    <br>
    <div class="m-auto d-block">
    <a href="logout.php" class="btn btn-primary"> LOGOUT</a>
    </div>
    
 
</body>
</html> 