<?php 
require_once "../config/conexion.php";
require_once "../config/conexionpoo.php";

/**
 * 
 */
class venta extends Conectar
{

	public $id_venta;
	public $tipoProduc;
	public $ordenVenta;
	public $cantiProduc;
	public $PrecioTotalVenta;
	public $numFact;

	
	function __construct()
	{
		parent::__construct();
	}

	public function registroVent($tipoProduc,$ordenVenta,$cantiProduc,$PrecioTotalVenta,$numFact)
	{

	$sql = "SELECT * FROM venta WHERE id_venta ='$idVenta'";

		$Resul =$this->_bd->query($sql);
		$fila = mysqli_num_rows($Resul);

		if ($fila > 0) {
			echo "<script>
				  alert('La venta ya fue registrada');
				  window.location = '../view/Ffactura.php';
				  </script>";
	    }else{
		
			$sql = "INSERT INTO venta( tipo_producto, orden_venta, cantidad, precio_venta, factura_venta) VALUES ('".$tipoProduc."','".$ordenVenta."','".$cantiProduc."','".$PrecioTotalVenta."','".$numFact."')";

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

				public function listarVenta()
		{

		$sqli = "SELECT * FROM venta ORDER BY id_venta";
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



			public function actualizarventa($id_venta,$tipoProduc,$ordenVenta,$cantiProduc,$PrecioTotalVenta,$numFact)
		{

$sql3 = "UPDATE venta SET id_venta = '$id_venta',tipo_producto = '$tipoProduc',orden_venta = '$ordenVenta',cantidad = '$cantiProduc',precio_venta = '$PrecioTotalVenta',factura_venta = '$numFact' WHERE id_venta = $id_venta";
			$actua =$this->_bd->query($sql3);
			if (!$actua) 
			{
				print "<script>alert(\"No se puede actualizar los datos.\");
				window.location = '../view/FeditarVenta.php';</script>";
			}else
			{
				return $actua;
				print "<script>alert(\"Datos del Detalle se actualizaron\");
				window.location = '../view/index_admin.php';</script>";

				$actua->close();
				$this->_db->close();
		}

		}


			public function eliminarventa()
		{
			$sql14 = "DELETE FROM venta where id_venta ='$id'";
			$elimina =$this->_bd->query($sql4);
			if (!$elimina) 
			{
				print "<script>alert(\"No se puede eliminar los datos.\");
				window.location = '../view/FventaAdmin.php';</script>";
			}else
			{
				return $actua;
				print "<script>alert(\"Venta eliminada\");
				window.location = '../view/index_admin.php';</script>";

				$elimina->close();
				$this->_db->close();
		}
		}	


}





 ?>