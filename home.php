<?php
// Initialize the session
session_start();

require 'conndb.php';
require 'header.php';




$sql = 'SELECT * FROM heroku_7907a8bdd4fde12.people';
$result = mysqli_query($connection,$sql);
$people = mysqli_fetch_array($result, MYSQLI_ASSOC);

 ?>
<body>

	<h1>Welcome professor, please select a student!!!!.</h1>
   

            <h2>Student List</h2>
		<form action="">
		  Search by Last name:<br>
		  <input type="text" name="lastname" value=""><br><br>
		  <input type="submit" value="Search">

		</form>


            <table style="width:100%">
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Age</th>
                </tr>
                <tr>
                    <td>Johnny</td>
                    <td>Adams</td>
                    <td>19</td>
                </tr>
                <tr>
                    <td>Eve</td>
                    <td>Brown</td>
                    <td>18</td>
                </tr>
                <tr>
                    <td>Kerri</td>
                    <td>Edmonds</td>
                    <td>19</td>
                </tr>
                <tr>
                    <td>Lisa</td>
                    <td>Jackson</td>
                    <td>19</td>
                </tr>
                <tr>
                    <td>Susanne</td>
                    <td>Lane</td>
                    <td>23</td>
                </tr>
                <tr>
                    <td>Tom</td>
                    <td>Nichols</td>
                    <td>21</td>
                </tr>
                <tr>
                    <td>Jenny</td>
                    <td>Phillips</td>
                    <td>19</td>
                </tr>
                <tr>
                    <td>Tom</td>
                    <td>Quinn</td>
                    <td>18</td>
                </tr>

                </tr>
            </table>




<table id="table" align="center"></table>

</body>


