<?php

//setting header to json
header('Content-Type: application/json');

//database
//get connection
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME','estacion_monitoreo');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);


if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}
//query to get data from the table

$query = 'SELECT Id_lectura as numero ,sensorT,sensorDx,sensorPm,sensorOz,DATE_FORMAT(fecha,"%d-%m-%Y %h:%i:%s") as fecha FROM lectura order by Id_lectura desc limit 1';

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
