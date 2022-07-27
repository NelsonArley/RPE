<?php 	
	require_once "../config/conexionpoo.php";
	require_once "../model/Venta.php";
	
	require_once "../view/FventaAdmin.php";

	if (isset($_POST['registro'])) 
	{
		//public "$tipoProduc";

	 	$tipoProduc= $_POST['uno'];
		$ordenVenta = $_POST['orden_venta'];
		$cantiProduc= $_POST['cantidad'];
		$PrecioTotalVenta= $_POST['precio_venta'];
		$numFact= $_POST['factura_venta'];

		$pac = new venta();
		$registro =$pac->registroVent($tipoProduc,$ordenVenta,$cantiProduc,$PrecioTotalVenta,$numFact);

		if ($registro) 
		{
			print "<script>alert(\"Venta registrada\");
			window.location = '../view/FventaAdmin.php';</script>";
		}else{
			print "<script>alert(\"Fallo al ingresar datos\");
			window.location = '../view/index_admin.php';</script>";
		}
	}


 ?>