<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Validacion_login</title>
	</head>
	<body>
		<?php
			
			class Login
			{		
				public function Login_user($user, $pass)
				{
					
					session_start();
					
					require_once '../config/database.php';
					$db = database::conectar();
					
					$cont=0;
					
					$sql2="SELECT * FROM usuario WHERE username='$user' AND Password='$pass'";
					$result2 = $db->query($sql2);
					
					while ($row2=$result2->fetch(PDO::FETCH_ASSOC))
					{
						$uusername=stripslashes($row2["username"]); 
						$ppasword=stripslashes($row2["Password"]); 
						$ffoto=stripcslashes($row2["foto_usu"]);
						$cont=$cont+1;
					}
					if ($cont==0)
					{
						
						//print "<script>alert(\"Usuario y/o Password Incorrectas.\");window.location='../index.html';</script>";
						
					}
					
					if ($cont!=0)
					{
						$_SESSION['username']=$uusername;
						$_SESSION['foto_usu']=$ffoto;
						
						$sql1="SELECT fk_rol FROM usuario WHERE username='$uusername'";
						$result1 = $db->query($sql1);
						
						
						while ($row1=$result1->fetch(PDO::FETCH_ASSOC))
						{
							$role=stripslashes($row1["fk_rol"]); 
						}
						
						if (@$role === null)
						{
							print "<script>alert(\"El usuario no tiene asignado Rol\");window.location='../login.php';</script>";
						}
						
						if (@$role === 'Administrador')
						{
							$_SESSION['active']=1;	
							header ('Location: ../view/index_admin.php');	
						}
						
						if (@$role === 'Bodeguero')
						{
							$_SESSION['active']=1;	
							header ('Location: ../view/index_bodeguero.php');	
						}
						
					}// finalizando Conteo	
					
				}// finalizando el m�todo
				
			}//cerrando la clase
			$Nuevo=new Login();
			$Nuevo->Login_user($_POST["user"],$_POST["pass"]);
		?>
	</body>
</html>