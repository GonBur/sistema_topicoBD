<?php
$conexion=mysqli_connect("localhost","root","","sistema_topico");
if (!$conexion){
    //echo 'Error al conectar la base datos';
    echo "<script> alert('Error al conectar la base datos') </script>";
}else{
    //echo 'Exito en la conexion';
    echo "<script> alert('Exito en la conexion') </script>";
}

?>