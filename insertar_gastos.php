<?php
include("conexion.php");


$nombre_gastos=$_POST['nombre'];
$cantidad_gastos=$_POST['cantidad'];




$insertargastos="INSERT INTO gastos(nombre, cantidad)
VALUES ('$nombre_gastos', '$cantidad_gastos')";
        $ejecutar=mysqli_query($conexion,$insertargastos);


        

        if($ejecutar){
            Header("location: gastos.php");
        }