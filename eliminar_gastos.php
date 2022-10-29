<?php

include("conexion.php");

$id=$_GET['id'];

$sql="DELETE FROM gastos WHERE id_gastos = $id";
$query=mysqli_query($conexion,$sql);

if($query){
    Header("Location: gastos.php");

}