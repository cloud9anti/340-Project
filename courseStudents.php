<?php
// Initialize the session
session_start();

require 'conndb.php';
require 'header.php';



$courseID = $_POST['course_id']; 
$sql = "SELECT * FROM heroku_7907a8bdd4fde12.enrolledcourses WHERE course_id = '$courseID'";
$result = mysqli_query($connection,$sql);
$people = mysqli_fetch_array($result, MYSQLI_ASSOC);

 ?>



<head>
	<title>Student List</title>
</head>
<body>
	<h1>Welcome professor, please select a student enrolled in <?php echo $_POST['course']; ?> !!!!</h1>
	



            <table style="width:100%">
			<tr>
			<th> Student ID </th>
			<th> a  </th>
			<th>a</th>
			
			</tr>
			
			
			
                <tr>
                    <td><?php echo $people['people_id']; ?></td>

                </tr>
	<?php 
	
	



	while ($people= mysqli_fetch_array($result)) {

						?>
						
                <tr>
                    <td><?php echo $people['people_id']; ?></td>

                </tr>
              
          			<?php } ?>
            </table>




<table id="table" align="center"></table>

	  <li >
        <a href="studentAdd.php">Create New Student </a>
      </li>

</body>


