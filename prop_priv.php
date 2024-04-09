<?	
include ('conexion.php');
conectar();
?>
<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>REDES DE INMOBILIARIAS DE POSADAS</title>
<style type="text/css">
<!--
.Estilo1 {font-size: 18px}
-->
</style>
</head>

<body bgcolor="#E8E8E8">
<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="5" height="100"><img src="img/encabezado.jpg" width="760" height="100"><br><hr size="5" color="#666666"></td>
  </tr>
  <tr>
    <td height="10" colspan="5"></td>
  </tr>
  <tr>
        <td width="275" height="400" rowspan="2" align="center" valign="top" bgcolor="#999999">
          <p>
		   <blockquote><strong><a href="consultas.php">Ver Consultas</a><br>
		  					<a href="prop_priv.php">Ver Inmuebles</a>		  </strong>      </blockquote>          
	</td>
    <td></td>
    <td width="475" height="400" colspan="3" rowspan="2" align="center" valign="top"><p>Propiedades</p>
      <? if($propiedad=='')
	  {
		$num=$_SESSION["num_inm"];
		$sql ="select cod_inmueble, tipo, condicion, direccion, precio from inmuebles where num_inmobiliariad = $num";		
		$res=mysql_query($sql);
	  ?>
	  <table width="455 border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="113"><div align="center">Tipo</div></td>
        <td width="113"><div align="center">Condici&oacute;n</div></td>
        <td width="113"><div align="center">Direcci&oacute;n</div></td>
        <td width="80"><div align="center">Precio</div></td>
        <td width="33"><div align="center"></div></td>
      </tr>
	  <? while($row=mysql_fetch_row($res))
	  {
	  ?>
      <tr>
        <td width="113"><div align="center"><? echo "$row[1]";?></div></td>
        <td width="113"><div align="center"><? echo "$row[2]";?></div></td>
        <td width="113"><div align="center"><? echo "$row[3]";?></div></td>
        <td width="80"><div align="center">$ <? echo "$row[4]";?></div></td>
        <td width="33"><div align="center"><a href="propiedades.php?propiedad=<? echo"$row[0]";?>">Ver</a></div></td>
      </tr>
	  <?
	  }
	  ?>
    </table>
	<? }
		else 
		{
		$sql ="select *from inmuebles where cod_inmueble=$propiedad and num_inmobiliaria = $num_inm";		
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		?>
		<table width="455" border="0" cellspacing="0" cellpadding="0">
		<tr>
		<td width="150">Tipo</td>
		<td><? echo "$row[11]"; ?></td>
		</tr>
		<tr>
		<td width="150">N&ordm; Dormitorios</td>
		<td><? echo "$row[12]"; ?></td>
		</tr>
		<tr>
		<td width="150">Direcci&oacute;n</td>
		<td><? echo "$row[1]"; ?></td>
		</tr>
		<tr>
		<td width="150">Condici&oacute;n</td>
		<td><? echo "$row[7]"; ?></td>
		</tr>
		<tr>
		<td width="150">Precio</td>
		<td><? echo "$row[2]"; ?></td>
		</tr>
		<tr>
		<td width="150">Superficie Total </td>
		<td><? echo "$row[4]"; ?></td>
		</tr>
		<tr>
		<td width="150">Superficie Cubierta </td>
		<td><? echo "$row[5]"; ?></td>
		</tr>
		<tr>
		<td width="150">Descripci&oacute;n</td>
		<td><? echo "$row[6]"; ?></td>
		</tr>
		<tr>
		<td width="150">Cochera</td>
		<td><? echo "$row[8]"; ?></td>
		</tr>
		<tr>
		<td width="150">Financiamiento</td>
		<td><? echo "$row[9]"; ?></td>
		</tr>
		</table>		
		<?
		}?>
		
	
	
	
	</td>
  </tr>
  <tr>
    <td width="10" height="400"></td>
  </tr>
  
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td height="80" colspan="5" bgcolor="#999999">&nbsp;</td>
  </tr>
</table>

</body>
</html>
