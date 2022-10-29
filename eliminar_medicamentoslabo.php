<?php

include("conexion.php");

$id=$_GET['id'];

$sql="DELETE FROM medicamentos WHERE id_medicamento = $id";
$query=mysqli_query($conexion,$sql);

if($query){
    Header("Location: medicamentos_doctor.php");

}