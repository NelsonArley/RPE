<?php 

require_once "../config/conexion.php";
require_once "../config/conexionpoo.php";

/**
 * 
 */
class facturas extends Conectar
{
	public $id_detalle;
	public $tipoProduc;
	public $detalleProduc;
	public $numFactura;


	public function __construct()
	{
		parent::__construct();
	}

	public function registroFac($tipoProduc,$detalleProduc,$numFactura)
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
		
			$sql = "INSERT INTO detalle_factura(id_detalle_factura, tipo_producto, detalle_producto, num_fac) VALUES ('".$id_detalle."','".$tipoProduc."','".$detalleProduc."','".$numFactura."')";

			$Resul =$this->_bd->query($sql);
			if (!$Resul) 
			{
				print "<script>alert(\"Fallo al ingresar los datos.\");
				window.location = '../view/FDetallefactura.php';</script>";
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

				public function listarDetalleFacturas()
		{

		$sqli = "SELECT * FROM detalle_factura ORDER BY id_detalle_factura";
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


			public function actualizardetallefactura($id_detalle,$tipoProduc,$detalleProduc,$numFactura)
		{

$sql3 = "UPDATE detalle_factura SET id_detalle_factura = '$id_detalle',tipo_producto = '$tipoProduc',detalle_producto = '$detalleProduc',num_fac = '$numFactura' WHERE id_detalle_factura = $id_detalle";
			$actua =$this->_bd->query($sql3);
			if (!$actua) 
			{
				print "<script>alert(\"No se puede actualizar los datos.\");
				window.location = '../view/FeditarDetalleF.php';</script>";
			}else
			{
				return $actua;
				print "<script>alert(\"Datos del Detalle se actualizaron\");
				window.location = '../view/index_admin.php';</script>";

				$actua->close();
				$this->_db->close();
		}

		}

		public function eliminardetalle()
		{
			$sql14 = "DELETE FROM detalle_factura where id_detalle_factura  = '$id'";
			$elimina =$this->_bd->query($sql4);
			if (!$elimina) 
			{
				print "<script>alert(\"No se puede eliminar los datos.\");
				window.location = '../view/FDetallefactura.php';</script>";
			}else
			{
				return $actua;
				print "<script>alert(\"Detalle eliminado\");
				window.location = '../view/index_admin.php';</script>";

				$elimina->close();
				$this->_db->close();
		}
		}	



}


 ?>