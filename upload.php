<?php
  
  include 'dbhconn.php';

  $task = $_POST['task'];

  $sql = "INSERT INTO Tasks (Title) VALUES ('$task');";

  mysqli_query($conn, $sql);

  header("Location: index.php");


?>