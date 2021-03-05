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
#caseta1,#caseta2,#ambas_casetas,#buscar,#volver{
	width:100%;
	height:150px;
	padding:0px 0px;
	font-size: 42px;
	background:#2D89E9;
	border-width: thick;
	border-radius:10px;

}
#ventana{
	width: 100%;
	height:1000px;	
	border:none;	
}

#tabla tr td #caseta1:hover, 
#tabla tr td #caseta2:hover,
#tabla tr td #ambas_casetas:hover,
#tabla tr td #buscar:hover,
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
	<form  method="post" action="" target="">
      <td align=""><input type="submit" name="caseta1" id="caseta1"  value="Caseta 1"></td>
    </form>
    <form  method="post" action="" target="">
      <td align=""><input type="submit" name="caseta2" id="caseta2"  value="Caseta 2"></td>
    </form>
</tr>
<tr>
	<form method="post" action="" target="">
      <td align=""><input type="submit" name="ambas_casetas" id="ambas_casetas"  value="Ambas Casetas"></td>
    </form>
    <form  method="post" action="">
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
	if(isset($_POST["caseta1"])){
		echo "<h2 align='center'>"."CASETA 1<br>"."</h2>";
		include ("ventas/caseta1.php");	
	}
	if(isset($_POST["caseta2"])){
		echo "<h2 align='center'>"."CASETA 2<br>"."</h2>";
		include ("ventas/caseta2.php");	
	}
	if(isset($_POST["ambas_casetas"])){
		echo "<h2 align='center'>"."CASETA 1<br>"."</h2>";
		include ("ventas/caseta1.php");
		echo "<br>";
		echo "<h2 align='center'>"."CASETA 2<br>"."</h2>";
		include ("ventas/caseta2.php");		
	}
		if(isset($_POST["buscar"])){
		echo "<h2 align='center'>"."BUSCAR <br>"."</h2>";
		include ("ventas/buscar.php");		
	}
?>
</body>
</html>