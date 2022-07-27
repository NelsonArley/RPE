<?php 
	require_once "../config/conexionpoo.php";
	require_once "../model/Facturas.php";
	require_once "../view/FeditarFactura.php";

	if (isset($_POST['actualizarfactura'])) 
	{
		$FacturaId = $_POST['facturaid'];
		$NomProdu = $_POST['Nom_producto'];
		$PrecioProdu = $_POST['precio_producto'];
		$TipoProduc = $_POST['tipo_producto'];

		$consul = new facturasuwu();
		$reg = $consul->actualizarfactura($FacturaId,$NomProdu,$PrecioProdu,$TipoProduc);

		if ($reg) 
		{
			print "<script>alert(\"Factura actualizada\");
			window.location = '../view/Ffactura.php';</script>";
		}else{
			print "<script>alert(\"No se puede actualizar los datos\");
			window.location = '../view/index_admin.php';</script>";
		}
	}

 ?>