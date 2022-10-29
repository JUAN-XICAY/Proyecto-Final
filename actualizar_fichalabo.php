<?php
    include('conexion.php');

    $id=$_GET['id'];
    
    $sql="SELECT * FROM persona p INNER JOIN paciente pac ON p.id = pac.id 
    INNER JOIN ficha_medica f ON p.id = f.id INNER JOIN medico m ON  m.id_medico = f.medico 
    INNER JOIN medicamentos med ON med.id_medicamento = f.medicamentos WHERE p.id='$id'";
    $query=mysqli_query($conexion,$sql);

    $row=mysqli_fetch_array($query);

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
        <div class="container mt-5">

        
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
            
            <form action="update_fichalabo.php" method="POST">
            

            <input type="hidden" class="form-control mb-3" name="id" placeholder="id" value="<?php echo $row['id'] ?>">
            <input type="text" class="form-control mb-3" name="examenes" placeholder="Examenes" value="<?php echo $row['examenes'] ?>">
            <input type="text" class="form-control mb-3" name="resultados" placeholder="Resultados" value="<?php echo $row['resultados'] ?>">
           
                                    

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            <th><a href="ficha_medica_doctor.php" class="btn btn-danger">Regresar</a></th> 




            </form>
        </div>
        
    </body>
    </html>
