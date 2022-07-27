<?php 
	require_once "../config/conexionpoo.php";
	require_once "../model/VentaBodeguero.php";
	require_once "../view/FeditarVentaBod.php";

	if (isset($_POST['actualizarventa'])) 
	{
		$idVenta = $_POST['idventa'];
		$TipoProduc = $_POST['tipo_producto'];
		$orden_venta = $_POST['orden_venta'];
		$cantidad = $_POST['cantidad'];
		$precio = $_POST['precio'];
		$facturaVenta = $_POST['factura_venta'];

		$consul = new ventabod();
		$reg = $consul->actualizarventa($idVenta,$TipoProduc,$orden_venta,$cantidad,$precio,$facturaVenta);

		if ($reg) 
		{
			print "<script>alert(\"Venta actualizada\");
			window.location = '../view/FventaBod.php';</script>";
		}else{
			print "<script>alert(\"No se puede actualizar los datos\");
			window.location = '../view/index_bodeguero.php';</script>";
		}
	}

 ?>