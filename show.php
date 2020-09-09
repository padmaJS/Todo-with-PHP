<?php 

  include 'dbhconn.php';

  $todos_task = $conn -> query("SELECT * FROM Tasks;");
?>
<form method="POST" action="delete.php">
<?php

  echo "<table><tr><th>No.</th><th>Tasks</th><th>Action</th></tr>";
  
  $i = 1;

  while ($row = mysqli_fetch_assoc($todos_task)) {
    echo "<tr><td>$i</td><td>";
    $result = $row['Title'];
    echo $result;
    echo "</td><td>"; 
    ?>
  <button type = "submit" name = "delete">Done</button>
    <?php
    echo "</td></tr>";
    $i++;
  }
   echo "</table>";

?>
</form>