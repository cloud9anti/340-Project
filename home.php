<?php
// Initialize the session
session_start();

require 'conndb.php';
require 'header.php';







if ($_GET["lastname"] != "") {
	$lastName = $_GET["lastname"];
$sql = "SELECT * FROM heroku_7907a8bdd4fde12.people WHERE last_name = '$lastName'";
} else {
$sql = 'SELECT * FROM heroku_7907a8bdd4fde12.people';
}

$result = mysqli_query($connection,$sql);
$people = mysqli_fetch_array($result, MYSQLI_ASSOC);
 ?>



<head>
	<title>Student List</title>
</head>
<body>
	<h1>Welcome professor, here is a list of your students!</h1>
	


            <h2>Student List</h2>
		<form action="">
		  Search by Last name:<br>
		  <input type="text" name="lastname" value=""><br><br>
		  <input type="submit" value="Search">

		</form>

        <style>
            table {
                border: 1px solid black;
            }
        </style>

            <table style="width:90%">
			<tr>
			<th> First Name </th>
			<th> Last Name </th>
			<th> City </th>
			
			</tr>

               <tr>
                    <td><?php echo $people['first_name']; ?></td>
                    <td><?php echo $people['last_name']; ?></td>
                    <td><?php echo $people['city']; ?></td>
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


