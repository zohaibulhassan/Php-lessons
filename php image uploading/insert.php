<?php
 include('include/config.php');
  $email = $_POST['email'];
  $password = $_POST['password'];
  $image= $_FILES['image'];
  $imagename = $image['name'];
  $tempiamgename = $image['tmp_name'];

  move_uploaded_file($tempiamgename,'images/'.$imagename.'');
  mysqli_query($conn,"insert into user values(null,'$email','$password','$imagename')");

  header('Location:show.php');
?>