<?php
include("conexion.php");


$nombre_medicamento=$_POST['nombre_medicamento'];
$estado_medicamento=$_POST['estado'];
$fecha_vencimiento=$_POST['fecha_vencimiento'];


$insertardoctor="INSERT INTO medicamentos(nombre_medicamento, estado, fecha_vencimiento)
VALUES ('$nombre_medicamento', '$estado_medicamento', '$fecha_vencimiento')";
        $ejecutar=mysqli_query($conexion,$insertardoctor);


        

        if($ejecutar){
            Header("location: medicamentos_doctor.php");
        }