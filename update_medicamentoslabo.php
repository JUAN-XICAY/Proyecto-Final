<?php
include('conexion.php');

if(!empty($_POST["Actualizar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"])) {


    }else{
        echo "campos vacios";
    }

}   
    $id=$_POST['id_medicamento'];
    $nombre_medicamento=$_POST['nombre_medicamento'];
    $estado_medicamento=$_POST['estado'];
    $fecha_vencimiento=$_POST['fecha_vencimiento'];

    $sql=$conexion->query("update medicamentos 
    set nombre_medicamento='$nombre_medicamento', estado='$estado_medicamento', fecha_vencimiento='$fecha_vencimiento'
    where id_medicamento=$id");


    if($sql){
        Header("location: medicamentos_doctor.php");
    }

    
?>