<?php
require('core/core.php');
ini_set('display_errors', 1);
if(isset($_GET['view']))
{	
	if(file_exists('core/controllers/'.$_GET['view'].'Controller.php'))
	{
		
		include('core/controllers/'.$_GET['view'].'Controller.php');
	}
	else
	{
			echo $_GET['view'];
			include('core/controllers/loginController.php');
	}
}
else
{

	if(isset($_SESSION['app_id']))
	{
			include('core/controllers/adminController.php');
	}
	else
	{
			include('core/controllers/indexController.php');
	}
}
?>
