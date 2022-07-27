<?php 	
	require_once "../config/conexionpoo.php";
	require_once "../model/OrdenProductosBod.php";
	require_once "../view/FordenProductoBod.php";

	if (isset($_POST['registro'])) 
	{
		
		
		$LugarDestino = $_POST['LugarDes'];
		$NomProvedor = $_POST['proveedor'];
		$CantiProdu1 = $_POST['canti'];
		$tipoProduc = $_POST['tipo_producto'];
		$OrdenCom = $_POST['ordenCompra'];

		$pac = new orden();
		$registro =$pac->registroOrden($LugarDestino,$NomProvedor,$CantiProdu1,$tipoProduc,$OrdenCom);

		if ($registro) 
		{
			print "<script>alert(\"Orden registrada\");
			window.location = '../view/FordenProductoBod.php';</script>";
		}else{
			print "<script>alert(\"Fallo al ingresar datos\");
			window.location = '../view/index_bodeguero.php';</script>";
		}           
	}


 ?>