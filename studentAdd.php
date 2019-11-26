<?php
require 'conndb.php';

$sql = 'SELECT * FROM heroku_7907a8bdd4fde12.people';
$result = mysqli_query($connection,$sql);
$people = mysqli_fetch_array($result, MYSQLI_ASSOC);

$message = '';
if (isset ($_POST['first_name'])  && isset($_POST['last_name']) && isset($_POST['city'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $city = $_POST['city'];

    //$id = $_GET['id'];



		mysqli_query($connection, "INSERT INTO people(first_name, last_name, city) VALUES('$first_name', '$last_name', '$city')");
		//mysqli_query($connection, "INSERT INTO `heroku_7907a8bdd4fde12`.`people` (`first_name`, `last_name`, `email`, `street`, `city`) VALUES ('as22d', 'as22d', 'as22d', 'a22sd', 'a22sd')");
  
}
 ?>
<?php require 'header.php'; ?>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Create a new Student</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text" name="first_name" id="first_name" class="form-control">
        </div>

        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" name="last_name" id="last_name" class="form-control">
        </div>

		  <div class="form-group">
          <label for="city">City</label>
          <input type="text" name="city" id="city" class="form-control">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-info">Create Student</button>
        </div>
      </form>
    </div>
  </div>
</div>