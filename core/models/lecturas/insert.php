<?php
$sensorDx="0";
$sensorT="0";
$sensorH="0";
$sensorPm="0";
$sensorPm1="0";
$sensorOz="0";
    if(isset($_GET['sensorDx']))
    {
      $sensorDx=$_GET['sensorDx'];
    }
    if(isset($_GET['sensorT']))
    {
      $sensorT=$_GET['sensorT'];
    }
    if(isset($_GET['sensorH']))
    {
      $sensorH=$_GET['sensorH'];
    }
    if(isset($_GET['sensorPm']))
    {
      $sensorPm=$_GET['sensorPm'];
    }
    if(isset($_GET['sensorPm1']))
    {
      $sensorPm1=$_GET['sensorPm1'];
    }
    if(isset($_GET['sensorOz']))
    {
      $sensorOz=$_GET['sensorOz'];
    }
    if(isset($_GET['Id_estacion']))
    {
      $Id_estacion=$_GET['Id_estacion'];
    }

$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);


    if(!$mysqli){
    	die("Connection failed: " . $mysqli->error);
    }
    //query to get data from the table

    $query = sprintf("INSERT INTO estacion_monitoreo.lectura (sensorT, sensorH, sensorDx, sensorPm, sensorPm1, sensorOz, Id_estacion) VALUES ($sensorT, $sensorH, $sensorDx, $sensorPm, $sensorPm1, $sensorOz, $Id_estacion )");

    //execute query
    $result = $mysqli->query($query);
      echo $result;

    //loop through the returned data

    //free memory associated with result


    //close connection
    $mysqli->close();



?>
