<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>
body{
	background:#FFF846;
	
	
}
#tabla2{
	width:100%;
	height:auto;
	border-spacing:0px 0px;
}

#tabla2 tr td{
	width:33.3%;
	padding:0px;
	background:#29B8F4;
	border-radius:10px;
}
#tabla3{
	text-align:center;
	font-size:36px;
	width:640px;
}
#botton{
	width:100%;
	height:150px;
	padding:0px 0px;
	font-size: 42px;
	background:#2D89E9;
	border-width: thick;
	border-radius:10px;

}

#botton:hover,
#MARCA:hover,
#COLOR:hover{
		background:#37F853; 		
	}
	
#MARCA, #COLOR{
	width:320px;
	height:70px;
	font-size:28px;	
	background:#3BF897;
		
}
#busca1{
	width:200px;
	height:50px;
	font-size:28px;	
	background:#D7D7D7;
}
#busca1:hover{
		background:#8C8C8C; 		
	}

</style>

</head>
<?php
	include ("inventario.php");
?>
<body>
<p>&nbsp;</p>
<table id="tabla2">
		<tr >
		 <form action="buscar_poleras.php" method="get">
        <td><input type="submit" name="poleras1" id="botton" value="Buscar Poleras" ></td>
         </form>
         <form action="buscar_camisas.php" method="get">
        <td><input type="submit" name="camisas1" id="botton" value="Buscar Camisas" ></td>
		</form>
        </tr>
         <tr>
              
        <form action="buscar_canguros.php" method="get">
        <td><input type="submit" name="canguros1" id="botton" value="Buscar Canguros" ></td>       	
        </form>
        <form action="buscar_marca.php" method="get">
        <td><input type="submit" name="por_marca" id="botton" value="Por Marca" ></td>       	
        </form>
        </tr>
</table>
		<tr>
        <form action="inventario.php" method="get">
        <td><input type="submit" name="regresar1" id="botton" value="Regresar" ></td>       	
        </form>
        </tr>
         

</body>
</html>