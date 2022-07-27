<?php 	
	require_once "../config/conexionpoo.php";
	require_once "../model/inventario.php";
	require_once "../view/Finventario.php";


	if (isset($_POST['enviar'])) 
	{
		
		
		$NomProduc1 = $_POST['nombre_pro'];
		$FechaVen = $_POST['fecha_ven'];
		$FechaExp	= $_POST['Fecha_Expedicion'];
		$LotePro = $_POST['lote'];
		$PrecioPro = $_POST['precio_venta'];
		$Cod_Re_Pro = $_POST['codigo_referencia'];
		$TipoPro = $_POST['tipo_producto'];
		$Canti_Pro = $_POST['cantidad_producto'];
		

		$pac = new inventario();
		$registro =$pac->registroInventario($NomProduc1,$FechaVen,$FechaExp,$LotePro,$PrecioPro,$Cod_Re_Pro,$TipoPro,$Canti_Pro);

		if ($registro) 
		{
			print "<script>alert(\"inventario registrado\");
			window.location = '../view/Finventario.php';</script>";
		}else{
			print "<script>alert(\"Fallo al ingresar datos\");
			window.location = '../view/index_bodeguero.php';</script>";
		}
	}


 ?>