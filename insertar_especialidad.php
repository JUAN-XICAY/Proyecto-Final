<?php
include("conexion.php");


$nombre_especialidad=$_POST['nombre_especialidad'];
$estado_especialidad=$_POST['estado'];


$insertardoctor="INSERT INTO especialidad(nombre_especialidad, estado)
VALUES ('$nombre_especialidad', '$estado_especialidad')";
        $ejecutar=mysqli_query($conexion,$insertardoctor);


        

        if($ejecutar){
            Header("location: especialidad.php");
        }