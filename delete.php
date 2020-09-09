<?php 
  
  include 'dbhconn.php';
  include 'show.php';

  $delete = $_POST['delete'];

  $sql = "DELETE FROM Tasks WHERE Title = '$result'";

  mysqli_query($conn, $sql);

  header("Location: index.php");

?>