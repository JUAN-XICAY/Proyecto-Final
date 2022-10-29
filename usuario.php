<?php 
    include("conexion.php");


    $sql="SELECT * FROM usuarios u INNER JOIN cargo carg ON u.id_cargo = carg.id_cargo";
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
                            <h1>Ingresar Usuario</h1>

                                <form action="insertar_usuario.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="usuario" placeholder="Usuario">
                                    <input type="text" class="form-control mb-3" name="contraseña" placeholder="Contraseña">
                                    

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




                                    
                                    <input type="submit" class="btn btn-primary" value="Guardar">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>No.</th>
                                        <th>Nombre</th>
                                        <th>Usuario</th>
                                        <th>Contraseña</th>
                                        <th>Cargo</th>

                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['usuario']?></th>
                                                <th><?php  echo $row['contraseña']?></th>
                                                <th><?php  echo $row['descripcion']?></th>


                                                
                                
                                                <th><a href="actualizar_usuario.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="eliminar_usuario.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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