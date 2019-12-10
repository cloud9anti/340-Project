<?php
require 'conndb.php';

$sql = 'SELECT * FROM heroku_7907a8bdd4fde12.course';
$result = mysqli_query($connection,$sql);
$people = mysqli_fetch_array($result, MYSQLI_ASSOC);

$message = '';
if (isset ($_POST['department'])  && isset($_POST['course_name'])) {
  $department = $_POST['department'];
  $course_name = $_POST['course_name'];
  $location = $_POST['location'];
    $quarter = $_POST['quarter'];
  $year = $_POST['year'];





		mysqli_query($connection, "INSERT INTO course(department, course_name, location, quarter, year) VALUES('$department', '$course_name', '$location', '$quarter', '$year')");
  
}
 ?>
<?php require 'header.php'; ?>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Create a new Course</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
	  

      <form method="post">
        <div class="form-group">
          <label for="department">Department</label>
          <input type="text" name="department" id="department" class="form-control">
        </div>

        <div class="form-group">
          <label for="course_name">Course Name</label>
          <input type="text" name="course_name" id="course_name" class="form-control">
        </div>

		  <div class="form-group">
          <label for="location">Location</label>
          <input type="text" name="location" id="location" class="form-control">
        </div>

        <div class="form-group">
          <label for="year">Year</label>
          <input type="text" name="year" id="year" class="form-control">
        </div>

		  <div class="form-group">
          <label for="quarter">Quarter</label>
          <input type="text" name="quarter" id="quarter" class="form-control">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-info">Create Course</button>
        </div>
      </form>
    </div>
  </div>
</div>