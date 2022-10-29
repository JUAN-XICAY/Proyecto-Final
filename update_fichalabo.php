<?php
include('conexion.php');


if(!empty($_POST["Actualizar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"])) {


    }else{
        echo "campos vacios";
    }

}   


    $id=$_POST['id'];
    $examenes=$_POST['examenes'];
    $resultados=$_POST['resultados'];


    $sql=$conexion->query("update persona p inner join paciente pac on p.id = pac.id 
    inner join ficha_medica f on p.id = f.id inner join medico m on m.id_medico = f.medico 
    inner join medicamentos med on med.id_medicamento = f.medicamentos 
    set  f.examenes='$examenes', f.resultados='$resultados'
    where p.id=$id");


    if($sql){
        Header("location: ficha_medica_doctor.php");
    }

    
?>