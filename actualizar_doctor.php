<?php
    include('conexion.php');

    $id=$_GET['id'];
    
    $sql="SELECT * FROM medico m INNER JOIN especialidad esp ON m.codigo = esp.codigo WHERE m.id_medico='$id'";
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
            
            <form action="update_doctor.php" method="POST">
            

            <input type="hidden" class="form-control mb-3" name="id_medico" placeholder="id" value="<?php echo $row['id_medico'] ?>">
            <input type="text" class="form-control mb-3" name="dpi" placeholder="DPI" value="<?php echo $row['dpi'] ?>">
            <input type="text" class="form-control mb-3" name="nombre_medico" placeholder="Nombre" value="<?php echo $row['nombre_medico'] ?>">
            <input type="text" class="form-control mb-3" name="apellido_medico" placeholder="Apellido" value="<?php echo $row['apellido_medico'] ?>">
            <input type="text" class="form-control mb-3" name="codigo" placeholder="Codigo" value="<?php echo $row['codigo'] ?>">
            <input type="text" class="form-control mb-3" name="sexo" placeholder="Sexo" value="<?php echo $row['sexo'] ?>">
            <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono" value="<?php echo $row['telefono'] ?>">
            <input type="date" class="form-control mb-3" name="fecha_nacimiento" placeholder="Fecha_Nacimiento" value="<?php echo $row['fecha_nacimiento'] ?>">
            <input type="text" class="form-control mb-3" name="correo" placeholder="Correo" value="<?php echo $row['correo'] ?>">
            <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion" value="<?php echo $row['direccion'] ?>">
            <input type="text" class="form-control mb-3" name="estado_medico" placeholder="Estado" value="<?php echo $row['estado_medico'] ?>">

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            <th><a href="doctor.php" class="btn btn-danger">Regresar</a></th> 




            </form>
        </div>
        
    </body>
    </html>
