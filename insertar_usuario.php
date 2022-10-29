<?php
include("conexion.php");


$nombre_usuario=$_POST['nombre'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$cargo=$_POST['id_cargo'];


$insertarusuario="INSERT INTO usuarios(nombre, usuario, contraseña, id_cargo)
VALUES ('$nombre_usuario', '$usuario','$contraseña', '$cargo')";
        $ejecutar=mysqli_query($conexion,$insertarusuario);


        

        if($ejecutar){
            Header("location: usuario.php");
        }