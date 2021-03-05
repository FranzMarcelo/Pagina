<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Inventario</title>
<style>

h1{
	text-align:center;
	color:#00F;
	text-decoration:underline;
	width:100%;
	margin:auto;
	font-size:46px;
	
}


body{
	background-color: #FFF846;

}

#tabla{
	width:100%;
	height:auto;
	border-spacing : 0 0;
}
#tabla tr td,
#regresar{
	width:50%;
	padding:0px;
	background:#29B8F4;
	border-radius:10px;
}
#registro_camisas,#registro_canguros,#registro_poleras,#buscar,#volver{
	width:100%;
	height:150px;
	padding:0px 0px;
	font-size: 42px;
	background:#2D89E9;
	border-width: thick;
	border-radius:10px;

}
#registro_camisas:hover, 
#registro_poleras:hover,
#registro_canguros:hover,
#buscar:hover,
#volver:hover{
		background: #1FB4F3; 		
	}
#regresar{
	width:100%;
}

</style>
</head>
<body>
<p>&nbsp;</p>
<h1>Inventario</h1>
<p>&nbsp;</p>

<table id="tabla" >
<tr>
	<form  method="get" action="" target="">
      <td align=""><input type="submit" name="registro_camisas" id="registro_camisas"  value="Camisas"></td>
    </form>
    <form  method="get" action="" target="">
      <td align=""><input type="submit" name="registro_canguros" id="registro_canguros"  value="Canguros"></td>
    </form>
</tr>
<tr>
	<form method="get" action="" target="">
      <td align=""><input type="submit" name="registro_poleras" id="registro_poleras"  value="Poleras"></td>
    </form>
    <form  method="get" action="buscar.php">
      <td align=""><input type="submit" name="buscar" id="buscar"  value="Buscar"></td>
    </form>
</tr>

</table>
<tr>
    <form  method="post" action="index.php">
      <td id="regresar"><input type="submit" name="volver" id="volver"  value="Regresar"></td>
    </form>
</tr>
<td>&nbsp;</td>
<?php
	if(isset($_GET["registro_poleras"])){
		include ("inventario/registro_poleras.php");	
	}
	if(isset($_GET["registro_camisas"])){
		include ("inventario/registro_camisas.php");		
	}
		if(isset($_GET["registro_canguros"])){
		include ("inventario/registro_canguros.php");		
	}

?>
</body>
</html>