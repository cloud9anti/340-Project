<?php
// Initialize the session
session_start();

require 'conndb.php';
require 'header.php';




$sql = 'SELECT * FROM heroku_7907a8bdd4fde12.people';
$result = mysqli_query($connection,$sql);
$people = mysqli_fetch_array($result, MYSQLI_ASSOC);

 ?>


<h1></h1>
<form>


    <body>

        <h2>Courses</h2>


        <style>
            table {
                border: 1px solid black;
            }
        </style>

        <table style="width:100%">
<form>
       <fieldset>
          <legend>Selecting elements</legend>
          <p>
             <label>Please Select:</label>
             <select id = "People List">
               <option value = "Professor">Professor</option>
               <option value = "Student">Student</option>
             </select>
          </p>
       </fieldset>
    </form>
        </table>
        <div>
            <td><button type="button">SUBMIT</button></td>
				  <li class="nav-item active">
        <a class="navbar-brand" href="home.php">[Login] <span class="sr-only">(current)</span></a>
      </li>
        </div>
        <br> <br>

 


    <table id="table" align="center"></table>

</body>


