<?php

include("conexion.php");

$id=$_GET['id'];

$sql="DELETE FROM donaciones WHERE id_donaciones= $id";
$query=mysqli_query($conexion,$sql);

if($query){
    Header("Location: donaciones.php");

}