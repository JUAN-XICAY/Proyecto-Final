<?php

include("conexion.php");

$id=$_GET['id'];

$sql="DELETE FROM especialidad WHERE codigo = $id";
$query=mysqli_query($conexion,$sql);

if($query){
    Header("Location: especialidad.php");

}