<?php
// Initialize the session
session_start();

require 'conndb.php';




$sql = 'SELECT * FROM heroku_7907a8bdd4fde12.people';
$result = mysqli_query($connection,$sql);
$people = mysqli_fetch_array($result, MYSQLI_ASSOC);

 ?>
<?php 


	while ($people= mysqli_fetch_array($result)) {

						?>
						

  <h5> <?php echo $people['first_name']; ?></h5>
					<?php } ?>



