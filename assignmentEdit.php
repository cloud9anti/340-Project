<?php

require 'conndb.php';


$sql = 'SELECT * FROM heroku_7907a8bdd4fde12.grade';
$result = mysqli_query($connection,$sql);
$people = mysqli_fetch_array($result, MYSQLI_ASSOC);



$Pid = $_POST['grade_id'];


if (isset($_POST['grade_name'])) {
  $course_id = $_POST['course_id'];
  $grade_type = $_POST['grade_type'];
  $grade_name = $_POST['grade_name'];
    $building = $_POST['building'];
  $room_number = $_POST['room_number'];
  $myGrade = $_POST['grade_id'];



mysqli_query($connection, "UPDATE grade SET course_id='$course_id', grade_type='$grade_type', grade_name='$grade_name', building='$building', room_number='$room_number' WHERE grade_id = '$myGrade'");

  header("Location: assignments.php");

}

						//Include assignments table
						$sql = "SELECT * FROM heroku_7907a8bdd4fde12.grade WHERE grade_id = '$Pid'";

						$result = mysqli_query($connection,$sql);
						$people = mysqli_fetch_array($result, MYSQLI_ASSOC);

					
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
          <input value="<?= $Pid; ?>" type="hidden"  name="grade_id" id="course_id" class="form-control">
        </div>
        <div class="form-group">
          <label for="course_id">Course ID</label>
          <input value="<?= $people['course_id']; ?>" type="text"  name="course_id" id="course_id" class="form-control">
        </div>

        <div class="form-group">
          <label for="grade_type">Grade Type</label>
          <input value="<?= $people['grade_type']; ?>"  type="text" name="grade_type" id="grade_type" class="form-control">
        </div>

		  <div class="form-group">
          <label for="grade_name">Grade Name</label>
          <input value="<?= $people['grade_name']; ?>"  type="text" name="grade_name" id="grade_name" class="form-control">
        </div>

        <div class="form-group">
          <label for="building">Building</label>
          <input value="<?= $people['building']; ?>"  type="text" name="building" id="building" class="form-control">
        </div>

		  <div class="form-group">
          <label for="room_number">Room Number</label>
          <input value="<?= $people['room_number']; ?>"  type="text" name="room_number" id="room_number" class="form-control">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-info">Edit Assignment</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="container">
  <div class="card mt-5">
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
	  
			<form method="post" action = "delete.php">
			<h1> Delete This Assignment </h1>
					<input type="hidden" name="btnDelete2" value="<?= $Pid?>"> 
					<input href="delete.php" value="Delete" type="submit"></input>
			</form>
    </div>
  </div>
</div>