<?	
include ('conexion.php');
?>
<?php
$msj="";
if(isset($_POST[user]))
{
	if(conectar())
	{
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$sql="select num_inmobiliaria from usuarios where usuario='$user' and pass='$pass'";
		$res=mysql_query($sql);
		if(MYSQL_NUM_ROWS($res)>0)
		{
				$dato=mysql_fetch_array($res);
				session_start();
				$_SESSION['usuario_autentificado'] = TRUE;
				$_SESSION['usuario'] = $dato[cod_usu];//declaramos una variable de tipo sesion
				$_SESSION['nombre'] = $dato[usuario];	
				
				$r=session_id();
				$sql="select num_inmobiliaria from usuarios where usuario='$user' and pass='$pass'";
				$res=mysql_query($sql);
				$row=mysql_fetch_row($res);
				$_SESSION["num_inm"] = $row[3];
				
				session_register($_SESSION);  // registro la vairable en la sesion actual	
			$row=mysql_fetch_row($res);
			$entro="ok";
		}
		else
		{
			$_SESSION['usuario_autentificado'] = FALSE;
			unset ($_SESSION['usuario']);
			echo "<script languaje=javascript> alert (\"Usuario o Contraseña incorrecta\")</script>";		
		}
	}
}

if ($entro =="")
{
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.Estilo1 {
	font-size: 36px;
	font-weight: bold;
}
body {
	background-color: #CCCCCC;
}
-->
</style>
</head>

<body>
<table width="100%" height="362"  border="0" bgcolor="#CCCCCC">
  <tr>
    <td align="center"><form name="form1" method="post" action="privado.php">
      <table width="50%"  border="0">
        <tr>
          <td><div align="center" class="Estilo1">Ingreso</div></td>
        </tr>
       </table>
      <p>&nbsp;</p>
      <table width="38%"  border="1">
      <tr>
        <td width="50%" height="36" align="center"><p> USUARIO</p>          </td>
        <td width="50%" align="center"><input type="text" name="user"></td>
      </tr>
      <tr>
        <td height="43" align="center">CONTRASE&Ntilde;A</td>
        <td align="center"><input type="password" name="pass"></td>
      </tr>
      <tr align="center">
        <td height="36" colspan="2"><input type="submit" name="Submit" value="ENTRAR"></td>
        </tr>
    </table>

  <tr>
      <table width="50%"  border="0">
        <tr>
          <td align="center"><?php echo $msj ?></td>
        </tr>
      </table>
	    </form>  
	</td>
  </tr>
</table>
<?
}
else
{
	echo "<script>window.location.href = \"minimenu.php?id=$r\"</script>";
}
?>
</body>
</html>
