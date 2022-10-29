<?php
include('conexion.php');

if(!empty($_POST["Actualizar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"])) {


    }else{
        echo "campos vacios";
    }

}   
    $id=$_POST['id_medico'];
    $dpi_doctor=$_POST['dpi'];
    $nombre_doctor=$_POST['nombre_medico'];
    $apellido_doctor=$_POST['apellido_medico'];
    $codigo=$_POST['codigo'];
    $sexo=$_POST['sexo'];
    $telefono=$_POST['telefono'];
    $fecha_nacimiento=$_POST['fecha_nacimiento'];
    $correo_doctor=$_POST['correo'];
    $direccion_doctor=$_POST['direccion'];
    $estado_doctor=$_POST['estado_medico'];
    
    $sql=$conexion->query("update medico m inner join especialidad esp on m.codigo = esp.codigo 
    set m.dpi='$dpi_doctor', m.nombre_medico='$nombre_doctor', m.apellido_medico='$apellido_doctor', m.codigo=$codigo, 
    m.sexo='$sexo', m.telefono='$telefono', m.fecha_nacimiento='$fecha_nacimiento', m.correo='$correo_doctor',
    m.direccion='$direccion_doctor', m.estado_medico='$estado_doctor'
    where m.id_medico=$id");


    if($sql){
        Header("location: doctor.php");
    }

    
?>