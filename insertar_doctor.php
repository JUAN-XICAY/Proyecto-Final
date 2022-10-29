<?php
include("conexion.php");

$dpi_doctor=$_POST['dpi'];
$nombre_doctor=$_POST['nombre_medico'];
$apellido_doctor=$_POST['apellido_medico'];
$codigo=$_POST['codigo'];
$sexo=$_POST['sexo'];
$telefono=$_POST['telefono'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$correo_doctor=$_POST['correo'];
$direccion_doctor=$_POST['direccion'];
$estado_doctor=$_POST['estado_medico'];


$insertardoctor="INSERT INTO medico(dpi, nombre_medico, apellido_medico, codigo, sexo, telefono, fecha_nacimiento, correo, direccion, estado_medico)
VALUES ('$dpi_doctor', '$nombre_doctor', '$apellido_doctor', $codigo, '$sexo', '$telefono', '$fecha_nacimiento', '$correo_doctor', '$direccion_doctor', '$estado_doctor')";
        $ejecutar=mysqli_query($conexion,$insertardoctor);


        

        if($ejecutar){
            Header("location: doctor.php");
        }