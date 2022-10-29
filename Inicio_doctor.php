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


      <i class="bi bi-card-checklist"> Total Pacientes</i>
      

<?php
                  
$db_host="localhost"; 
$db_user="root";    
$db_password="";    
$db_name="cabeza_algodon";    
try
{
    $db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
    $e->getMessage();
}
    $sql = "SELECT COUNT(*) total FROM persona";
    $result = $db->query($sql);
    $total = $result->fetchColumn();
    ?>
    <?php echo  $total; ?>
    <br></br>

    
    
    <i class="bi bi-person-check-fill"> Total Medicos</i>

    <?php
    $db_host="localhost"; 
    $db_user="root";    
    $db_password="";    
    $db_name="cabeza_algodon";    
    try
    {
        $db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOEXCEPTION $e)
    {
        $e->getMessage();
    }
    $sql = "SELECT COUNT(*) total FROM medico";
    $result = $db->query($sql); 
    $total = $result->fetchColumn();
    ?>
   <?php echo  $total; ?>
   <br></br>
        
        

            
        <i class="bi bi-capsule"> Total Medicamentos</i>
        <?php
        $db_host="localhost"; 
        $db_user="root";    
        $db_password="";    
        $db_name="cabeza_algodon";    
        try
        {
            $db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOEXCEPTION $e)
        {
            $e->getMessage();
        }
        $sql = "SELECT COUNT(*) total FROM medicamentos WHERE estado='1'";
        $result = $db->query($sql);
        $total = $result->fetchColumn();
        ?>
                        <?php echo  $total; ?>
                        <br></br>
                      

              
              
              <i class="bi bi-piggy-bank"> Total de Donaciones Q. </i>
              <?php
              $db_host="localhost"; 
              $db_user="root";    
              $db_password="";    
              $db_name="cabeza_algodon";    
              try
              {
                  $db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
                  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              }
              catch(PDOEXCEPTION $e)
              {
                  $e->getMessage();
              }
              $sql = "SELECT SUM(cantidad) total FROM donaciones";
              $result = $db->query($sql);
              $total = $result->fetchColumn();
              ?>
                              <?php echo  $total; ?><a>.00</a>
                              <br></br>


            


            
    </body>
</html>

