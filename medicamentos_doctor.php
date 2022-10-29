<?php 
    include("conexion.php");


    $sql="SELECT * FROM medicamentos ";
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
                <a class="nav-link active" aria-current="page" href="Inicio_doctor.php"><i class="bi bi-caret-right"> Inicio</i></a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="ficha_medica_doctor.php"><i class="bi bi-file-medical"> Ficha Medica</i></a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="medicamentos_doctor.php"><i class="bi bi-capsule"> Medicamentos</i></a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="donaciones_doctor.php"><i class="bi bi-piggy-bank"> Donaciones</i></a>
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
                            <h1>Ingresar Medicamentos</h1>

                                <form action="insertar_medicamentoslabo.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombre_medicamento" placeholder="Nombre Medicamentos">
                                    <input type="text" class="form-control mb-3" name="estado" placeholder="Estado">
                                    <input type="date" class="form-control mb-3" name="fecha_vencimiento" placeholder="Fecha Vencimiento">
                                    



                                    
                                    <input type="submit" class="btn btn-primary" value="Guardar">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo.</th>
                                        <th>Nombre Medicamento</th>
                                        <th>Estado</th>
                                        <th>Fecha Vencimiento</th>
                                        <th>Fecha Ingreso</th>

                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_medicamento']?></th>
                                                <th><?php  echo $row['nombre_medicamento']?></th>
                                                <th><?php  echo $row['estado']?></th>
                                                <th><?php  echo $row['fecha_vencimiento']?></th>
                                                <th><?php  echo $row['fecha_ingreso']?></th>


                                                
                                
                                                <th><a href="actualizar_medicamentoslabo.php?id=<?php echo $row['id_medicamento'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="eliminar_medicamentoslabo.php?id=<?php echo $row['id_medicamento'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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