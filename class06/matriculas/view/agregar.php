<?php 

include('../../connection.php');

$connection = connect();

$sqlAlumno = "SELECT ID_ALUMNO, NOMBRES FROM ALUMNO";
$sqlCurso = "SELECT ID_CURSO, NOMBRE FROM CURSO";
$resultado = mysqli_query($connection, $sqlAlumno);
$resultado2 = mysqli_query($connection, $sqlCurso);


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
  <title>Nueva matricula</title>
</head>
<body>

  <div class="container">
    <div class="row mt-5">
      <form class="bg-light px-5 py-4 rounded shadow-sm" action="../controller/create.php" method="POST">
        <div class="form-header mb-4">
          <h4 class="display-4">Nueva Matricula</h4>
          <hr>
        </div>
        <div class="form-group mb-3">
          <label for="exampleCombobox">Alumno</label>
          <select class="form-control w-100" name="idAlumno" id="exampleCombobox">
            <option>Indicar el alumno</option>
            <?php while($alumno = mysqli_fetch_array($resultado)): ?>
              <?= '<option value="'.$alumno['ID_ALUMNO'].'">'.$alumno['NOMBRES'].'</option>' ?>
            <?php endwhile; ?>
          </select>
        </div>

        <div class="form-group mb-3">
          <label for="exampleCombobox">Curso</label>
          <select class="form-control w-100" name="idCurso" id="exampleCombobox">
            <option>Indicar el curso</option>
            <?php while($curso = mysqli_fetch_array($resultado2)): ?>
              <?= '<option value="'.$curso['ID_CURSO'].'">'.$curso['NOMBRE'].'</option>' ?>
            <?php endwhile; ?>
          </select>
        </div>
        <input type="submit" 
        class="btn btn-primary my-3 w-100" 
        name="enviar" 
        value="Agregar">

      </form>
    </div>
  </div>
  
</body>
</html>