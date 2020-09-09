<!DOCTYPE html>
<html>
  <head>
    <title>Todo list</title>
  </head>
<body>
  <h1>Todo List</h1>
    <form action = "upload.php" method = "post">
      <input type = "text" name = "task" placeholder = "Please enter your task">
      <button type = "submit" name = "submit">Add Task</button>
    </form>
  <?php 

  include 'show.php' 
  ?>
</body>
</html>