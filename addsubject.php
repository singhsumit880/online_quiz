<?php
if(isset($_SESSION['adminname'])) {
    header('Location: admindashboard.php');
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
  <?php include 'adminheader.php' ?>
  <div class="container-fluid bg">
        <div class="container log">

        <form class="col-md  centered main"  method="post" action="">
                <h3 class="text-center">Add Subject</h3>
               

                <div class="form-outline mb-4">
                    <!-- <label class="form-label">Enter Question</label> -->
                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Enter Subject" required/>
                </div>
    
                <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block mb-4">Add Subject</button>

                
                
            </form>

       

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>


<?php 

    if(isset($_POST['submit'])){
        include 'connection.php';
        
        $subject=$_POST['subject'];
        
        $sql="INSERT INTO `subject`(`sub_name`) VALUES ('$subject')";
        if(mysqli_query($conn,$sql)){
            echo "<script>alert('New Subject Added in Database')</script>";
            header("Location: admindashboard.php" );
        }
        else{
            echo "errror",mysqli_error($conn);
        };
        
        }

?>
