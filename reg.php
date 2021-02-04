<?php 
session_start();
if (isset($_SESSION['username'])) {
    header('Location: userdashboard.php');
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Online Quiz</title>
  </head>
  
  <body>
  <?php include 'userheader.php' ?>
  <div class="container-fluid bg">
        <div class="container log">
        <form class="col-md  centered main" method="post" action="dbsignup.php">
                <h3 class="text-center">Sign Up</h3>
                <div class="form-outline mb-4">
                    <label class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Name"/>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email"/>
                </div>
    
                <div class="form-outline mb-4">
                <label class="form-label" >Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password"/>
                    
                </div>
                <div class="text-center">
                <p>Already a member? <a href="index.php">Log in</a></p>
                   
                </div>
    
                <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block mb-4">Sign up</button>

            </form>
       
        </div>
    </div>
    <?php include 'footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>