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
	<form method="post">
        <table style="width:100%">
            <tr>
                <th>Course</th>
                <td>View</td>
                <th>Edit</th>
                <th>Remove</th>
            </tr>

			
     
			<?php 


			while ($people= mysqli_fetch_array($result)) {

								?>
								
						<tr>
							<td><?php echo $people['course_name']; ?></td>
							<td><?php echo $people['course_name']; ?></td>
							<td><?php echo $people['course_id']; ?></td>
							<td> HELLO </td>
						</tr>
						
					  

			<div class="form-group">
			  <label for="course">Course</label>
			  <input type="text" name="course" value="<?= $products['course_ID']?>"> 
			</div>
			
			<div class="form-group">
             <td><button href="courseStudents.php" type="submit">View Course</button></td>
			</div>
			</form>
                <td><button type="button">EDIT</button></td>
                <td><button type="button">DELETE</button></td>
  
							<?php } ?>
							
            <tr>
                <th>Course</th>
                <td>View</td>
                <th>Edit</th>
                <th>Remove</th>
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



