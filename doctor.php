<?php 
    include("conexion.php");


    $sql="SELECT * FROM medico m INNER JOIN especialidad esp ON m.codigo = esp.codigo";
    $query=mysqli_query($conexion,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Registros</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="image/logo2.ico" alt="" width="50px">
            <label>Cabeza de Algodón</label>
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Inicio.php"><i class="bi bi-caret-right">Inicio</i></a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="ficha_medica.php"><i class="bi bi-file-medical"> Ficha Medica</i></a>
              </li>

            
              
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="doctor.php"><i class="bi bi-person-check"> Medico</i></a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="especialidad.php"><i class="bi bi-heart-pulse"> Especialidad</i></a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="medicamentos.php"><i class="bi bi-capsule"> Medicamentos</i></a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Usuario.php"><i class="bi bi-people"> Usuario</i></a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="donaciones.php"><i class="bi bi-piggy-bank"> Donaciones</i></a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="gastos.php"><i class="bi bi-cash-stack"> Gastos</i></a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="cerrar.php"><i class="bi bi-box-arrow-left"> Cerrar Sesion</i></a>
                
              </li>
              
              
            </ul>
          </div>
        </div>
      </nav>



            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingresar Medico</h1>

                                <form action="insertar_doctor.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="dpi" placeholder="DPI">
                                    <input type="text" class="form-control mb-3" name="nombre_medico" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido">
                                    <input type="text" class="form-control mb-3" name="codigo" placeholder="Codigo"> 
                                    <input type="text" class="form-control mb-3" name="sexo" placeholder="Sexo">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono">
                                    <input type="date" class="form-control mb-3" name="fecha_nacimiento" placeholder="Fecha Nacimiento">
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="Correo">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion">
                                    <input type="text" class="form-control mb-3" name="estado" placeholder="Estado">

                                    
                                    <input type="submit" class="btn btn-primary" value="Guardar">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>No.</th>
                                        <th>DPI</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Codigo</th>
                                        <th>Especialidad</th>
                                        <th>Sexo</th>
                                        <th>No. Telefono</th>
                                        <th>Fecha Nacimiento</th>
                                        <th>Correo</th>
                                        <th>Direccion</th>
                                        <th>Estado</th>
                                        <th>Fecha Creación</th>

                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_medico']?></th>
                                                <th><?php  echo $row['dpi']?></th>
                                                <th><?php  echo $row['nombre_medico']?></th>  
                                                <th><?php  echo $row['apellido_medico']?></th> 
                                                <th><?php  echo $row['codigo']?></th>
                                                <th><?php  echo $row['nombre_especialidad']?></th>
                                                <th><?php  echo $row['sexo']?></th>
                                                <th><?php  echo $row['telefono']?></th>
                                                <th><?php  echo $row['fecha_nacimiento']?></th>
                                                <th><?php  echo $row['correo']?></th> 
                                                <th><?php  echo $row['direccion']?></th>
                                                <th><?php  echo $row['estado_medico']?></th>
                                                <th><?php  echo $row['fecha_creacion']?></th> 

                                                
                                
                                                <th><a href="actualizar_doctor.php?id=<?php echo $row['id_medico'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="eliminar_doctor.php?id=<?php echo $row['id_medico'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>