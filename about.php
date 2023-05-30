<?php
  $con = mysqli_connect('localhost', 'root', 'Nayef2021@');

  if($con) {
    echo "Connection Successful";
  }
  else {
    echo "Connction Failled";
  }

  mysqli_select_db($con, 'photography');

  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];

  $query = "INSERT INTO users (name, email, number) VALUES ('$name', '$email', '$number' )";

  mysqli_query($con, $query);
  header('location:index.php#contact');
?>