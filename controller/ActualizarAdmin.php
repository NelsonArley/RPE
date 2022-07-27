<?php 
	require_once "../config/conexionpoo.php";
	require_once "../model/ActualizarAdmins.php";
	require_once "../view/perfil_usuario_admin.php";

	if (isset($_POST['actuali_admin'])) 
	{
		$fk_pk_tdoc = $_POST['fk_pk_tdoc'];
		$id_us = $_POST['id_us'];
		$fk_rol = $_POST['fk_rol'];
		$username = $_POST['usu'];
		$Password = $_POST['pass'];
		$nom_us = $_POST['nom_us'];
		$ape_us = $_POST['ape_us'];
		$dir_us = $_POST['direccion'];
		$Email = $_POST['email'];
		$tel_us = $_POST['tel_us'];
		$estado_usu = $_POST['estado_us'];
		$fk_pregunta_seg = $_POST['fk_pregunta_seg'];
		$Rest_Pass = $_POST['Rest_Pass'];


		$medi = new admin();
		$reg = $medi->actualizaradmin($fk_pk_tdoc,$id_us,$fk_rol,$username,$Password,$nom_us,$ape_us,$dir_us,$Email,$tel_us,$estado_usu,$fk_pregunta_seg,$Rest_Pass);

		if ($reg) 
		{
			print "<script>alert(\"Admin actualizado\");
			window.location = '../view/index_admin.php';</script>";
		}else{
			print "<script>alert(\"No se puede actualizar los datos\");
			window.location = '../view/perfil_usuario_admin.php';</script>";
		}
	}

 ?>