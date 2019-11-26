<?php
// Initialize the session
session_start();

require 'conndb.php';




$sql = 'SELECT * FROM heroku_7907a8bdd4fde12.people';
$result = mysqli_query($connection,$sql);
$people = mysqli_fetch_array($result, MYSQLI_ASSOC);

 ?>



<html>
<head>
	<title>Student List</title>
</head>
<body>
	<h1>Welcome professor, please select a student!!!!.</h1>
	
    <!--
<form>
   <fieldset>
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


        <a href="/assignments" id="assignments" onclick="link('assignments')"> Assignments Page</a>
		     <!--   <a href="/reset" id="reset" onclick="link('reset')"> Reset</a>    -->
		<a href="/course" id="course" onclick="link('course')"> Course</a>
		<a href="/enrolledCourses" id="enrolledCourses" onclick="link('course')"> Enrolled Courses</a>
		<a href="/people" id="people" onclick="link('people')"> People</a>
		<a href="/studentList" id="studentList" onclick="link('studentList')"> Student List</a>        
		<body>

            <h2>Student List</h2>
		<form action="">
		  Search by Last name:<br>
		  <input type="text" name="lastname" value=""><br><br>
		  <input type="submit" value="Search">

		</form>


            <table style="width:100%">
	<?php 


	while ($people= mysqli_fetch_array($result)) {

						?>
						
                <tr>
                    <th><?php echo $people['first_name']; ?></th>
                    <th><?php echo $people['last_name']; ?></th>
                    <th><?php echo $people['city']; ?></th>
                </tr>
              
          			<?php } ?>
            </table>
        </body>



<table id="table" align="center"></table>

<script src="client.js"></script>

	<link rel="stylesheet" href="styles.css">
</body>
</html>


