
<?php 	
	require_once "../config/conexionpoo.php";
	require_once "../model/Factura.php";
	require_once "../view/Ffactura.php";

	if (isset($_POST['registrarfactura'])) 
	{
		
		
		$NomProduc	= $_POST['Nom_producto'];
		$PreProduc = $_POST['precio_producto'];
		$TipoProduc	= $_POST['tipo_producto'];

		$pac = new facturasuwu();
		$registro =$pac->registroFacuwu($NomProduc,$PreProduc,$TipoProduc);

		if ($registro) 
		{
			print "<script>alert(\"Factura registrada\");
			window.location = '../view/Ffactura.php';</script>";
		}else{
			print "<script>alert(\"Fallo al ingresar datos\");
			window.location = '../view/index_admin.php';</script>";
		}
	}


 ?>

