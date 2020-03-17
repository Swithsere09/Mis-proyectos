<!DOCTYPE html>
<html>
<head>
	<title>Mostrar Imagenes</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
   <table>
   	  <thead>
   	  	 <th colspan="5"> <a href="index.html">Nuevo</th>
   	  	 <tr>
   	  		<th> Id </th>
   	  		<th> Nombre </th>
   	  		<th> Imagen </th>
   	  		<th colspan="2"> Operaciones </th>
   	  	</tr>
   	  </thead>

   	  <tbody>
   	  	 <?php
	   	  	  include("conexion.php");

	   	  	  $query = "SELECT * FROM tabla_imagen";
	   	  	  $resultado = $conexion->query($query);
	   	  	  while ($row = $resultado->fetch_assoc()) {
   	  	 ?>
   	  	       <tr>
   	  	       	 <td> <?php echo $row['id']; ?> </td>
   	  	       	 <td> <?php echo $row['nombre']; ?> </td>
   	  	       	 <td> <img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>"/></td>
                   <th><a href="modificar.php?id=<?php echo $row['id'];?>">Modificar</th>
   	  	       	 <th><a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</th>
   	  	       	 
   	  	      </tr>

   	  	      <?php 
   	  	  }
   	  	 		?>
   	  </tbody>
   </table>
</body>
</html>