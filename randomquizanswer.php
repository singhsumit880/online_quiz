<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    }
if(isset($_POST)){
    include 'connection.php';
   
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    $arrkey=array_keys($_POST);
    $arrvalue=array_values($_POST);
    // echo "<pre>";
    // print_r($arrkey);
    // print_r($arrvalue);
    // echo "</pre>";
    $correct=0;
    $wrong=0;
    $notanswered=0;
    for($i=0;$i<count($_POST);$i++){
        $sql="SELECT * FROM `question` WHERE `id`=$arrkey[$i]";
        // echo "<pre>"; 
        $query=mysqli_query($conn,$sql);
        $data=mysqli_fetch_assoc($query);
        // echo $data['answer'];
        // echo "<br>";
        if($arrvalue[$i]==$data['answer']){
            // echo "hjdgfkdf";
            $correct++;
        }
        elseif($arrvalue[$i]=='null'){
            $notanswered++;
        }
        else{
            $wrong++;
       }
        // echo "</pre>";
       
        
    }
    
    //  echo $wrong;
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
                <?php $p=($correct/25)*100;
                 if($p<40 && $p>=0){
                     $status=" ( Fail )";
                     $msg=" ( You Must Study Harder...)";
                 }
                 elseif ($p<75 && $p>40){
                    $status=" ( Pass )";
                    $msg=" ( Almost! Study a little more and take the test again ! )";
                }
                elseif ($p>75){
                    $status=" ( Best Performer )";
                    $msg=" ( You can be proud of yourself ! )";
                }
                
                ?>
              
                
                <h1>Your Score is : <?php echo $p. '%' .$msg;?></h1>
                <div class="progress ucard" style="height: 5rem; ">
  <div class="progress-bar progress-bar-striped progress-bar-animated p" role="progressbar" style="width: <?php echo $p.'%';?> " aria-valuenow="" aria-valuemin="0" aria-valuemax="100"><h3><?php echo $status; ?></h3></div>
</div>
                    
<button class="btn btn-outline-primary mt-3" style="float:right" type="submit"onclick="location.href = 'userdashboard.php'">Start Again</button>
        </div>
        <br>
    </div>
    <?php include 'footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>



<?php 
// if ( !isset($_SESSION) ) session_start();

// $currentsubname=$sub['sub_name'];
$currentusername=$_SESSION['username'];
$mail=$_SESSION['mail'];
// echo $currentusername; 
// echo "<br>";
// echo $mail;
// echo "<br>";
// echo $total;
// echo "<br>";
// echo $correct;
// echo "<br>";
// echo $wrong;
// echo "<br>";
// echo $notanswered;
// echo "<br>";
// echo $p;


$ql="INSERT INTO `result`(`email`,`name`, `test_name`, `total_question`, `correct`, `wrong`, `not_answered`, `percentage`, `time`) VALUES ('$mail','$currentusername','$currentsubname','$total','$correct','$wrong','$notanswered','$p',Now())";

if(mysqli_query($conn,$ql)){
    // echo "New User Added in Database";
    // header("Location: index.php" );
}
else{
    echo "errror",mysqli_error($conn);
};
?>