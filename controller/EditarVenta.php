<?php 
	require_once "../config/conexionpoo.php";
	require_once "../model/Venta.php";
	require_once "../view/FeditarVenta.php";

	if (isset($_POST['actualizarventa'])) 
	{
		$idVenta = $_POST['idventa'];
		$TipoProduc = $_POST['tipo_producto'];
		$orden_venta = $_POST['orden_venta'];
		$cantidad = $_POST['cantidad'];
		$precio = $_POST['precio'];
		$facturaVenta = $_POST['factura_venta'];

		$consul = new venta();
		$reg = $consul->actualizarventa($idVenta,$TipoProduc,$orden_venta,$cantidad,$precio,$facturaVenta);

		if ($reg) 
		{
			print "<script>alert(\"Factura actualizada\");
			window.location = '../view/FventaAdmin.php';</script>";
		}else{
			print "<script>alert(\"No se puede actualizar los datos\");
			window.location = '../view/index_admin.php';</script>";
		}
	}

 ?>