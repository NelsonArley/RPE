

<?php 	
	require_once "../config/conexionpoo.php";
	require_once "../model/DetalleFactura.php";
	require_once "../view/FDetallefactura.php";

	if (isset($_POST['registrarfactura'])) 
	{
		
		
		$tipoProduc	= $_POST['tipo_producto'];
		$detalleProduc = $_POST['detalle_producto'];
		$numFactura	= $_POST['num_fac'];

		$pac = new facturas();
		$registro =$pac->registroFac($tipoProduc,$detalleProduc,$numFactura);

		if ($registro) 
		{
			print "<script>alert(\"Factura registrada\");
			window.location = '../view/FDetallefactura.php';</script>";
		}else{
			print "<script>alert(\"Fallo al ingresar datos\");
			window.location = '../view/index_admin.php';</script>";
		}
	}


 ?>

