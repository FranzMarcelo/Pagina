<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>
	#tabla1{
		border-spacing:1px solid #090909;
		border-collapse: collapse;			
	}
	
	body{
		background-color: #FFF846;
		height:auto;
		width:auto;		
	}
	#tabla1 tr td{
		text-align:center;
		padding:5px 10px;
		background:#29B8F4;
		border: 1px solid #020202;
	}
	
</style>
</head>
<body>
<?php

	require ("datos_conexion.php");

	$conexion=mysqli_connect($database_servidor,$usuario,$password);
	if(mysqli_connect_errno()){//si no conecta
	echo "No se encontro al servidor";
	exit();
	}
	mysqli_select_db($conexion,$database_nombre) or die ("no se encuentra la base de datos");//si no encuentra la base de datos
	mysqli_set_charset($conexion,"utf8");//caracteres especiales
	
	$consulta="SELECT * FROM total WHERE SECCION='CANGUROS'"; //selecciona tabla
	$resultado=mysqli_query($conexion, $consulta); //carga tabla
	

	//$fila=mysqli_fetch_row($resultado); 	//carga fila o registro
	echo "<table id='tabla1'> ";
	echo "<tr>"	;
	echo "<td><b>CODIGO</b></td>";
	echo "<td><b>MARCA</b></td>";
	echo "<td><b>TALLA</b></td>";	
	echo "<td><b>COLOR</b></td>";	
	echo "<td><b>MANGA</b></td>";	
	echo "<td><b>CANTIDAD</b></td>";	
	echo "<td><b>PRECIOVENTA</b></td>";
	echo "<td><b>PRECIOCOMPRA</b></td>";
	echo "<td><b>GANANCIA</b></td>";	
	echo "</tr>";
	while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
	echo "<tr>";
	echo "<td>".$fila["CODIGO"]."</td>";
	echo "<td>".$fila["MARCA"]."</td>";
	echo "<td>".$fila["TALLA"]."</td>";	
	echo "<td>".$fila["COLOR"]."</td>";	
	echo "<td>".$fila["MANGA"]."</td>";	
	echo "<td>".$fila["CANTIDAD"]."</td>";	
	echo "<td>".$fila["PRECIOVENTA"]."</td>";
	echo "<td>".$fila["PRECIOCOMPRA"]."</td>";
	echo "<td>";
	echo $fila["PRECIOVENTA"]-$fila["PRECIOCOMPRA"];
	echo "</td>";
	echo "</tr>";
	}
	echo "</table>";
	
	
	
	mysqli_close($conexion);

?>
</body>
</html>