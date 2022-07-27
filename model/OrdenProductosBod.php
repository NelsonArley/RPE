<?php 
require_once "../config/conexion.php";
require_once "../config/conexionpoo.php";

/**
 * 
 */
class orden extends Conectar
{
	public $id_orden;
	public $LugarDestino;	
	public $NomProvedor;
	public $CantiProdu1;
	public $tipoProduc;
	public $OrdenCom;
	
	function __construct()
	{
		parent::__construct();
	}

	public function registroOrden($LugarDestino,$NomProvedor,$CantiProdu1,$tipoProduc,$OrdenCom)
	{
	/*$sql = "SELECT * FROM orden WHERE orden_compra ='$OrdenCom'";

		$Resul =$this->_bd->query($sql);
		$fila = mysqli_num_rows($Resul);

		if ($fila > 0) {
			echo "<script>
				  alert('La orden ya fue registrada');
				  window.location = '../view/Ffactura.php';
				  </script>";
	    }else{*/
		
			$sql = "INSERT INTO orden(lugar_destino_orden, nombre_provedor, cantidad_productos, tipo_producto, orden_compra ) VALUES ('".$LugarDestino."','".$NomProvedor."','".$CantiProdu1."','".$tipoProduc."','".$OrdenCom."')";

			$Resul =$this->_bd->query($sql);
			if (!$Resul) 
			{
				print "<script>alert(\"Fallo al ingresar los datos.\");
				window.location = '../view/FordenProducto.php';</script>";
			}else
			{
				return $Resul;
				print "<script>alert(\"Datos ingresados\");
				window.location = '../view/index_admi.php';</script>";

				$Resul->close();
				$this->_db->close();
			}
		//}
	}


			public function listarOrdenP()
		{

		$sqli = "SELECT * FROM orden ORDER BY id_orden";
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

			public function actualizarorden($id_orden,$LugarDestino,$NomProvedor,$CantiProdu1,$tipoProduc,$OrdenCom)
		{

$sql3 = "UPDATE orden SET id_orden = '$id_orden',lugar_destino_orden = '$LugarDestino',nombre_provedor = '$NomProvedor',cantidad_productos = '$CantiProdu1',tipo_producto = '$tipoProduc',orden_compra = '$OrdenCom' WHERE id_orden = $id_orden";
			$actua =$this->_bd->query($sql3);
			if (!$actua) 
			{
				print "<script>alert(\"No se puede actualizar los datos.\");
				window.location = '../view/FeditarordenProduc.php';</script>";
			}else
			{
				return $actua;
				print "<script>alert(\"Datos del Detalle se actualizaron\");
				window.location = '../view/index_admin.php';</script>";

				$actua->close();
				$this->_db->close();
		}

		}



}

 ?>