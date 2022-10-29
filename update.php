<?php
include('conexion.php');


if(!empty($_POST["Actualizar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"])) {


    }else{
        echo "campos vacios";
    }

}   


    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $correo=$_POST['correo'];
    $numero_tel=$_POST['numero_tel'];
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

    $sql=$conexion->query("update persona p inner join paciente pac on p.id = pac.id 
    inner join ficha_medica f on p.id = f.id inner join medico m on m.id_medico = f.medico 
    inner join medicamentos med on med.id_medicamento = f.medicamentos 
    set p.nombre='$nombre', p.apellido='$apellido', p.correo='$correo', p.numero_tel='$numero_tel', p.direccion='$direccion', p.genero='$genero', p.dpi='$dpi', p.nit='$nit',
    pac.edad='$edad', pac.peso='$peso', pac.altura='$altura', pac.sintomas='$sintomas',
    f.fecha_visita='$fecha_visita', f.medico=$medico, f.examenes='$examenes', f.resultados='$resultados', f.diagnostico='$diagnostico', f.medicamentos=$medicamentos, f.observaciones='$observaciones'
    where p.id=$id");


    if($sql){
        Header("location: ficha_medica.php");
    }

    
?>