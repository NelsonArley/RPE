<?php 
	require_once "../config/conexionpoo.php";
	require_once "../model/inventario.php";
	require_once "../view/FeditarInventario.php";

	if (isset($_POST['actualizarinventario'])) 
	{
		$idinventario = $_POST['id_produc'];
		$nombreProduc = $_POST['nombre_pro'];
		$fechaVen = $_POST['fecha_ven'];
		$fechaExp = $_POST['Fecha_Expedicion'];
		$lote = $_POST['lote'];
		$precioVen = $_POST['precio_venta'];
		$Cod_Ref = $_POST['codigo_referencia'];
		$TipoProduc = $_POST['tipo_producto'];
		$cantidad = $_POST['cantidad_producto'];

		$consul = new inventario();
		$reg = $consul->actualizarinventario($idinventario,$nombreProduc,$fechaVen,$fechaExp,$lote,$precioVen,$Cod_Ref,$TipoProduc,$cantidad);

		if ($reg) 
		{
			print "<script>alert(\"Inventario actualizado\");
			window.location = '../view/Finventario.php';</script>";
		}else{
			print "<script>alert(\"No se puede actualizar los datos\");
			window.location = '../view/index_bodeguero.php';</script>";
		}
	}

 ?>