<?php
// Initialize the session
session_start();

require 'conndb.php';
require 'header.php';




$sql = 'SELECT * FROM heroku_7907a8bdd4fde12.courses';
$result = mysqli_query($connection,$sql);
$people = mysqli_fetch_array($result, MYSQLI_ASSOC);


if (isset ($_POST['course']) )) {

   header("location: courseStudents.php");


}

 ?>



<h1>Hello Professor, Please Insert, Edit, or Delete Courses from your Schedule</h1>
<form>
    <!--   <fieldset>
            <legend id="form">Choose your exercise:</legend>
            <input type="number" id="ID" hidden="true" />
            Name: <input type="text" name="workoutName" id="name" value="" />
            <br>
            Reps: <input type="number" name="workoutReps" id="reps" value="0" />
            <br>
            Weight: <input type="number" name="workoutWeight" id="weight" value="0" />
            <br>
            Check if using lbs <input type="checkbox" name="workoutLbs" id="lbs" />
            <br>
            Date: <input type="date" name="workoutDate" id="date" value="2019-08-10" />
            <br>

            <input type="button" value="Add" id="add" />

            <input type="button" value="Submit Edit" id="submitEdit" hidden="true" />

        </fieldset>
    </form>
    -->

    <body>



        <style>
            table {
                border: 1px solid black;
            }
        </style>

        <table style="width:100%">
            <tr>
                <th>Course</th>
                <td>View</td>
                <th>Edit</th>
                <th>Remove</th>
            </tr>
			
		
            <tr>
                <td>CS 161</td>
     
			<form method="post">
     
			<div class="form-group">
			  <label for="course">Course</label>
			  <input type="text" name="course" id="course" class="form-control">
			</div>
			
			<div class="form-group">
             <td><button href="courseStudents.php" type="submit">View Course</button></td>
			</div>
			</form>
                <td><button type="button">EDIT</button></td>
                <td><button type="button">DELETE</button></td>
            </tr>

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


