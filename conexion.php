<?
function conectar()
{
	global $con;
	$ret = false;
		$con = mysql_connect("localhost","","");
		if ($con != false)
		{
				mysql_select_db("redim",$con);
				$ret = true;
		}
	return $ret;
}
function desconectar()
{
	global $con;
	mysql_close($con);
}

?>
