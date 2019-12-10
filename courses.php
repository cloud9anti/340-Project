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



<h1>Hello Professor, Please Insert, Edit, or Delete Courses from your Schedule</h1>


    <body>



        <style>
            table {
                border: 1px solid black;
            }
        </style>
	<form method="post" action = "courseStudents.php">
        <table style="width:100%">
            <tr>
                <th>Course</th>
				<th>Department</th>
                <td>View</td>
                <th>Edit</th>
                <th>Remove</th>
            </tr>

			
     
			<?php 


			while ($people= mysqli_fetch_array($result)) {

								?>
								
						<tr>
							<td><?php echo $people['course_name']; ?></td>
							<td><?php echo $people['department']; ?></td>

							<input type="hidden" name="course" value="<?= $people['course_name']?>"> 

							<td><input href="courseStudents.php" value="View Course" type="submit"></input></td>
							<button type="submit" method="post" href="courseStudents.php"  >Add To Cart</button>
							<td><button type="button">EDIT</button></td>
							<td><button type="button">DELETE</button></td>
						</tr>
									<?php } ?>
				
						</form>
			
        </table>
        <div>
            <td><button type="button">SUBMIT</button></td>
        </div>
        <br> <br>
        <td><button type="button">UNDO CHANGES</button></td>

    </body>



    <table id="table" align="center"></table>

    <script src="client.js"></script>

	<link rel="stylesheet" href="styles.css">
</body>



