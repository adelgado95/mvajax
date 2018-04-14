<?php
	function Users()
	{
		$db = new Conexion();
		$sql = $db->query("SELECT * FROM users");
		if($db->rows($sql) > 0)
		{
			while($d = $db->recorrer($sql))
			{
				$users[$d['id']]= array(
					'id'=>$d['id'],
					'user'=>$d['user'],
					'email'=>$d['email'],
					'Apellido'=>$d['apellido'],
					'permisos'=>$d['permisos'],
					'imagen'=>$d['imagen'],
					'area_trabajo'=>$d['area_trabajo']
				);
			}
		}
		else
		{
			$user = false;
		}
		$db->liberar($sql);
		$db->close();
		return $users;
	}
?>
