<?php
// if (!isset($_SESSION['username'])) {
//     header('Location: index.php');
//     }
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    }
    $name='Hello '.$_SESSION["username"];
// print_r($_SESSION['username']);
include 'connection.php';
$sql="SELECT * FROM `subject`";

$query=mysqli_query($conn,$sql);

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
  </head>
 
  <body>
  <?php include 'userheader.php' ?>
    <div class="container-fluid bg">
        <div class="container log">

            <main class="col">
                <h1><?php echo $name; ?>, Welcome to Online Test Portal......</h1>
         
                    <div class="card-deck mt-5">
                    <?php  while($row = mysqli_fetch_array($query)){?>
                        <div class="">
                            <div class="card text-dark text-center ucard mb-3" style="width: 200px; height:140px;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['sub_name']; ?></h5>
                                
                                    <!-- <h5 class="card-title">0</h5> -->
                                    <button class="btn btn-outline-primary mt-3" type="submit"
                                        onclick="location.href = 'question.php?id=<?php echo $row['id']; ?>'">Stat Now</button>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    <div class="">
                            <div class="card text-dark text-center ucard mb-3" style="width: 200px; height:140px;">
                                <div class="card-body">
                                    <h5 class="card-title">Random Quiz(25 Question)</h5>
                                   
                                    <button class="btn btn-outline-primary " type="submit"
                                        onclick="location.href = 'randomquiz.php'">Stat Now</button>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="card text-center ucard mb-3" style="width: 200px; height:140px; color:red;">
                                <div class="card-body">
                                    <h5 class="card-title">Your Result</h5>
                                   
                                    <button class="btn btn-outline-primary mt-3" type="submit"
                                        onclick="location.href = 'yourresult.php'">Check Now</button>
                                </div>
                            </div>
                        </div>
                 </div>
            </main>

        </div>
    </div>
    <?php include 'footer.php' ?>                  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>