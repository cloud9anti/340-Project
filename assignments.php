<?php
// Initialize the session
session_start();

require 'conndb.php';
require 'header.php';




$sql = 'SELECT * FROM heroku_7907a8bdd4fde12.grade';
$result = mysqli_query($connection,$sql);
$people = mysqli_fetch_array($result, MYSQLI_ASSOC);

 ?>
<body>

    <h1>View, Edit, and Delete Assignments</h1>

        <h2>Student Assignments</h2>

        <style>

            table {
                border: 1px solid black;
            }
        </style>
        <table style="width:100%">
            <tr>
			<th> Assignment Name </th>
			<th> Assignment Type </th>
			<th> Course ID </th>
			<th> Building </th>
			<th> Room Number </th>
                <th>Edit</th>
            </tr>
			

			<form method="post" action = "gradeStudents.php">
                <tr>
                    <td><?php echo $people['grade_name']; ?></td>
                    <td><?php echo $people['grade_type']; ?></td>
                    <td><?php echo $people['course_id']; ?></td>
                    <td><?php echo $people['building']; ?></td>
                    <td><?php echo $people['room_number']; ?></td>
					
					<input type="hidden" name="course" value="<?= $courseName?>"> 
					<input type="hidden" name="course_id" value="<?= $courseID?>"> 

					<td><button type="button">EDIT/DELETE</button></td>

                </tr>
              </form>		

	<?php 
	

	while ($people= mysqli_fetch_array($result)) {

						?>
						
			<form method="post" action = "gradeStudents.php">
                <tr>
                    <td><?php echo $people['grade_name']; ?></td>
                    <td><?php echo $people['grade_type']; ?></td>
                    <td><?php echo $people['course_id']; ?></td>
                    <td><?php echo $people['building']; ?></td>
                    <td><?php echo $people['room_number']; ?></td>
					
					<input type="hidden" name="course" value="<?= $courseName?>"> 
					<input type="hidden" name="course_id" value="<?= $courseID?>"> 
					<td><button type="button">EDIT/DELETE</button></td>
                </tr>
              </form>							
						
						
          			<?php } ?>
     
        </table>


        <br> <br>
	  <li >
        <a href="assignmentAdd.php">Create New Course </a>
      </li>


    <table id="table" align="center"></table>
	
	


    </body>