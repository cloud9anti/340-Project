<?php
require 'conndb.php';
$venue = $_GET['venue'];

$sql = 'SELECT * FROM people WHERE venue=:venue';

$statement = $connection->prepare($sql);
$statement->execute([':venue' => $venue ]);
$people = $statement->fetchAll(PDO::FETCH_OBJ);


 ?>
<?php require 'header.php'; ?>

<!--All from this group-->
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Everything from the venue [<?= $venue ?>] </h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>BPS</th>
		  <th>Active</th>
		  <th>Group</th>
          <th>Community</th>
          <th>Industry</th>
		  <th>Category</th>
          <th>Subcategory</th>
		  <th>Action</th>
        </tr>
        <?php foreach($people as $person): ?>

          <tr>
           <td><a href="displayBPS.php?name=<?= $person->name ?>" >  <?= $person->name; ?> </a></td>
			<td><?= $person->active; ?></td>
            <td><a href="displayGroups.php?groups=<?= $person->groups ?>" >  <?= $person->groups; ?> </a></td>
            <td><a href="displayCommunities.php?community=<?= $person->community ?>" >  <?= $person->community; ?> </a></td>
			<td><?= $person->industry ?> </td>
			<td><?= $person->category ?> </td>
			<td><?= $person->subcategory ?> </td>
            <td>
              <a href="edit.php?id=<?= $person->id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $person->id ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
