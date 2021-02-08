<?php   
include 'connection.php';
$sql="SELECT * FROM `subject` JOIN question on subject.id=question.sub_id";
$query=mysqli_query($conn,$sql);
// while($row= mysqli_fetch_array($query)){

//     echo "<pre>";
//     print_r($row['sub_name']);echo "\n";
//     print_r($row['question']);echo "\n";
//     print_r($row['option1']);echo "\n";
//     print_r($row['option3']);echo "\n";
//     print_r($row['option3']);echo "\n";
//     print_r($row['option4']);echo "\n";
//     print_r($row['answer']);echo "\n";
//     echo "</pre>";
// }
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
  
      <th scope="col">Subject</th>
      <th scope="col">Question</th>
      <th scope="col">Option1</th>
      <th scope="col">Option2</th>
      <th scope="col">Option3</th>
      <th scope="col">Option4</th>
      <th scope="col">Answer</th>
      <th scope="col">Delete</th>

  </thead>
  <tbody>
      <?php while($row= mysqli_fetch_array($query)){?>
    <tr style="background:transparent">
    
      <td><?php echo $row['sub_name']; ?></td>
      <td><?php echo $row['question']; ?></td>
      <td><?php echo $row['option1']; ?></td>
      <td><?php echo $row['option2']; ?></td>
      <td><?php echo $row['option3']; ?></td>
      <td><?php echo $row['option4']; ?></td>
      <td><?php echo $row['answer']; ?></td>
     
            <td> <button class="btn btn-warning" type="submit" name="submit" value="submit"><a href="deletequestion.php?id=<?php echo $row['id'];?>">Delete</a> </button></td>
      
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