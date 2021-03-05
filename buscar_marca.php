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

	<table style="font-size:36px">
	<tr ><td> MARCA </td>
	
	</tr>
	</table>
    	
	<table >
	<tr>
	<form action="" method="get">
    	<td>
    	<select name="MARCA" id="MARCA" >
      		<option>SAN DIEGO</option>
      		<option>ALEMS</option>
            <option>HOLLISTER</option>
      		<option>NIKE</option>
            <option>HERING BRASILERA</option>
      		<option>HERING PERUANA</option>
            <option>PUMA</option>
            <option>ADIDAS</option>
      		<option>ABERCROMBI</option>
            <option>LACOSTE</option>
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

   	include ("buscar/buscando_marca.php");

   }
   ?> 
   

</body>

</html>