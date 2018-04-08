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

$pinter = $_POST['intervalos'];
$inter = explode(',',$pinter);
$consulta = "SELECT Id_lectura,";
if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}

$sensores = $_POST['sensor'];
$asensores = explode(',',$sensores);
$arrlength = count($asensores);
if(strcmp($inter[0],"normales") == 0)
$consulta.="fecha,".$sensores;

if(strcmp($inter[0],"cahora") == 0)
{
$consulta.="(DATE_FORMAT(fecha,'%Y-%m-%d %H:00:00')) as fecha,";
	for($x = 0; $x < $arrlength; $x++) {
    $consulta.="ROUND(AVG(".$asensores[$x].")) as ".$asensores[$x];
		if($x!=($arrlength-1))
		{
			$consulta.=",";
		}
	}
}
$consulta.=" FROM lectura WHERE ";
$pdias = $_POST['dias'];
$dias = explode(',',$pdias);
$phoras = $_POST['horas'];
$horas = explode(',',$phoras);



if(strcmp($dias[0],"dia") == 0)
{
		$consulta.="DATE(fecha)='".$dias[1]."' ";
}
if(strcmp($dias[0],"dias")==0)
{
			$consulta.="(DATE(fecha) BETWEEN '".$dias[1]."' AND '".$dias[2]."') ";
}
if(strcmp($horas[0],"hora")==0)
{
		$consulta.="AND HOUR(fecha)='".$horas[1]."' ";
}
if(strcmp($horas[0],"horas")==0)
{
		$consulta.="AND (TIME(fecha) BETWEEN '".$horas[1]."' AND '".$horas[2]."') ";
}
if(strcmp($inter[0],"cahora") == 0)
{
		$consulta.="GROUP BY HOUR(TIME(fecha)) ";
}
$consulta.="ORDER BY fecha DESC;";
/*
// La funcion explode convertira la cadena a arreglo
$tok = explode(',',$ss); $limit="";
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
*/

$query = $consulta;


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
if(count($data) == 0)
print json_encode("NA");
else {
	print json_encode($data);
}
//now print the data

?>
