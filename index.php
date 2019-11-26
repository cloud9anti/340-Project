<?php
// Initialize the session
session_start();

//require 'conndb.php';
/*
$dsn = 'mysql:host=us-cdbr-iron-east-05.cleardb.net;dbname=heroku_7907a8bdd4fde12';
$host = 'us-cdbr-iron-east-05.cleardb.net';
$db_name = 'heroku_7907a8bdd4fde12';
$username = 'b73b7a0286f36e';
$password = '3f079b57';
$options = [];
try {
$connection = new PDO('mysql:host='.$host.';dbname='.$db_name, $username, $password, $options);
} catch(PDOException $e) {
}


//user connection (same database)
$db_server = 'localhost';


 
// Attempt to connect to MySQL database 
$link = mysqli_connect($db_server, $username, $password, $db_name);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


//track the daily number of orders

static $dailyOrders = 0;
*/

//Include people table
//$sql = 'SELECT * FROM people WHERE active="Active"';

//$statement = $connection->prepare($sql);
//$statement->execute();
//$people = $statement->fetchAll(PDO::FETCH_OBJ);


$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$connection = new mysqli($server, $username, $password, $db);


$sql = 'SELECT * FROM heroku_7907a8bdd4fde12.people';
$result = mysqli_query($connection,$sql);
$people = mysqli_fetch_array($result, MYSQLI_ASSOC);
/*
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
*/
 ?>
<?php  echo "yay"; //require 'header.php'; 


	while ($people= mysqli_fetch_array($result)) {

						?>
						

  <h5> $<?php echo $people['first_name']; ?></h5>
					<?php } ?>



