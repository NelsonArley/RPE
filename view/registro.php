<?php
		require_once '../config/database.php';
	    $db = database::conectar();

	
	if (isset($_POST['registro'])) {

		$fk_pk_tdoc = $_POST['fk_pk_tdoc'];
		$Email =$_POST['Email'];
        $fk_rol = $_POST['fk_rol'];
		$username = $_POST['username'];
		$Password = $_POST['Password'];
		$nom_us = $_POST['nombre_usu'];
		$tel_us = $_POST['tel_us'];
		$username = $_POST['username'];
		$Rest_Pass = $_POST['Rest_Pass'];
		$ape_us = $_POST['ape_usu'];
		$dir_us = $_POST['dir_us'];
		if('Lugar de Nacimiento?'== $_POST['fk_pregunta_seg']){$fk_pregunta_seg=2 ;
		}else{
			$fk_pregunta_seg=1;
		}
		
		$id_us = $_POST['id_us'];

		$sql="INSERT INTO usuario (fk_pk_tdoc, id_us, fk_rol, username, Password, nom_us, ape_us, dir_us, Email , tel_us , foto_usu, estado_usu, fk_pregunta_seg, Rest_Pass)
		 VALUES('$fk_pk_tdoc', $id_us, '$fk_rol', '$username','$Password','$nom_us','$ape_us','$dir_us','$Email','$tel_us','../image/fotos/usuario.png',1,$fk_pregunta_seg,'$Rest_Pass' ) ";
	
		$resultado=$db->query($sql);
		
		if($resultado!=null){
			echo'Registro Ingresado con exito';
			}else{
			echo'Error al Ingresado un registro';
		}
		
	}//else{echo "errororroro";}
	
	
	echo "<script>alert(\"Registro Ingresado  con exito\");window.location='../login.php';</script>";