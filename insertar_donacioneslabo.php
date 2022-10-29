<?php
include("conexion.php");


$nombre_donaciones=$_POST['nombre'];
$cantidad=$_POST['cantidad'];




$insertardonaciones="INSERT INTO donaciones(nombre, cantidad)
VALUES ('$nombre_donaciones', '$cantidad')";
        $ejecutar=mysqli_query($conexion,$insertardonaciones);


        

        if($ejecutar){
            Header("location: donaciones_doctor.php");
        }