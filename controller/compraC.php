

<?php 	
	require_once "../config/conexionpoo.php";
	require_once "../model/compra.php";
	require_once "../view/Fcompra.php";

	if (isset($_POST['registrarfactura'])) 
	{
		
		
		$Orden_compra1 = $_POST['Orden_compra'];


		$pac = new compra();
		$registro =$pac->registroCompra($Orden_compra1);

		if ($registro) 
		{
			print "<script>alert(\"Compra registrada\");
			window.location = '../view/FOrdenProducto.php';</script>";
		}else{
			print "<script>alert(\"Fallo al ingresar datos\");
			window.location = '../view/Fcompra.php';</script>";
		}
	}


 ?>

