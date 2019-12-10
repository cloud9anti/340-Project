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
                <th>Edit</th>
                <th>Remove</th>
            </tr>
			

			<form method="post" action = "gradeStudents.php">
                <tr>
                    <td><?php echo $people['grade_name']; ?></td>
                    <td><?php echo $people['grade_type']; ?></td>
					
					<input type="hidden" name="course" value="<?= $courseName?>"> 
					<input type="hidden" name="course_id" value="<?= $courseID?>"> 
					<td><button type="button">EDIT</button></td>
					<td><button type="button">DELETE</button></td>
                </tr>
              </form>			
     
        </table>
        <div>
            <td><button type="button">SUBMIT</button></td>
        </div>
        <br> <br>
        <td><button type="button">ADD NEW ASSIGNMENT</button></td>


    <table id="table" align="center"></table>


    </body>