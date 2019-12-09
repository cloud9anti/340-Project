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

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
			<p> Forgot your password? <a href="resetPassword.php">Reset Password</a>.</p> 
        </form>
    </div>    
</body>
