<?php
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}
$user="";
$nombre="";
$apellidos="";
$pass="";
$area="";
$telefono="";
$imagen="";
$email="";
if(isset($_REQUEST['user']))
{
    $user = $_REQUEST['user'];
}
if(isset($_REQUEST['nombre']))
{
    $nombre = $_REQUEST['nombre'];
}
if(isset($_REQUEST['apellidos']))
{
    $apellidos = $_REQUEST['apellidos'];
}
if(isset($_REQUEST['pass']))
{
    $pass = $_REQUEST['pass'];
}
if(isset($_REQUEST['area']))
{
    $area = $_REQUEST['area'];
}
if(isset($_REQUEST['telefono']))
{
    $telefono = $_REQUEST['telefono'];
}
if(isset($_REQUEST['imagen']))
{
    $imagen = $_REQUEST['imagen'];
}
if(isset($_REQUEST['email']))
{
    $email = $_REQUEST['email'];
}
if($_REQUEST['userId']==-1){
$query2 = sprintf("SELECT id FROM users ORDER BY id DESC limit 1;");
$result2 = $mysqli->query($query2);
$row = $result2->fetch_assoc();
$idd =$row['id']+1;
$query = sprintf("INSERT INTO users(id,user,nombre,apellido,pass,area_trabajo,telefono,imagen,email,permisos)".
"values($idd,'$user','$nombre','$apellidos','$pass','$area','$telefono','views/app/images/".$idd.".jpg','$email',0)");
$result = $mysqli->query($query);
$archivo = $_FILES['imagen'];
//execute query
$result = $mysqli->query($query);
//loop through the returned data
//free memory associated with result
//close connection
move_uploaded_file($archivo['tmp_name'], 'views/app/images/'.$idd.'.jpg');
$mysqli->close();
 header("Location:index.php?view=user");
}
else {
	{

	}
}
//now print the data


?>
