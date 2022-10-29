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
$sintomas=$_POST['sintomas'];
$fecha_visita=$_POST['fecha_visita'];
$medico=$_POST['medico'];
$examenes=$_POST['examenes'];
$resultados=$_POST['resultados'];
$diagnostico=$_POST['diagnostico'];
$medicamentos=$_POST['medicamentos'];
$observaciones=$_POST['observaciones'];

$insertarpersona="INSERT INTO persona(nombre, apellido, correo, numero_tel, direccion, genero, dpi, nit)VALUES ('$nombre', '$apellido', '$correo', '$numero_tel', '$direccion', '$genero', '$dpi', '$nit')";
        $ejecutar=mysqli_query($conexion,$insertarpersona);

        $ultimo_id=mysqli_insert_id($conexion);

        if($insertarpersona==true)
        {

            $insertarpaciente="INSERT INTO paciente(edad, peso, altura, sintomas, id_persona) VALUES ('$edad','$peso','$altura','$sintomas','$ultimo_id')";

            $ejecutar=mysqli_query($conexion,$insertarpaciente);


        if($insertarpaciente==true){


            $insertarficha="INSERT INTO ficha_medica(fecha_visita, medico, examenes, resultados, diagnostico, medicamentos, observaciones, id_persona) VALUES ('$fecha_visita',$medico,'$examenes','$resultados','$diagnostico',$medicamentos,'$observaciones','$ultimo_id')";
            $ejecutar=mysqli_query($conexion,$insertarficha);

        }

        if($ejecutar){
            Header("location: ficha_medica.php");
        }
    }