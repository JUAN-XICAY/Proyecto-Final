<?php

include("conexion.php");

$id=$_GET['id'];

$sql="DELETE FROM medico WHERE id_medico = $id";
$query=mysqli_query($conexion,$sql);

if($query){
    Header("Location: doctor.php");

}