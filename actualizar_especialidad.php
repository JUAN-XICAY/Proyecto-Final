<?php
    include('conexion.php');

    $id=$_GET['id'];
    
    $sql="SELECT * FROM especialidad WHERE codigo='$id'";
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
            
            <form action="update_especialidad.php" method="POST">
            
            <input type="text" class="form-control mb-3" name="id" placeholder="id" value="<?php echo $row['codigo'] ?>">
            <input type="text" class="form-control mb-3" name="nombre_especialidad" placeholder="Nombre Especialidad" value="<?php echo $row['nombre_especialidad'] ?>">
            <input type="text" class="form-control mb-3" name="estado" placeholder="Estado" value="<?php echo $row['estado'] ?>">
            

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            <th><a href="especialidad.php" class="btn btn-danger">Regresar</a></th> 




            </form>
        </div>
        
    </body>
    </html>
