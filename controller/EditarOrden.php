<?php 
	require_once "../config/conexionpoo.php";
	require_once "../model/OrdenProductos.php";
	require_once "../view/FeditarordenProduc.php";

	if (isset($_POST['actualizarorden'])) 
	{
		$idOrden = $_POST['id_orden'];
		$destino = $_POST['destino'];
		$provedor = $_POST['nomProvedor'];
		$cantidad = $_POST['cantidadProduc'];
		$TipoProduc = $_POST['TipoProduc'];
		$OrdenCompra = $_POST['OrdenCompra'];

		$consul = new orden();
		$reg = $consul->actualizarorden($idOrden,$destino,$provedor,$cantidad,$TipoProduc,$OrdenCompra);

		if ($reg) 
		{
			print "<script>alert(\"Orden actualizada\");
			window.location = '../view/FordenProducto.php';</script>";
		}else{
			print "<script>alert(\"No se puede actualizar los datos\");
			window.location = '../view/index_admin.php';</script>";
		}
	}

 ?>