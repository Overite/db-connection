<html>
  <body>
    <form action="" method="post">
    <input type="number" name="num" required>
     <input type="text" name="title" required>
     <input type="text" name="body" required>
     <button type="submit">Post</button>
    </form>
  <?php
  require 'db.php';
  $id = $_POST['num'];
    $title = $_POST['title'];
    $body = $_POST['body'];


  $sql = "INSERT INTO industry_new (id, title, body)
           VALUES ('".$id."','".$title."', '".$body."')";
 
  if ($conn->query($sql) === FALSE){

    echo "Error:" .$sql. "<br>" .$conn->error;
  
  } 
   ?>
    <?php mysqli_close($conn); ?>
  </body>
</html>