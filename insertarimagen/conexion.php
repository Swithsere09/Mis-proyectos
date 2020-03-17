<?php
   $conexion = new mysqli("localhost","root","","imagen");
    
    if ($conexion)
    {
    	echo "";
    }
     else
     {
     	echo "Conexion fallida";
     }
?>