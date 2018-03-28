<?php
//Sesiones
session_start();
/*Nucleo aqui se llama a todo*/
#constantes de la conexion
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'estacion_monitoreo');
#Constantes de la app
define('HTML_DIR','views/app/');
define('APP_TITLE','Aire_Admin');
define('APP_COPY','Copyright &copy'.date('Y',time()).'UNAN-LEON');
define('APP_URL','http://localhost/mvajax/');
#estructura
require('core/models/class.Conexion.php');
require('core/bin/functions/encrypt.php');
require('core/bin/functions/Users.php');
$users = Users();
?>
