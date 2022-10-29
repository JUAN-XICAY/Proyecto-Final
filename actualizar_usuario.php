<?php
    include('conexion.php');

    $id=$_GET['id'];
    
    $sql="SELECT * FROM usuarios u INNER JOIN cargo carg ON u.id_cargo = carg.id_cargo WHERE u.id ='$id'";
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
            
            <form action="update_usuario.php" method="POST">
            
            <input type="hidden" class="form-control mb-3" name="id" placeholder="id" value="<?php echo $row['id'] ?>">
            <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre'] ?>">
            <input type="text" class="form-control mb-3" name="usuario" placeholder="Usuario" value="<?php echo $row['usuario'] ?>">
            <input type="text" class="form-control mb-3" name="contraseña" placeholder="contraseña" value="<?php echo $row['contraseña'] ?>">
            
            <label class="block mt-1 text-sm">
            <span class="text-gray-700 dark:text-gray-400">
             Medico
            </span>
            <select  name="id_cargo" id="id_cargo" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
            <?php
                    include("conexion.php");
                    $consulta='SELECT * FROM cargo';
                    $ejecutar=mysqli_query($conexion,$consulta);
                    while($row1=mysqli_fetch_array($ejecutar)){
                    $idcargo=$row1['id_cargo'];
                    $descripcion=$row1['descripcion'];
                    ?>

                 <option value="<?php echo $idcargo ?>"><?php echo $descripcion ?></option>

            <?php
            }
            ?>
            </select>


            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            <th><a href="usuario.php" class="btn btn-danger">Regresar</a></th> 




            </form>
        </div>
        
    </body>
    </html>
