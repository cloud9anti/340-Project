<?php
// Initialize the session
session_start();

require 'conndb.php';
require 'header.php';


$courseName = $_POST['course']; 
$courseID = $_POST['course_id']; 
$studentID = $_POST['student_id']; 
$sql = "SELECT * FROM heroku_7907a8bdd4fde12.grade WHERE course_id = '$courseID'";
$result = mysqli_query($connection,$sql);
$people = mysqli_fetch_array($result, MYSQLI_ASSOC);

if (isset ($_POST['totalGrade'])) {

	$totalGrade = $_POST['totalGrade'];
	

	mysqli_query($connection, "UPDATE enrolledcourses SET score ='$totalGrade' WHERE people_id = '$studentID' ");
	header("location: home.php");



}



 ?>



<head>
	<title>Student List</title>
</head>
<body>
	<h1>Viewing Student ID: <?php echo $_POST['student_id']; ?> 's grades.</h1>



        <style>
            table {
                border: 1px solid black;
            }
        </style>

            <table style="width:90%">
			<tr>
			<th> Assignment Name </th>
			<th> Assignment Type </th>
			
			</tr>
			
			
			<form method="post" action = "gradeStudents.php">
                <tr>
                    <td><?php echo $people['grade_name']; ?></td>
                    <td><?php echo $people['grade_type']; ?></td>
					
					<input type="hidden" name="course" value="<?= $courseName?>"> 
					<input type="hidden" name="course_id" value="<?= $courseID?>"> 
                </tr>
              </form>			

	<?php 
	
	



	while ($people= mysqli_fetch_array($result)) {

						?>
			<form method="post" action = "gradeStudents.php">
                <tr>
                    <td><?php echo $people['grade_name']; ?></td>
                    <td><?php echo $people['grade_type']; ?></td>
					
					<input type="hidden" name="course" value="<?= $courseName?>"> 
					<input type="hidden" name="course_id" value="<?= $courseID?>"> 
                </tr>
              </form>			

          			<?php } ?>
            </table>



<table id="table" align="center"></table>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<?php


$sql = "SELECT * FROM heroku_7907a8bdd4fde12.enrolledcourses WHERE people_id = '$studentID'";
$result = mysqli_query($connection,$sql);
$people = mysqli_fetch_array($result, MYSQLI_ASSOC);

						?>

       <h1> Total Grade: <?php echo $people['score']; ?>%</h1>

<form method="post" action = "gradeStudents.php">	
	<select name="totalGrade">

	<?php
		for ($i=1; $i<=100; $i++)
		{
			?>
				<option  value="<?php echo $i;?>"><?php echo $i;?></option>
			<?php
		}
	?>
	</select>
	<input href="home.php" value="Change Score" type="submit"> </input>
</form>

</body>


