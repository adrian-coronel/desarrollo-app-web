<?php

include('../../connection.php');

  $connection = connect();

  #Obtenemos los valores del formulario
  if(isset($_POST['enviar'])){
    $nombres = $_POST['names'];
    $apellidoPaterno = $_POST['apellidoPaterno'];
    $apellidoMaterno = $_POST['apellidoMaterno'];
  
    $sql = "INSERT INTO ALUMNO(NOMBRES,APELLIDO_PATERNO,APELLIDO_MATERNO) VALUES ('$nombres','$apellidoPaterno','$apellidoMaterno')";
  
    
    $resultado = mysqli_query($connection, $sql);
  }

  disconnect($connection);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

  <!-- Fonts Google -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <title>Nuevo alumno</title>
</head>
<body>
  
  <div class="container">
    <div class="row mt-5">
      <h1>Nuevo alumno</h1>
      <?php 
      if(!$resultado){
        echo 'No se pudo guardar el alumno';
      } else{
        echo 'Alumno guardado correctamente';
      }
      
      ?>
      <a href="../view/alumno.php">Regresar</a>
    </div>
  </div>

</body>
</html>