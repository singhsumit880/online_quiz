<?php
session_start();
if (!isset($_SESSION['adminname'])) {
    header('Location: index.php');
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
  </head>
 
  <body>
  <?php include 'adminheader.php' ?>
  
  <div class="container-fluid bg">
        <div class="container log">

        <main class="col">
                <h1>Welcome to Online Test Admin Portal......</h1>
         
                <div class="card-deck mt-5">
            
                    <div class="">
                        <div class="card text-dark ucard text-center mb-3" style="width: 200px; height:140px;">
                            <div class="card-body">
                                <h5 class="card-title">Add Subject</h5>
                                <button class="btn btn-outline-primary mt-3" type="submit"
                                    onclick="location.href = 'addsubject.php';">Add Now</button>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class="card text-dark ucard text-center mb-3" style="width: 200px; height:140px;">
                            <div class="card-body">
                                <h5 class="card-title">Add Question</h5>
                                <button class="btn btn-outline-primary mt-3" type="submit"
                                    onclick="location.href = 'addquestion.php';">Add Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="card text-dark ucard text-center mb-3" style="width: 200px; height:140px;">
                            <div class="card-body">
                                <h5 class="card-title">View Question</h5>
                                <button class="btn btn-outline-primary mt-3" type="submit"
                                    onclick="location.href = 'viewquestion.php';">View Now</button>
                            </div>
                        </div>
                    </div>

                    <div class="">
                            <div class="card text-center ucard mb-3" style="width: 200px; height:140px; color:red;">
                                <div class="card-body">
                                    <h5 class="card-title">User Records</h5>
                                   
                                    <button class="btn btn-outline-primary mt-3" type="submit"
                                        onclick="location.href = 'result.php'">Check Now</button>
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