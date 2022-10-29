<?php

include("conexion.php");

$id_persona=$_GET['id'];

$sql="DELETE FROM persona WHERE id = $id_persona";
$query=mysqli_query($conexion,$sql);

if($query){
    Header("Location: ficha_medica_doctor.php");

}




