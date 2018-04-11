<?php

//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', 'localhost');
define('DB_USERNAME','estacion');
define('DB_PASSWORD','cm>%d;q@j%HeQE69');
define('DB_NAME','estacion_monitoreo');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}
$sensor ="";
$sensor2 ="";
$limit="";
if(isset($_POST['sensor']))
{
  $sensor = $_POST['sensor'];
}
if(isset($_POST['sensor2']))
{
  $sensor2 = $_POST['sensor2'];
}
if(isset($_POST['limit']))
{
  $limit = "limit ".$_POST['limit'];
}

//query to get data from the table

$query = sprintf("SELECT ".$sensor." as y , ".$sensor2." as y2 , TIME(fecha) as fecha FROM lectura order by fecha desc limit 10;");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);
?>
