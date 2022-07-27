<?php 

require_once "../config/conexion.php";
require_once "../config/conexionpoo.php";

/**
 * 
 */
class facturasuwu extends Conectar
{
	public $nom_produc;
	public $pre_produc;
	public $tipoProduc;


	public function __construct()
	{
		parent::__construct();
	}

	public function registroFacuwu($nom_produc,$pre_produc,$tipoProduc)
	{
		$sql = "SELECT * FROM detalle_factura WHERE tipo_producto ='$tipoProduc'";

		$Resul =$this->_bd->query($sql);
		$fila = mysqli_num_rows($Resul);

		if ($fila > 0) {
			echo "<script>
				  alert('La factura ya fue registrada');
				  window.location = '../view/Ffactura.php';
				  </script>";
		}else{
		
			$sql = "INSERT INTO factura(nombre_producto, precio_producto, tipo_producto) VALUES ('".$nom_produc."','".$pre_produc."','".$tipoProduc."')";

			$Resul =$this->_bd->query($sql);
			if (!$Resul) 
			{
				print "<script>alert(\"Fallo al ingresar los datos.\");
				window.location = '../view/Ffactura.php';</script>";
			}else
			{
				return $Resul;
				print "<script>alert(\"Datos ingresados\");
				window.location = '../view/index_admin.php';</script>";

				$Resul->close();
				$this->_db->close();
			}
		}
	}

		public function listarFacturas()
		{

		$sqli = "SELECT * FROM factura ORDER BY id_factura";
		$Pre = $this->_bd->query($sqli);
		if($Pre->num_rows > 0)
		{
			while ($row=$Pre->fetch_assoc())
			{
				$resul[]=$row;	
				 }

			}
			return $resul;
			}

			public function actualizarfactura($idFact,$NomProduc,$PrecioProduc,$TipoProduc)
		{

$sql3 = "UPDATE factura SET id_factura = '$idFact',nombre_producto = '$NomProduc',precio_producto = '$PrecioProduc',tipo_producto = '$TipoProduc' WHERE id_factura = $idFact";
			$actua =$this->_bd->query($sql3);
			if (!$actua) 
			{
				print "<script>alert(\"No se puede actualizar los datos.\");
				window.location = '../view/FeditarFactura.php';</script>";
			}else
			{
				return $actua;
				print "<script>alert(\"Datos de la factura se actualizaron\");
				window.location = '../view/index_admin.php';</script>";

				$actua->close();
				$this->_db->close();
		}

		}

				public function eliminarfactura()
		{
			$sql14 = "DELETE FROM factura where id_factura='$id'";
			$elimina =$this->_bd->query($sql4);
			if (!$elimina) 
			{
				print "<script>alert(\"No se puede eliminar los datos.\");
				window.location = '../view/Ffactura.php';</script>";
			}else
			{
				return $actua;
				print "<script>alert(\"factira eliminada\");
				window.location = '../view/index_admin.php';</script>";

				$elimina->close();
				$this->_db->close();
		}
		}	


		

}


 ?>