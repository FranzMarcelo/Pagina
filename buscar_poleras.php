<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php
	include ("buscar.php");
?>
<body>

	
    <p>&nbsp;</p>   

	<table id="tabla3">
	<tr ><td> MARCA </td>
	<td> COLOR </td>
	</tr>
	</table>
    	
	<table >
	<tr>
    <form action"" method="get">
    	<td>	
    	<select name='MARCA' id='MARCA' >
      		<option >HERING BRASILERA</option>
      		<option >HERING PERUANA</option>
      		<option >NIKE</option>
	    </select>
		</td>
        
		<td>
    	<select name='COLOR' id='COLOR' >
      		<option>ROJO</option>
      		<option>AZUL</option>
      		<option>BLANCO</option>
			<option>NEGRO</option>
	    </select>
		</td>
		<td width='250px' align='center'>
    	<input type="submit" name="busca1" id="busca1" value="Buscar">
		</td>
        </form>
	</tr>
	</table>
     <p>&nbsp;</p> 
    <?php
	if(isset($_GET["busca1"])){
		include ("buscar/buscando.php");
	}
	?>

</body>
</html>