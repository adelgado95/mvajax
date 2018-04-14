<?php
require('core/core.php');
if(isset($_REQUEST['view']))
{
	if(file_exists('core/controllers/'.$_REQUEST['view'].'Controller.php'))
	{

		include('core/controllers/'.$_REQUEST['view'].'Controller.php');
	}
	else
	{
			header('location:index.php');
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
