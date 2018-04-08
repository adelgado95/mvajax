<?php

//setting header to json
header('Content-Type: application/json');

//database
//get connection
//get connection
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'estacion_monitoreo');
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
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

$query = sprintf("SELECT Id_lectura as numero ,".$sensor." as lectura,fecha as fecha FROM lectura order by Id_lectura desc limit 6;");

//execute query
$resulta = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($resulta as $row) {
	$data[] = $row;
}

//free memory associated with result
$resulta->close();

//close connection

$mysqli->close();

//now print the data
print json_encode($data);
?>
