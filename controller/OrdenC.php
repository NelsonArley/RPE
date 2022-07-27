<?php 	
	require_once "../config/conexionpoo.php";
	require_once "../model/OrdenProductos.php";
	require_once "../view/FordenProducto.php";

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
			window.location = '../view/FordenProducto.php';</script>";
		}else{
			print "<script>alert(\"Fallo al ingresar datos\");
			window.location = '../view/index_admin.php';</script>";
		}           
	}


 ?>