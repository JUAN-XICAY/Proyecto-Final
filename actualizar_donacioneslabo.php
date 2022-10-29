<?php
    include('conexion.php');

    $id=$_GET['id'];
    
    $sql="SELECT * FROM donaciones WHERE id_donaciones ='$id'";
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
            
            <form action="update_donacioneslabo.php" method="POST">
            
            <input type="hidden" class="form-control mb-3" name="id" placeholder="id" value="<?php echo $row['id_donaciones'] ?>">
            <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre'] ?>">
            <input type="text" class="form-control mb-3" name="cantidad" placeholder="Cantidad" value="<?php echo $row['cantidad'] ?>">
   
            
            


            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            <th><a href="donaciones_doctor.php" class="btn btn-danger">Regresar</a></th> 




            </form>
        </div>
        
    </body>
    </html>
