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
  // echo "Connection created";
}
else{
  die("Connection not created due to :".mysqli_connect_error());
}
mysqli_select_db($conn,'quizdbase');

if(isset($_POST['submit'])){
    if(!empty($_POST['quizcheck'])){
        $count  = count($_POST['quizcheck']);
        // echo "Out of 5 you have selected".$count."options";
        $result = 0;
        $i = 1;
        $selected = $_POST['quizcheck'];
        // print_r($selected);

        $q = "SELECT * FROM `questions`";
        $query = mysqli_query($conn,$q);

        while ($rows = mysqli_fetch_array($query)) {
            // print_r($rows['ans_id']);
            $checked = $rows['ans_id'] == $selected[$i];

            if($checked){
                $result++;
            }
            $i++;
        }
        // echo "hello".$result;

    }
}

    $name = $_SESSION['username'];
    $finalresult = "INSERT INTO `user`(`username`, `totalques`, `answerscorrect`) VALUES ('$name',5,'$result')";
    // $finalresult = "INSERT INTO `user` ('username','totalques','answercorrect') VALUES ('$name',5,'$result')";
    $queryresult = mysqli_query($conn,$finalresult);
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Cover Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Welcome <?php echo $_SESSION['username']; ?></h3>
          <nav class="nav nav-masthead justify-content-center">
        
            <a class="nav-link active" href="#"><a href="logout.php" class="btn btn-primary"> LOGOUT</a></a>

          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">YOUR QUIZ RESULT </h1>
        <!-- <p class="lead"><?PHP echo "Out of 5 you have selected ".$count." options"; ?></p> -->
        <p class="lead">
          <a href="#" class="btn btn-lg btn-secondary">YOUR SCORE IS <?php echo $result; ?></a>
        </p>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
        <a href="#">Good Bye</a>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>

</body>
</html>
