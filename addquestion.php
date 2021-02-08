<?php
if(isset($_SESSION['adminname'])) {
  header('Location: admindashboard.php');
  }
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
  <?php include 'adminheader.php' ?>
  <div class="container-fluid bg">
        <div class="container log">

            <form class="col-md  centered main mb-5"  method="post" action="">
                <h3 class="text-center">Add Question</h3>
                <!-- Email input -->
                <div class="form-outline mb-4">
                
                    <label for="exampleFormControlSelect1">Select Course</label>
                    <select class="form-control" name="sub_id" id="sub_id" required>
                    <option  name="" value="" >Select Subject</option>
                    <?php while($row = mysqli_fetch_array($query)){?>
                    <option  name="<?php echo $row['id']; ?>" value="<?php echo $row['id']; ?>"><?php echo $row['sub_name']; ?></option>           
                    <?php } ?></select>
           
                </div>
       

                <div class="form-outline mb-4">
                    <label class="form-label">Enter Question</label>
                    <input type="text" id="question" name="question" class="form-control" placeholder="Enter Question" required/>
                </div>
    
                <div class="form-outline mb-4">
                <label class="form-label " >Options</label>
                    <input type="text" id="option1" name="option1" class="form-control mb-4" placeholder="Enter First Option" required/>
                    <input type="text" id="option2" name="option2" class="form-control mb-4" placeholder="Enter Second Option" required/>
                    <input type="text" id="option3" name="option3" class="form-control mb-4" placeholder="Enter Third Option" required/>
                    <input type="text" id="option4" name="option4" class="form-control mb-4" placeholder="Enter Fourth Option" required/>
                    
                </div>
                <div class="form-outline mb-4">
                <label for="exampleFormControlSelect1">Select Answer</label>
                <select class="form-control" name="answer" id="answer" required>
                  <option  name="" value="">Select Answer</option>
                  <option  name="option1" value="option1">option1</option>
                  <option  name="option2" value="option2">option2</option>
                  <option  name="option3" value="option3">option3</option>
                  <option  name="option4" value="option4">option4</option>
                </select>
              </div>
              
    
                <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block mb-4">Add Question</button>

                
                
            </form>

        </div>
    </div>
               
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>

<?php 
if(isset($_POST['submit'])){
include_once 'connection.php';

$sub_id=$_POST['sub_id'];
$question=$_POST['question'];
$option1=$_POST['option1'];
$option2=$_POST['option2'];
$option3=$_POST['option3'];
$option4=$_POST['option4'];
$answere=$_POST['answer'];

$sql="INSERT INTO `question`(`question`, `option1`, `option2`, `option3`, `option4`, `answer`, `sub_id`) VALUES ('$question','$option1','$option2','$option3','$option4','$answere','$sub_id')";

if(mysqli_query($conn,$sql)){
  echo "<script>alert('New Question Added in Database')</script>";
  header("Location: admindashboard.php" );
}
else{
  echo "errror",mysqli_error($conn);
};
}
?>