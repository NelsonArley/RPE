<?php 

require_once "../config/conexion.php";
require_once "../config/conexionpoo.php";

/**
 * 
 */
class admin extends Conectar
{
	public $fk_pk_tdoc;
	public $id_us;
	public $fk_rol;
	public $username;
	public $Password;
	public $nom_us;
	public $ape_us;
	public $dir_us;
	public $Email;
	public $tel_us;
	public $estado_usu;
	public $fk_pregunta_seg;
	public $Rest_Pass;




	public function __construct()
	{
		parent::__construct();
	}

		public function actualizaradmin($fk_pk_tdoc,$id_us,$fk_rol,$username,$Password,$nom_us,$ape_us,$dir_us,$Email,$tel_us,$estado_usu,$fk_pregunta_seg,$Rest_Pass)
		{

			$sql3 = "UPDATE usuario SET fk_pk_tdoc ='$fk_pk_tdoc',id_us ='$id_us',fk_rol ='$username',username ='$username',Password ='$Password',nom_us ='$nom_us',ape_us ='$ape_us',dir_us ='$dir_us',Email ='$Email',tel_us ='$tel_us',estado_usu ='$estado_usu',fk_pregunta_seg ='$fk_pregunta_seg',Rest_Pass ='$Rest_Pass' WHERE id_us = $id_us";
			$actua =$this->_bd->query($sql3);
			if (!$actua) 
			{
				print "<script>alert(\"No se puede actualizar los datos.\");
				window.location = '../view/perfil_usuario_admin.php';</script>";
			}else
			{
				return $actua;
				print "<script>alert(\"Datos del Administrador se actualizaron\");
				window.location = '../view/index_admin.php';</script>";

				$actua->close();
				$this->_db->close();
		}

		}



	


}


 ?>