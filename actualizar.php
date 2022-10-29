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
            
            <form action="update.php" method="POST">
            

            <input type="hidden" class="form-control mb-3" name="id" placeholder="id" value="<?php echo $row['id'] ?>">
            <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre'] ?>">
            <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido" value="<?php echo $row['apellido'] ?>">
            <input type="text" class="form-control mb-3" name="correo" placeholder="Correo" value="<?php echo $row['correo'] ?>">
            <input type="text" class="form-control mb-3" name="numero_tel" placeholder="No. Telefono" value="<?php echo $row['numero_tel'] ?>">
            <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion" value="<?php echo $row['direccion'] ?>">
            <input type="text" class="form-control mb-3" name="genero" placeholder="Genero" value="<?php echo $row['genero'] ?>">
            <input type="text" class="form-control mb-3" name="dpi" placeholder="DPI" value="<?php echo $row['dpi'] ?>">
            <input type="text" class="form-control mb-3" name="nit" placeholder="NIT" value="<?php echo $row['nit'] ?>">
            <input type="text" class="form-control mb-3" name="edad" placeholder="Edad" value="<?php echo $row['edad'] ?>">
            <input type="text" class="form-control mb-3" name="peso" placeholder="Peso" value="<?php echo $row['peso'] ?>">
            <input type="text" class="form-control mb-3" name="altura" placeholder="Altura" value="<?php echo $row['altura'] ?>">
            <input type="text" class="form-control mb-3" name="sintomas" placeholder="Sintomas" value="<?php echo $row['sintomas'] ?>">
            <input type="date" class="form-control mb-3" name="fecha_visita" placeholder="Fecha Visita" value="<?php echo $row['fecha_visita'] ?>">
            <input type="text" class="form-control mb-3" name="examenes" placeholder="Examenes" value="<?php echo $row['examenes'] ?>">
            <input type="text" class="form-control mb-3" name="resultados" placeholder="Resultados" value="<?php echo $row['resultados'] ?>">
            <input type="text" class="form-control mb-3" name="diagnostico" placeholder="Diagnostico" value="<?php echo $row['diagnostico'] ?>">
            <input type="text" class="form-control mb-3" name="observaciones" placeholder="Observaciones" value="<?php echo $row['observaciones'] ?>">

            <label class="block mt-1 text-sm">
                                    <span class="text-gray-700 dark:text-gray-400">
                                      Medico
                                    </span>
                                      <select  name="medico" id="medico" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                      <?php
                                      include("conexion.php");
                                      $consulta='SELECT * FROM medico';
                                      $ejecutar2=mysqli_query($conexion,$consulta);
                                      while($row3=mysqli_fetch_array($ejecutar2)){
                                        $idmedico=$row3['id_medico'];
                                        $nombremedico=$row3['nombre_medico'];
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
                                      <select  name="medicamentos" id="Medicamentos" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                      <?php
                                      include("conexion.php");
                                      $consulta='SELECT * FROM medicamentos';
                                      $ejecutar3=mysqli_query($conexion,$consulta);
                                      while($row4=mysqli_fetch_array($ejecutar3)){
                                        $idmedicamento=$row4['id_medicamento'];
                                        $nombremedicamento=$row4['nombre_medicamento'];
                                        ?>

                                        <option value="<?php echo $idmedicamento ?>"><?php echo $nombremedicamento ?></option>

                                        <?php
                                      }
                                      
                                      ?>
                                      </select>  <br></br>
           
                                    

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            <th><a href="ficha_medica.php" class="btn btn-danger">Regresar</a></th> 




            </form>
        </div>
        
    </body>
    </html>
