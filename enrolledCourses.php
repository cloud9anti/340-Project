<?php
// Initialize the session
session_start();

require 'conndb.php';
require 'header.php';




$sql = 'SELECT * FROM heroku_7907a8bdd4fde12.people';
$result = mysqli_query($connection,$sql);
$people = mysqli_fetch_array($result, MYSQLI_ASSOC);

 ?>

<h1>Hello Student, please view, edit or add courses to your schedule.</h1>
<form>


    <body>

        <h2>Enrolled Courses</h2>


        <style>
            table {
                border: 1px solid black;
            }
        </style>

        <table style="width:100%">
            <tr>
                <th>Course</th>
                <td>Insert</td>
                <th>Edit</th>
                <th>Remove</th>
            </tr>
            <tr>
                <td>CS 161</td>
                <td><button type="button">INSERT</button></td>
                <td><button type="button">EDIT</button></td>
                <td><button type="button">DELETE</button></td>
            </tr>
            <tr>
                <td>CS 162</td>
                <td><button type="button">INSERT</button></td>
                <td><button type="button">EDIT</button></td>
                <td><button type="button">DELETE</button></td>
            </tr>
            <tr>
                <td>CS 290</td>
                <td><button type="button">INSERT</button></td>
                <td><button type="button">EDIT</button></td>
                <td><button type="button">DELETE</button></td>
            </tr>
        </table>
        <div>
            <td><button type="button">SUBMIT</button></td>
        </div>
        <br> <br>
        <td><button type="button">UNDO CHANGES</button></td>




    <table id="table" align="center"></table>

</body>