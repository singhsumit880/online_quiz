<?php 
// session_start();
// if(isset($_POST['submit'])){
//     include 'connection.php';
//     $email=$_POST['email'];
//     $password=$_POST['password'];
//     // $_SESSION["username"] = 'admin';
    
  
//     $sql="select * from user WHERE `email`='$email' AND `password`='$password'";
//     $query=mysqli_query($conn,$sql);
   
//     while($row = mysqli_fetch_array($query)){
//                 // $_SESSION['adminemail'] = $email;
                
    
//             if($row['isadmin']==1){
//                 $_SESSION['adminname'] = $row['name'];
//                 $_SESSION['aid'] = $row['uid'];
//                 header("Location:admindashboard.php" );
               
//                 // echo "admin";
               
//             }
//             else{
//                 $_SESSION['username'] = $row['name'];
//                 $_SESSION['uid'] = $row['uid'];
//                 // echo "user";
//                 header("Location: userdashboard.php" );
//             }
  

       

// }
// }


?>

<footer class="text-center ufoot text-lg-start mt-5" style="padding-bottom:30px;">
  <div class="container p-4">
    <div class="text-center text-lg-start">
      <div class="text-center text-lg-start">
        <h5 class="text-uppercase text-center " style="text-align:left">About</h5>
        <hr class="line">
        <p>
          This ONLINE TEST project design and develope by the CEDCOSS trainee.
        </p>
      </div>
    </div>
  </div>

  <div class="text-center">
    Design © 2020 Copyright:
    <a href="#">CEDCOSS</a><p>~SUMIT~</p>
  </div>
 <span class="p-3" >
   <a><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
   <a><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
   <a><i class="fa fa-google fa-2x" aria-hidden="true"></i></a>
  
  <span>
  
</footer>