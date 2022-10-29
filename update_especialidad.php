<?php
include('conexion.php');

if(!empty($_POST["Actualizar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"])) {


    }else{
        echo "campos vacios";
    }

}   
    $id=$_POST['id'];
    $nombre_especialidad=$_POST['nombre_especialidad'];
    $estado_especialidad=$_POST['estado'];
    
    $sql=$conexion->query("update especialidad 
    set nombre_especialidad='$nombre_especialidad', estado='$estado_especialidad'
    where codigo=$id");


    if($sql){
        Header("location: especialidad.php");
    }

    
?>