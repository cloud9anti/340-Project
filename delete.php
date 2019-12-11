<?php
require 'conndb.php';
require 'header.php';

//delete course
  $deleteID = $_POST['btnDelete'];
  
  echo "testing";

 mysqli_query($connection, "DELETE FROM heroku_7907a8bdd4fde12.course WHERE course_id = '$deleteID'");
   header("Location: courses.php");
   
//delete assignment
  $deleteID = $_POST['btnDelete2'];
  
  echo "testing";

 mysqli_query($connection, "DELETE FROM heroku_7907a8bdd4fde12.grade WHERE grade_id = '$deleteID'");
   header("Location: assignments.php");
 ?>
 