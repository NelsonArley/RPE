<?php 

	require_once "../config/conexion.php";

	if (isset($_GET['id'])) {
		$id=$_GET['id'];
		$query = "DELETE FROM producto where Id_Producto ='$id'";

		if ($conexion->query($query)) {
			print "<script>alert(\"Registro Eliminado\");window.location= '../view/Finventario.php';</script>";
		}else{
			echo "Error no se pudo eliminar el registro";
		}
	}else{
			echo "Error no se pudo procesar la peticion";
	}

 ?>