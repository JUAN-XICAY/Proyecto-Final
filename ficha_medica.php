<?php 
    include("conexion.php");


    $sql="SELECT * FROM persona p INNER JOIN paciente pac ON p.id = pac.id 
          INNER JOIN ficha_medica f ON p.id = f.id INNER JOIN medico m ON  m.id_medico = f.medico 
          INNER JOIN medicamentos med ON med.id_medicamento = f.medicamentos";
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
                            <h1>Ingresar Ficha</h1>
                            
                                <form action="insertar.php" method="POST">

                                
                                </select>
                              </label>
                                    
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido">
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="Correo">
                                    <input type="text" class="form-control mb-3" name="numerotel" placeholder="Numero Telefono">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion">
                                    <input type="text" class="form-control mb-3" name="genero" placeholder="Genero">
                                    <input type="text" class="form-control mb-3" name="dpi" placeholder="DPI">
                                    <input type="text" class="form-control mb-3" name="nit" placeholder="NIT">
                                    <input type="text" class="form-control mb-3" name="edad" placeholder="Edad">
                                    <input type="text" class="form-control mb-3" name="peso" placeholder="Peso">
                                    <input type="text" class="form-control mb-3" name="altura" placeholder="Altura">
                                    <input type="text" class="form-control mb-3" name="sintomas" placeholder="Sintomas">
                                    <input type="date" class="form-control mb-3" name="fecha_visita" placeholder="Fecha Visita">
                                    <input type="text" class="form-control mb-3" name="examenes" placeholder="Examenes">
                                    <input type="text" class="form-control mb-3" name="resultados" placeholder="Resultados">
                                    <input type="text" class="form-control mb-3" name="diagnostico" placeholder="Diagnostico">
                                    
                                    <input type="text" class="form-control mb-3" name="observaciones" placeholder="Observaciones">
                                    
                                    <label class="block mt-1 text-sm">
                                    <span class="text-gray-700 dark:text-gray-400">
                                      Medico
                                    </span>
                                      <select  name="medico" id="medico" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                      <?php
                                      include("conexion.php");
                                      $consulta='SELECT * FROM medico';
                                      $ejecutar=mysqli_query($conexion,$consulta);
                                      while($row1=mysqli_fetch_array($ejecutar)){
                                        $idmedico=$row1['id_medico'];
                                        $nombremedico=$row1['nombre_medico'];
                                        ?>

                                        <option value="<?php echo $idmedico ?>"><?php echo $nombremedico ?></option>

                                        <?php
                                      }
                                      
                                      ?>
                                      </select>

                                      <label class="block mt-1 text-sm">
                                    <span class="text-gray-700 dark:text-gray-400">
                                      Medicamentos
                                    </span>
                                      <select  name="medicamentos" id="medico" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                      <?php
                                      include("conexion.php");
                                      $consulta='SELECT * FROM medicamentos';
                                      $ejecutar=mysqli_query($conexion,$consulta);
                                      while($row2=mysqli_fetch_array($ejecutar)){
                                        $idmedicamento=$row2['id_medicamento'];
                                        $nombremedicamento=$row2['nombre_medicamento'];
                                        ?>

                                        <option value="<?php echo $idmedicamento ?>"><?php echo $nombremedicamento ?></option>

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
                                        <th>Apellido</th>
                                        <th>Genero</th>
                                        <th>Edad</th>
                                        <th>Fecha Visita</th>
                                        <th>Sintomas</th>
                                        <th>Medico</th>
                                        <th>Examenes</th>
                                        <th>Resultados</th>
                                        <th>Diagnostico</th>
                                        <th>Medicamentos</th>
                                        <th>Observaciones</th>
                                        
                                        
                            

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
                                                <th><?php  echo $row['apellido']?></th>  
                                                <th><?php  echo $row['genero']?></th> 
                                                <th><?php  echo $row['edad']?></th> 
                                                <th><?php  echo $row['fecha_visita']?></th>
                                                <th><?php  echo $row['sintomas']?></th> 
                                                <th><?php  echo $row['nombre_medico']?></th>
                                                <th><?php  echo $row['examenes']?></th> 
                                                <th><?php  echo $row['resultados']?></th> 
                                                <th><?php  echo $row['diagnostico']?></th> 
                                                <th><?php  echo $row['nombre_medicamento']?></th> 
                                                <th><?php  echo $row['observaciones']?></th>
                                                
                                
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="eliminar.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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