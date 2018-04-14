<?php
header('Content-Type: application/json');
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}
$sensor ="";
$limit="";
if(isset($_GET['sensor']))
{
  $sensor = $_GET['sensor'];
}
else
{
	$sensor = "sensorDx";
}
if(isset($_GET['limit']))
{
  $limit = $_GET['limit'];
}
else
{
	$limit = 10;
}//query to get data from the table

$query = sprintf("SELECT Id_lectura as numero ,".$sensor." as lectura,fecha as fecha FROM lectura order by Id_lectura desc limit 24");

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
