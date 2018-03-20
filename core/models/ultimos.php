<?php

//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME','estacion_monitoreo');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}
$sensor ="";
$limit="";
if(isset($_POST['sensor']))
{
  $sensor = $_POST['sensor'];
}
else 
{
	$sensor = "grafico_mq7";
}
if(isset($_POST['limit']))
{
  $limit = $_POST['limit'];
}
else 
{
	$limit = 10;
}//query to get data from the table

$query = sprintf("SELECT x as numero,y as lectura ,TIME(fecha) as fecha FROM ".$sensor." order by x desc limit ".$limit.";");

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
