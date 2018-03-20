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
if(isset($_GET['sensor']))
{
  $sensor = $_GET['sensor'];
}
if(isset($_GET['limit']))
{
  $limit = "limit ".$_GET['limit'];
}

//query to get data from the table

$query = sprintf("SELECT g.y as y , m.y as y2 , TIME(g.fecha) as fecha FROM grafico_dht11 as g, grafico_mq7 as m where g.fecha = m.fecha order by m.fecha desc limit 10;");

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
