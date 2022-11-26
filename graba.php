<?php
include 'conecta.php';
$dni=$_POST["dni"];
$apellidos=$_POST["apellidos"];
$nombres=$_POST["nombres"];

$email=$_POST["email"];
$edad=$_POST["edad"];
$telefono=$_POST["telefono"];
$peso=$_POST["peso"];
$talla=$_POST["talla"];
$presion_arterial=$_POST["presion_arterial"];
$especialidad=$_POST["especialidad"];
$comentario=$_POST["comentario"];


$insertar="INSERT INTO usuario (dni,apellidos,nombres,email,edad,telefono,peso,talla,presion_arterial,especialidad,comentario) VALUES ('$dni','$apellidos','$nombres','$email','$edad','$telefono','$peso','$talla','$presion_arterial','$especialidad','$comentario')";

$resultado=mysqli_query($conexion,$insertar);
if(!$resultado){
    //echo 'Error al registrarse';
    echo "<script> alert('Error al registrarse') </script>";
}else{
    //echo 'Registro ingresado satisfactoriamente';

    echo "<script> alert('Registro ingresado satisfactoriamente') </script>";
}

?>