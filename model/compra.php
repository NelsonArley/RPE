<?php 

require_once "../config/conexion.php";
require_once "../config/conexionpoo.php";

/**
 * 
 */
class compra extends Conectar
{
	public $id_detalle;
	public $orden_com;



	public function __construct()
	{
		parent::__construct();
	}

	public function registroCompra($orden_com)
	{
		/*$sql = "SELECT * FROM detalle_factura WHERE tipo_producto ='$tipoProduc'";

		$Resul =$this->_bd->query($sql);
		$fila = mysqli_num_rows($Resul);

		if ($fila > 0) {
			echo "<script>
				  alert('La factura ya fue registrada');
				  window.location = '../view/Ffactura.php';
				  </script>";
		}else{*/
		
			$sql = "INSERT INTO compra(id_compra, orden_compra) VALUES ('".$id_compra."','".$orden_com."')";

			$Resul =$this->_bd->query($sql);
			if (!$Resul) 
			{
				print "<script>alert(\"Fallo al ingresar los datos.\");
				window.location = '../view/Fcompra.php';</script>";
			}else
			{
				return $Resul;
				print "<script>alert(\"Datos ingresados\");
				window.location = '../view/index_admin.php';</script>";

				$Resul->close();
				$this->_db->close();
			}
		}
	//}

}


 ?>