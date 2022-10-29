<?php
include('conexion.php');

if(!empty($_POST["Actualizar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"])) {


    }else{
        echo "campos vacios";
    }

}   
    $id=$_POST['id'];
    $nombre_usuario=$_POST['nombre'];
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    $cargo=$_POST['id_cargo'];


    $sql=$conexion->query("update usuarios u inner join cargo carg on u.id_cargo = carg.id_cargo
    set u.nombre='$nombre_usuario', u.usuario='$usuario', u.contraseña='$contraseña', u.id_cargo=$cargo
    where u.id=$id");



    if($sql){
        Header("location: usuario.php");
    }

    
?>