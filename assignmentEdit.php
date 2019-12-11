<?php

require 'conndb.php';


$sql = 'SELECT * FROM heroku_7907a8bdd4fde12.grade';
$result = mysqli_query($connection,$sql);
$people = mysqli_fetch_array($result, MYSQLI_ASSOC);



$Pid = $_POST['grade_id'];

$Pid = (int)$Pid;
echo $Pid;

if (isset (isset($_POST['grade_name'])) {
  $course_id = $_POST['course_id'];
  $course_name = $_POST['course_name'];
  $grade_name = $_POST['grade_name'];
    $building = $_POST['building'];
  $room_number = $_POST['room_number'];
  $myGrade = $_POST['grade_id'];



mysqli_query($connection, "UPDATE people SET course_id='$course_id', course_name='$course_name', grade_name='$grade_name', building='$building', room_number='$room_number' WHERE grade_id = '$myGrade'");

  header("Location: assignments.php");

}

						//Include assignments table
						$sql = "SELECT * FROM heroku_7907a8bdd4fde12.grade WHERE grade_id = '$Pid'";

						$result = mysqli_query($connection,$sql);


					
 ?>
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">	
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Edit or Delete Assignment</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
	  





      <form method="post">
        <div class="form-group">
          <label for="course_id">Course ID</label>
          <input value="<?= $grade['course_id']; ?>" type="text" value="" name="course_id" id="course_id" class="form-control">
        </div>

        <div class="form-group">
          <label for="grade_type">Grade Type</label>
          <input value="<?= $grade['course_name']; ?>"  type="text" name="grade_type" id="grade_type" class="form-control">
        </div>

		  <div class="form-group">
          <label for="grade_name">Grade Name</label>
          <input value="<?= $grade['grade_name']; ?>"  type="text" name="grade_name" id="grade_name" class="form-control">
        </div>

        <div class="form-group">
          <label for="building">Building</label>
          <input value="<?= $grade['building']; ?>"  type="text" name="building" id="building" class="form-control">
        </div>

		  <div class="form-group">
          <label for="room_number">Room Number</label>
          <input value="<?= $grade['room_number']; ?>"  type="text" name="room_number" id="room_number" class="form-control">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-info">Edit Assignment</button>
        </div>
      </form>
    </div>
  </div>
</div>
