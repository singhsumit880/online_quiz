<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    }
if(isset($_POST)){
    include 'connection.php';
    $sub_id=$_POST['subject'];
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    $sql="SELECT * FROM `question` WHERE `sub_id`='$sub_id'";
    $query=mysqli_query($conn,$sql);
    $count=0;
    $correct=0;
    $wrong=0;
    $notanswered=0;
    while($row= mysqli_fetch_array($query)){
        $count++;

    // echo "<pre>";
    // print_r($row['answer']);
    // echo "</pre>";
     if($row['answer']==$_POST['answer'.$count]){
         $correct++;

     }
     elseif($_POST['answer'.$count]=='null'){
         $notanswered++;
     }
     else{
         $wrong++;
    }

    }
    // echo $wrong;
    // echo "<br>";
    // echo $correct;
    // echo "<br>";
    // echo $notanswered;
    $total=$wrong+$notanswered+$correct;
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Online Quiz</title>
    <style>
    .p{
        height:100%;
    }
   
    </style>
  </head>
 
  <body>
  <?php include 'userheader.php' ?>
  <div class="container-fluid bg">
        <div class="container log">

                 <div class="form-outline mb-4 centered main">
                    <h1 class="card-title">No. of Question : <?php echo $total; ?> </h1>
                    <h1 class="card-title">Correct : <?php echo $correct; ?> </h1>
                    <h1 class="card-title">Wrong : <?php echo $wrong; ?> </h1>
                    <h1 class="card-title">Not Answered : <?php echo $notanswered; ?> </h1>
                    
                </div>
               
              
                <?php $p=$correct*10; ?>
                <h1>Your Score is </h1>
                <div class="progress ucard" style="height: 5rem; ">
  <div class="progress-bar progress-bar-striped bg-primary p" role="progressbar" style="width: <?php echo $p.'%';?> " aria-valuenow="" aria-valuemin="0" aria-valuemax="100"><h1 style="color:black;"><?php echo $p.'%';?></h1></div>
</div>
                    
<button class="btn btn-outline-primary mt-3" style="float:right" type="submit"onclick="location.href = 'userdashboard.php'">Stat Again</button>
        </div>
        <br>
    </div>
    <?php include 'footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>