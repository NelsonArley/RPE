<?php 
require_once "../config/conexion.php";
require_once "../config/conexionpoo.php";

/**
 * 
 */
class ventabod extends Conectar
{

	public $id_venta;
	public $tipoProducbod;
	public $ordenVentabod;
	public $cantiProducbod;
	public $PrecioTotalVentabod;
	public $numFactbod;
	
	function __construct()
	{
		parent::__construct();
	}

	public function registroVent($tipoProducbod,$ordenVentabod,$cantiProducbod,$PrecioTotalVentabod,$numFactbod)
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
		
			$sql = "INSERT INTO ventabod(tipo_productoBod, orden_ventaBod, cantidadBod, precio_ventaBod, factura_ventaBod) VALUES ('".$tipoProducbod."','".$ordenVentabod."','".$cantiProducbod."','".$PrecioTotalVentabod."','".$numFactbod."')";

			$Resul =$this->_bd->query($sql);
			if (!$Resul) 
			{
				print "<script>alert(\"Fallo al ingresar los datos.\");
				window.location = '../view/Ffactura.php';</script>";
			}else
			{
				return $Resul;
				print "<script>alert(\"Datos ingresados\");
				window.location = '../view/index_bodeguero.php';</script>";

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


		public function actualizarventa($id_venta,$tipoProducbod,$ordenVentabod,$cantiProducbod,$PrecioTotalVentabod,$numFactbod)
		{

$sql3 = "UPDATE venta SET id_venta = '$id_venta',tipo_producto = '$tipoProducbod',orden_venta = '$ordenVentabod',cantidad = '$cantiProducbod',precio_venta = '$PrecioTotalVentabod',factura_venta = '$numFactbod' WHERE id_venta = $id_venta";
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
				window.location = '../view/FventaBod.php';</script>";
			}else
			{
				return $actua;
				print "<script>alert(\"Venta eliminada\");
				window.location = '../view/index_bodeguero.php';</script>";

				$elimina->close();
				$this->_db->close();
		}
		}	



}

 ?>