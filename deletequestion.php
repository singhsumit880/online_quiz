<?php
// if(isset($_POST['submit'])){
include 'connection.php';

    $id=$_GET['id'];
    echo $id;
    // echo "dgfsbdhjsbgfdjsfbdsggdhjsgbhjsdfgsdhfbgfhfghfgbfhffuh";
    $sql="DELETE FROM `question` WHERE id=$id";

    $query=mysqli_query($conn, $sql);

    header("Location: viewquestion.php" );

// }
?>