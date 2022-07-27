<?php 
	require_once "../config/conexionpoo.php";
	require_once "../model/DetalleFactura.php";
	require_once "../view/FeditarDetalleF.php";

	if (isset($_POST['actualizardetallefactura'])) 
	{
		$DetalleId = $_POST['Detalleid'];
		$TipoProduc = $_POST['tipo_producto'];
		$DetalleProduc = $_POST['detalle_producto'];
		$NumFact = $_POST['num_fac'];

		$consul = new facturas();
		$reg = $consul->actualizardetallefactura($DetalleId,$TipoProduc,$DetalleProduc,$NumFact);

		if ($reg) 
		{
			print "<script>alert(\"Factura actualizada\");
			window.location = '../view/FDetallefactura.php';</script>";
		}else{
			print "<script>alert(\"No se puede actualizar los datos\");
			window.location = '../view/index_admin.php';</script>";
		}
	}

 ?>