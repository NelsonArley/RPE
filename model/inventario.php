<?php 
require_once "../config/conexion.php";
require_once "../config/conexionpoo.php";

/**
 * 
 */
class inventario extends Conectar
{
	public $id_inventario;
	public $NomProduc1; 
	public $FechaVen;
	public $FechaExp;
	public $LotePro;
	public $PrecioPro;
	public $Cod_Re_Pro;
	public $TipoPro;
	public $Canti_Pro;
	
	
	function __construct()
	{
		parent::__construct();
	}

	public function registroInventario($NomProduc1,$FechaVen,$FechaExp,$LotePro,$PrecioPro,$Cod_Re_Pro,$TipoPro,$Canti_Pro)
	{

	$sql = "SELECT * FROM producto WHERE NomProducto ='$NomProduc'";

		$Resul =$this->_bd->query($sql);
		$fila = mysqli_num_rows($Resul);

		if ($fila > 0) {
			echo "<script>
				  alert('El producto ya fue registrada');
				  window.location = '../view/Finventario.php';
				  </script>";
	    }else{
		
			$sql = "INSERT INTO producto(NomProducto, FechaVencimineto, FechaExpedicion, LoteProducto, PrecioProducto, 	codigo_referencia_producto, tipo_producto, cantidad_producto) VALUES ('".$NomProduc1."','".$FechaVen."','".$FechaExp."','".$LotePro."','".$PrecioPro."','".$Cod_Re_Pro."','".$TipoPro."','".$Canti_Pro."')";

			$Resul =$this->_bd->query($sql);
			if (!$Resul) 
			{
				print "<script>alert(\"Fallo al ingresar los datos.\");
				window.location = '../view/Finventario.php';</script>";
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

		public function listarInventario()
		{

		$sqli = "SELECT * FROM producto ORDER BY Id_Producto";
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



	


	public function actualizarinventario($id_inventario,$NomProduc1,$FechaVen,$FechaExp,$LotePro,$PrecioPro,$Cod_Re_Pro,$TipoPro,$Canti_Pro)
		{

$sql3 = "UPDATE producto SET Id_Producto = '$id_inventario',NomProducto = '$NomProduc1',FechaVencimineto = '$FechaVen',FechaExpedicion = '$FechaExp',LoteProducto = '$LotePro',PrecioProducto = '$PrecioPro', codigo_referencia_producto = '$Cod_Re_Pro',tipo_producto = '$TipoPro',cantidad_producto = '$Canti_Pro' WHERE Id_Producto = $id_inventario";
			$actua =$this->_bd->query($sql3);
			if (!$actua) 
			{
				print "<script>alert(\"No se puede actualizar los datos.\");
				window.location = '../view/FeditarInventario.php';</script>";
			}else
			{
				return $actua;
				print "<script>alert(\"Datos del inventario se actualizaron\");
				window.location = '../view/index_bodeguero.php';</script>";

				$actua->close();
				$this->_db->close();
		}

		}


		public function eliminarinventario()
		{
			$sql14 = "DELETE FROM producto where Id_Producto='$id'";
			$elimina =$this->_bd->query($sql4);
			if (!$elimina) 
			{
				print "<script>alert(\"No se puede eliminar los datos.\");
				window.location = '../view/Finventario.php';</script>";
			}else
			{
				return $actua;
				print "<script>alert(\"Inventario eliminado\");
				window.location = '../view/index_bodeguero.php';</script>";

				$elimina->close();
				$this->_db->close();
		}
		}	





}


 ?>
