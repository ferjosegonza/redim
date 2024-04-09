<?	
include ('conexion.php');
conectar();
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
          <blockquote><strong>
			<a href="index.php">Inicio</a> <br>
			<a href="buscar.php">Buscar</a><br>
			<a href="propiedades.php">Propiedades</a><br>
			Ofertas:<a href="oferta_todo.php"> Todo</a><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="oferta_casa.php">Casas</a><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="oferta_depto.php">Departamentos</a>			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="oferta_terreno.php">Terrenos</a><br>
</strong>          </blockquote>          

       <img src="img/espacio170x120.gif" width="160" height="120"></p>
          <p>&nbsp;            </p>
       <p><img src="img/espacio170x120.gif" width="160" height="120">      </p></td>
    <td></td>
    <td width="475" height="400" colspan="3" rowspan="2" align="center" valign="top"><p>Busqueda</p>
      <form name="form1" method="post" action="lista.php">
        <table width="376" border="1">
          <tr align="center" valign="middle">
            <td colspan="3" alig="center"> Ingrese sus preferencias</td>
          </tr>
          <tr>
            <td width="102">Tipo</td>
            <td width="125">
					<select name= "tipo">
						<option value="casa">Casa</option>
						<option value="departamento">Depto</option>
						<option value="terreno">Terreno</option>
					</select></td>
            <td width="127" rowspan="6">&nbsp;</td>
          </tr>
          <tr>
            <td>Condicion</td>
            <td>
				<select name ="condicion">
					<option value="alquiler">Alquiler</option>
					<option value="venta">Venta</option>
				</select>
			</td>
          </tr>
          <tr>
            <td>Precio</td>
            <td>
				<select name="precio">
					<option value="4">menos de 10.000</option>
					<option value="1">10.000 - 20.000</option>
					<option value="2">20.000 - 30.000</option>
					<option value="3">mas de 30.000</option>					
				</select>
			</td>
          </tr>
          <tr>
            <td>N&ordm; dormitorios</td>
            <td>
				<select name="num_dorm">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3 o mas</option>					
				</select>
			</td>
          </tr>
          <tr>
            <td>Cochera</td>
            <td>
				<select name="cochera">
					<option value="si">si</option>
					<option value="no">no</option>
				</select>
			</td>
          </tr>
          <tr>
            <td>Oferta</td>
            <td>				
				<select name="oferta">
					<option value="si">si</option>
					<option value="no">no</option>
				</select>
			</td>
          </tr>
          <tr>
            <td colspan="3" align="center"><input type="submit" name ="buscar" value="buscar"></td>
          </tr>
        </table>
      </form>
    <p>&nbsp;</p></td>
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
