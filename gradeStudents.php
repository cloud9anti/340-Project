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

$sql2 = "SELECT * FROM heroku_7907a8bdd4fde12.people WHERE people_id = '$studentID'";
$result2 = mysqli_query($connection,$sql2);
$people2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);

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

<table id="table" align="center"></table>


         <table style="width:90%">
			<tr>
			<th> First Name </th>
			<th> Last Name </th>
			<th> City </th>
			
			</tr>

               <tr>
                    <td><?php echo $people2['first_name']; ?></td>
                    <td><?php echo $people2['last_name']; ?></td>
                    <td><?php echo $people2['city']; ?></td>
                </tr>
	<?php 

 
              
	while ($people2= mysqli_fetch_array($result)) {

						?>
						

						
                <tr>
                    <td><?php echo $people2['first_name']; ?></td>
                    <td><?php echo $people2['last_name']; ?></td>
                    <td><?php echo $people2['city']; ?></td>
                </tr>
              
          			<?php } ?>
            </table>

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





<br><br><br><br><br><br><br><br><br><br><br><br><br><br>



<?php


$sql = "SELECT * FROM heroku_7907a8bdd4fde12.enrolledcourses WHERE people_id = '$studentID'";
$result = mysqli_query($connection,$sql);
$people = mysqli_fetch_array($result, MYSQLI_ASSOC);

						?>

       <h1 align="center"> Total Grade: <?php echo $people['score']; ?>%</h1>

<form align="center" method="post" action = "gradeStudents.php">	
	<select align="center" name="totalGrade">

	<?php
		for ($i=1; $i<=100; $i++)
		{
			?>
				<option  value="<?php echo $i;?>"><?php echo $i;?></option>
			<?php
		}
	?>
	</select>
	<input align="center" href="home.php" value="Update" type="submit"> </input>
</form>



</body>


