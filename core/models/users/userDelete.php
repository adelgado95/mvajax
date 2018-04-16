<?php
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}
$id="";
if(isset($_REQUEST['id']))
{
    $id = $_REQUEST['id'];
}
$query2 = sprintf("DELETE FROM users WHERE id=$id");
$result2 = $mysqli->query($query2);
if($result2)
echo 1;
else
echo -1;
$mysqli->close();

?>
