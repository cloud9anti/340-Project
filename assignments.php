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

    <h1>View, Edit, and Delete Assignments</h1>

        <h2>Student Assignments</h2>

        <style>

            table {
                border: 1px solid black;
            }
        </style>
        <table style="width:100%">
            <tr>
                <th>Assignments</th>
                <td>Grade</td>
                <th>Edit</th>
                <th>Remove</th>
            </tr>
            <tr>
                <td>Assignment 1</td>
                <td>96</td>
                <td><button type="button">EDIT</button></td>
                <td><button type="button">DELETE</button></td>
            </tr>
            <tr>
                <td>Assignment 2</td>
                <td>100</td>
                <td><button type="button">EDIT</button></td>
                <td><button type="button">DELETE</button></td>
            </tr>
            <tr>
                <td>Exam 1</td>
                <td>92</td>
                <td><button type="button">EDIT</button></td>
                <td><button type="button">DELETE</button></td>
            </tr>
        </table>
        <div>
            <td><button type="button">SUBMIT</button></td>
        </div>
        <br> <br>
        <td><button type="button">ADD NEW ASSIGNMENT</button></td>


    <table id="table" align="center"></table>


    </body>