<?php
// Initialize the session
session_start();

require 'conndb.php';
require 'header.php';


$courseName = $_POST['course']; 
$courseID = $_POST['course_id']; 
$sql = "SELECT * FROM heroku_7907a8bdd4fde12.enrolledcourses WHERE course_id = '$courseID'";
$result = mysqli_query($connection,$sql);
$people = mysqli_fetch_array($result, MYSQLI_ASSOC);

if (isset ($_POST['btnDelete'])) {

  header("location: delete.php");
  

} else if (isset ($_POST['student_id'])) {

  header("location: gradeStudents.php");

}
 ?>




<head>
	<title>Student List</title>
</head>
<body>
	<h1>Please select a student enrolled in <?php echo $_POST['course']; ?> !</h1>
	

        <style>
            table {
                border: 1px solid black;
            }
        </style>

            <table style="width:90%">
			<tr>
			<th> Student ID </th>
			<th> View </th>
			<th> Edit </th>
			<th> Delete </th>

			
			</tr>
			
			
			<form method="post" action = "gradeStudents.php">
                <tr>
                    <td><?php echo $people['people_id']; ?></td>
					<input type="hidden" name="course" value="<?= $courseName?>"> 
					<input type="hidden" name="course_id" value="<?= $courseID?>"> 
					<input type="hidden" name="student_id" value="<?= $people['people_id']?>"> 				
					<td><input href="gradeStudents.php" value="View Grades" type="submit"></input></td>
					<td><button type="button">EDIT</button></td>
					<td><button type="button">DELETE</button></td>
                </tr>
              </form>			

	<?php 
	
	



	while ($people= mysqli_fetch_array($result)) {

						?>
			<form method="post" action = "gradeStudents.php">
                <tr>
                    <td><?php echo $people['people_id']; ?></td>
					<input type="hidden" name="course" value="<?= $courseName?>"> 
					<input type="hidden" name="course_id" value="<?= $courseID?>"> 
					<input type="hidden" name="student_id" value="<?= $people['people_id']?>"> 				
					<td><input href="gradeStudents.php" value="View Grades" type="submit"></input></td>
					<td><button type="button">EDIT</button></td>
					<td><button type="button">DELETE</button></td>
                </tr>
              </form>
          			<?php } ?>
            </table>


           <table style="width:90%">
			<tr>
			<th> Student ID </th>
			<th> View </th>
			<th> Edit </th>
			<th> Delete </th>

			
			</tr>
			
			
			<form method="post" action = "gradeStudents.php">
                <tr>
                    <td><?php echo $people['people_id']; ?></td>
					<input type="hidden" name="course" value="<?= $courseName?>"> 
					<input type="hidden" name="course_id" value="<?= $courseID?>"> 
					<input type="hidden" name="student_id" value="<?= $people['people_id']?>"> 				
					<td><input href="gradeStudents.php" value="View Grades" type="submit"></input></td>
					<td><button type="button">EDIT</button></td>
					<td><button type="button">DELETE</button></td>
                </tr>
              </form>			

	<?php 
	
	



	while ($people= mysqli_fetch_array($result)) {

						?>
			<form method="post" action = "gradeStudents.php">
                <tr>
                    <td><?php echo $people['people_id']; ?></td>
					<input type="hidden" name="course" value="<?= $courseName?>"> 
					<input type="hidden" name="course_id" value="<?= $courseID?>"> 
					<input type="hidden" name="student_id" value="<?= $people['people_id']?>"> 				
					<td><input href="gradeStudents.php" value="View Grades" type="submit"></input></td>
					<td><button type="button">EDIT</button></td>
					<td><button type="button">DELETE</button></td>
                </tr>
              </form>
          			<?php } ?>
            </table>

<table id="table" align="center"></table>

	  <li >
        <a href="studentAdd.php">Create New Student </a>
      </li>

</body>


