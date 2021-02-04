<?php 
session_start();
if (isset($_SESSION['username'])) {
    header('Location: userdashboard.php');
    }
elseif(isset($_SESSION['adminname'])) {
    header('Location: admindashboard.php');
    }
if(isset($_POST['submit'])){
        include 'connection.php';
        $email=$_POST['email'];
        $password=$_POST['password'];
        // $_SESSION["username"] = 'admin';
        
      
        $sql="select * from user WHERE `email`='$email' AND `password`='$password'";
        $query=mysqli_query($conn,$sql);
       
        while($row = mysqli_fetch_array($query)){
                    // $_SESSION['adminemail'] = $email;
                    
        
                if($row['isadmin']==1){
                    $_SESSION['adminname'] = $row['name'];
                    $_SESSION['aid'] = $row['uid'];
                    header("Location:admindashboard.php" );
                   
                    // echo "admin";
                   
                }
                elseif($row['isadmin']==0){
                    $_SESSION['username'] = $row['name'];
                    $_SESSION['uid'] = $row['uid'];
                    // echo "user";
                    header("Location: userdashboard.php" );
                }
               
      
    
           
    
    }
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
  <?php include 'userheader.php' ?>
  <div class="container-fluid bg">
        <div class="container log">

            <form class="col centered main"  method="post" action="">
                <h3 class="text-center">Login to Start the Test</h3>
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
                    <p>Don't have a account? <a href="reg.php">Signup Now</a></p>
                   
                </div>
    
                <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block mb-4">Log in</button>

                
                
            </form>

        </div>
    </div>
    <?php include 'footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>
<?php 




?>