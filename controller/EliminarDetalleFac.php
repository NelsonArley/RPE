<?php 

	require_once "../config/conexion.php";

	if (isset($_GET['id'])) {
		$id=$_GET['id'];
		$query = "DELETE FROM detalle_factura where id_detalle_factura='$id'";

		if ($conexion->query($query)) {
			print "<script>alert(\"Registro Eliminado\");window.location= '../view/FDetallefactura.php';</script>";
		}else{
			echo "Error no se pudo eliminar el registro";
		}
	}else{
			echo "Error no se pudo procesar la peticion";
	}

 ?>