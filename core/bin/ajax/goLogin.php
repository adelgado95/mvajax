<?php
if(!empty($_POST['user']) and !empty($_POST['pass']))
{
	$db = new Conexion();
	$data = $db->real_escape_string($_POST['user']);
	$pass = Encrypt($_POST['pass']);
	$sql = $db->query("SELECT id FROM users WHERE (user='$data' or email='$data') AND pass='$pass' LIMIT 1;");
	if($db->rows($sql)>0){
		$_SESSION['app_id'] = $db->recorrer($sql)[0];
		if($_POST['session'])
			{ini_set('session.cookie.lifetime', time() + (60*60*24));
	echo 1;
		}
		
	}
	else
	{
		echo '<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">x</button><h4>Error</h4><p><strong>Las credenciales son incorrectas'.$pass.'</strong></p></div>';
	}
	$db->liberar($sql);
	$db->close();
	
}
else
{
	echo '<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">x</button><h4>Error</h4><p><strong>Todos los datos deben estar llenos</strong></p></div>';
}
?>
