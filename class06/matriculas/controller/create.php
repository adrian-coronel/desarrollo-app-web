<?php

include('../../connection.php');

  $connection = connect();

  #Obtenemos los valores del formulario
  if(isset($_POST['enviar'])){
    $id_alumno = $_POST['idAlumno'];
    $id_curso = $_POST['idCurso'];
    
  
    $sql = "INSERT INTO MATRICULA(ID_ALUMNO, ID_CURSO) VALUES ($id_alumno, $id_curso);";
  
    
    $resultado = mysqli_query($connection, $sql);
  }

  disconnect($connection);
  
?>

<!DOCTYPE html>
<html lang="es">
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
      <h1>Nueva Matricula</h1>
      <?php 
      if(!$resultado){
        echo 'No se pudo guardar el alumno';
      } else{
        echo 'Alumno guardado correctamente';
      }
      
      ?>
      <a href="../view/matricula.php">Regresar</a>
    </div>
  </div>

</body>
</html>