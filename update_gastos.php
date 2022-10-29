<?php
include('conexion.php');

if(!empty($_POST["Actualizar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"])) {


    }else{
        echo "campos vacios";
    }

}   
    $id=$_POST['id'];
    $nombre_gastos=$_POST['nombre'];
    $cantidad_gastos=$_POST['cantidad'];
    


    $sql=$conexion->query("update gastos
    set nombre='$nombre_gastos', cantidad='$cantidad_gastos'
    where id_gastos=$id");



    if($sql){
        Header("location: gastos.php");
    }

    
?>