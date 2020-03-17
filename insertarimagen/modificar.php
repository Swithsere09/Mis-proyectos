<!DOCTYPE html>
<html>
<head>
	<title>Modificar Imagen</title>
</head>
<body>
   <?php
    include("conexion.php");


    $id= $_REQUEST['id'];

    $query = "SELECT * FROM tabla_imagen  WHERE id = '$id'";
    $resultado = $conexion->query($query);
    $row = $resultado->fetch_assoc();
    ?>

      <form action="proceso_modificar.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data">
   	 	<input type="text" name="nombre" value="<?php echo $row['nombre'];?>"/><br/><br/>
      <img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>"/>
   	 	<input type="file" name="imagen"><br><br>
   	 	<input type="submit" name="enviar">
   	 </form>
</body>
</html>