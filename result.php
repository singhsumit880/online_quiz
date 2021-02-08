<?php   
session_start();
if (!isset($_SESSION['adminname'])) {
    header('Location: index.php');
    }
include 'connection.php';
$sql="SELECT * FROM `result`";
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
  
    
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
<title>Online Quiz</title>
    <style>
  
   
    </style>
  </head>
  <body>
  <?php include 'adminheader.php' ?>
  <div class="container-fluid bg mb-5">
        <div class="container log">

<table class="table" id="tb">
  <thead class="">

      <th scope="col">Email</th>
      <th scope="col">Name</th>
      <th scope="col">Test Name</th>
      <th scope="col">Total Question</th>
      <th scope="col">Correct</th>
      <th scope="col">Wrong</th>
      <th scope="col">Not Answered</th>
      <th scope="col">Percentage</th>
      <th scope="col">Time</th>

  </thead>
  <tbody>
      <?php while($row= mysqli_fetch_array($query)){?>
    <tr style="background:transparent">

      <td><?php echo $row['email']; ?></td> 
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['test_name']; ?></td>
      <td><?php echo $row['total_question']; ?></td>
      <td><?php echo $row['correct']; ?></td>
      <td><?php echo $row['wrong']; ?></td>
      <td><?php echo $row['not_answered']; ?></td>
      <td><?php echo $row['percentage'].'%'; ?></td>
      <td><?php echo $row['time']; ?></td>
     
         
      
    </tr>
      <?php }?>

      
  </tbody>
</table>

        </div>
  </div>

  
        <script>

            $(document).ready( function () {
                $('#tb').DataTable();
            } );
        </script>
   
  </body>
</html>