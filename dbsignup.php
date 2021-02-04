<?php

if(isset($_POST['submit'])){
include 'connection.php';
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

echo $name;
echo $email;
echo $password;

$sql = "INSERT INTO `user`(`name`, `email`, `password`, `isadmin`) VALUES ('$name','$email','$password','0')";



if(mysqli_query($conn,$sql)){
    echo "New User Added in Database";
    header("Location: index.php" );
}
else{
    echo "errror",mysqli_error($conn);
};
}
?>