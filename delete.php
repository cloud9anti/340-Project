<?php
require 'conndb.php';
require 'header.php';


  $deleteID = $_POST['deleteID'];
  
  echo "testing";

 mysqli_query($connection, "DELETE FROM heroku_7907a8bdd4fde12.course WHERE course_id = '$deleteID'");
   header("Location: courses.php");

 ?>
 