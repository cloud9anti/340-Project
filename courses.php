<?php
// Initialize the session
session_start();

require 'conndb.php';
require 'header.php';




$sql = 'SELECT * FROM heroku_7907a8bdd4fde12.course';
$result = mysqli_query($connection,$sql);
$people = mysqli_fetch_array($result, MYSQLI_ASSOC);


if (isset ($_POST['course'])) {

  $course = $_POST['course'];
  header("location: courseStudents.php");
  

}






               

 ?>



<h1>Hello Professor, Please Choose a Course from your Schedule</h1>


    <body>



        <style>
            table {
                border: 1px solid black;
            }
        </style>

        <table style="width:100%">
            <tr>
                <th>Course</th>
				<th>Department</th>
                <td>Delete</td>
				<td>View</td>
            </tr>

			

				<form method="post" action = "courseStudents.php">
						<tr>
							<td><?php echo $people['course_name']; ?></td>
							<td><?php echo $people['department']; ?></td>

							<input type="hidden" name="course" value="<?= $people['course_name']?>"> 
							<input type="hidden" name="course_id" value="<?= $people['course_id']?>"> 
							<td><input type="submit" name="btnDelete" value="Delete" ></td>
							<td><input href="courseStudents.php" value="View Course" type="submit"></input></td>

						</tr>
					</form>
     
			<?php 



			while ($people= mysqli_fetch_array($result)) {

								?>
				<form method="post" action = "courseStudents.php">
						<tr>
							<td><?php echo $people['course_name']; ?></td>
							<td><?php echo $people['department']; ?></td>

							<input type="hidden" name="course" value="<?= $people['course_name']?>"> 
							<input type="hidden" name="course_id" value="<?= $people['course_id']?>"> 

							<td><input href="courseStudents.php" value="View Course" type="submit"></input></td>
					

						
					</form>
					<form method="post" action = "delete.php">
							<td><input href="delete.php" type="submit" name="btnDelete" value="Delete" ></td>
					</form>
					</tr>
									<?php } ?>
				


 
        </table>
	  <li >
        <a href="courseAdd.php">Create New Course </a>
      </li>

    </body>



    <table id="table" align="center"></table>

    <script src="client.js"></script>

	<link rel="stylesheet" href="styles.css">
</body>



