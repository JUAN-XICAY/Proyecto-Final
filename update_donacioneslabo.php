<?php
include('conexion.php');

if(!empty($_POST["Actualizar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"])) {


    }else{
        echo "campos vacios";
    }

}   
    $id=$_POST['id'];
    $nombre_donaciones=$_POST['nombre'];
    $cantidad=$_POST['cantidad'];
    
    


    $sql=$conexion->query("update donaciones
    set nombre='$nombre_donaciones', cantidad='$cantidad'
    where id_donaciones=$id");



    if($sql){
        Header("location: donaciones_doctor.php");
    }

    
?>