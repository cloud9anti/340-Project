<?php
require 'conndb.php';

 


$message = '';
if (isset ($_POST['name'])  && isset($_POST['details']) && isset($_POST['sku']) && isset($_POST['price'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $city = $_POST['city'];

    //$id = $_GET['id'];


		mysqli_query($connection, "INSERT INTO people(first_name, last_name, city) VALUES(:first_name, :last_name, :city)");
  }
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