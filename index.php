<?php
// Initialize the session
session_start();

require 'conndb.php';
require 'header.php';




$sql = 'SELECT * FROM heroku_7907a8bdd4fde12.people';
$result = mysqli_query($connection,$sql);
$people = mysqli_fetch_array($result, MYSQLI_ASSOC);


		mysqli_query($connection, "INSERT INTO `heroku_7907a8bdd4fde12`.`people` (`first_name`, `last_name`, `email`, `street`, `city`) VALUES ('as22d', 'as22d', 'as22d', 'a22sd', 'a22sd')");
 ?>



<head>
	<title>Student List</title>
</head>
<body>
	<h1>Welcome professor, please select a student!!!!.</h1>
	


            <h2>Student List</h2>
		<form action="">
		  Search by Last name:<br>
		  <input type="text" name="lastname" value=""><br><br>
		  <input type="submit" value="Search">

		</form>


            <table style="width:100%">
			<tr>
			<th> First Name </th>
			<th> Last Name </th>
			<th> City </th>
			
			</tr>
	<?php 


	while ($people= mysqli_fetch_array($result)) {

						?>
						
                <tr>
                    <td><?php echo $people['first_name']; ?></td>
                    <td><?php echo $people['last_name']; ?></td>
                    <td><?php echo $people['city']; ?></td>
                </tr>
              
          			<?php } ?>
            </table>




<table id="table" align="center"></table>

	  <li >
        <a href="studentAdd.php">Create New Student </a>
      </li>

</body>


