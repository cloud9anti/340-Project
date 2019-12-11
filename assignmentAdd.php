<?php
require 'conndb.php';

$sql = 'SELECT * FROM heroku_7907a8bdd4fde12.grade';
$result = mysqli_query($connection,$sql);
$people = mysqli_fetch_array($result, MYSQLI_ASSOC);

$message = '';
if (isset($_POST['grade_name'])) {
  $course_id = $_POST['course_id'];
  $course_name = $_POST['course_name'];
    $grade_type = $_POST['grade_type'];
  $grade_name = $_POST['grade_name'];
    $building = $_POST['building'];
  $room_number = $_POST['room_number'];





		mysqli_query($connection, "INSERT INTO grade(grade_type, course_id, grade_name, building, room_number) VALUES('$grade_type', '$course_id', '$grade_name', '$building', '$room_number')");
    header("Location: assignments.php");
}
 ?>
<?php require 'header.php'; ?>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Create a new Assignment</h2>
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
          <input type="text" name="course_id" id="course_id" class="form-control">
        </div>

        <div class="form-group">
          <label for="grade_type">Grade Type</label>
          <input type="text" name="grade_type" id="grade_type" class="form-control">
        </div>

		  <div class="form-group">
          <label for="grade_name">Grade Name</label>
          <input type="text" name="grade_name" id="grade_name" class="form-control">
        </div>

        <div class="form-group">
          <label for="building">Building</label>
          <input type="text" name="building" id="building" class="form-control">
        </div>

		  <div class="form-group">
          <label for="room_number">Room Number</label>
          <input type="text" name="room_number" id="room_number" class="form-control">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-info">Create Assignment</button>
        </div>
      </form>
    </div>
  </div>
</div>