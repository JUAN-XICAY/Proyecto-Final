<?php
include("conexion.php");

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$numero_tel=$_POST['numerotel'];
$direccion=$_POST['direccion'];
$genero=$_POST['genero'];
$dpi=$_POST['dpi'];
$nit=$_POST['nit'];
$edad=$_POST['edad'];
$peso=$_POST['peso'];
$altura=$_POST['altura'];


$insertarpersona="INSERT INTO persona(nombre, apellido, correo, numero_tel, direccion, genero, dpi, nit)VALUES ('$nombre', '$apellido', '$correo', '$numero_tel', '$direccion', '$genero', '$dpi', '$nit')";
        $ejecutar=mysqli_query($conexion,$insertarpersona);

        $ultimo_id=mysqli_insert_id($conexion);

        if($insertarpersona==true)
        {

            $insertarpaciente="INSERT INTO paciente(edad, peso, altura, sintomas, id_persona) VALUES ('$edad','$peso','$altura','$sintomas','$ultimo_id')";

            $ejecutar=mysqli_query($conexion,$insertarpaciente);


        if($ejecutar){
            Header("location: ficha_medica.php");
        }
    }