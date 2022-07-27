<?php 	
	require_once "../config/conexionpoo.php";
	require_once "../model/Venta.php";
	require_once "../view/FventaBod.php";
	

	if (isset($_POST['enviar'])) 
	{
		//public "$tipoProduc";

	 	$tipoProducbod= $_POST['uno'];
		$ordenVentabod = $_POST['orden_venta'];
		$cantiProducbod= $_POST['cantidad'];
		$PrecioTotalVentabod= $_POST['precio_venta'];
		$numFactbod= $_POST['factura_venta'];

		$pac = new ventabod();
		$registro =$pac->registroVent($tipoProducbod,$ordenVentabod,$cantiProducbod,$PrecioTotalVentabod,$numFactbod);

		if ($registro) 
		{
			print "<script>alert(\"Venta registrada\");
			window.location = '../view/FventaBod.php';</script>";
		}else{
			print "<script>alert(\"Fallo al ingresar datos\");
			window.location = '../view/index_bodeguero.php';</script>";
		}
	}


 ?>