<?php

$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
$query = sprintf("SELECT * from users where id=".$_GET['id'].";");
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
