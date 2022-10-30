<?php
 $conn = mysqli_connect("localhost", "root", "", "formhandling1");         //hostname username password databasename
 if (!$conn) {
     echo "connection refuse";
 } else {
     echo "connection established";
 }
$id = $_POST['id'];
 $name = $_POST['txtname'];
  $age = $_POST['txtage'];
  $add = $_POST['txtadd'];
  $email = $_POST['txtemail'];
  $pass = $_POST['txtpass'];
  $query = "UPDATE users SET id='$id',Name='$name',Age=$age,Address='$add',email='$email',password='$pass' WHERE id=$id";
 $q = mysqli_query($conn,$query);
 if(!$q){
    echo "bye";
 }else{
    echo "hi";
    header('Location:showData.php');
 }
?>