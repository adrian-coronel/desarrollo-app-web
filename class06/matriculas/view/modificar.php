<?php 

  include('../../connection.php');
  $connection = connect();
  if ($_GET['idmatricula']){

    # SQL
    $sql = "SELECT M.ID_MATRICULA,M.ID_ALUMNO, M.ID_CURSO, concat(A.NOMBRES,' ',A.APELLIDO_PATERNO) AS ALUMNO, C.NOMBRE AS CURSO FROM MATRICULA M INNER JOIN ALUMNO A ON M.ID_ALUMNO = A.ID_ALUMNO INNER JOIN CURSO C ON M.ID_CURSO = C.ID_CURSO WHERE M.ID_MATRICULA = ". $_GET['idmatricula'];
    $sqlAlumno = "SELECT ID_ALUMNO, concat(NOMBRES,' ',APELLIDO_PATERNO) AS NOMBRES FROM ALUMNO WHERE ID_ALUMNO != ". $_GET['idalumno'];
    $sqlCurso = "SELECT ID_CURSO, NOMBRE FROM CURSO WHERE ID_CURSO != ". $_GET['idcurso'];

    # Resultados
    $resultado = mysqli_query($connection, $sql);
    $resultado2 = mysqli_query($connection, $sqlAlumno);
    $resultado3 = mysqli_query($connection, $sqlCurso);

    
    $matricula = mysqli_fetch_array($resultado);
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
  <title>Modificar Matricula</title>
</head>
<body>

  <div class="container">
    <div class="row mt-5">
      <form class="bg-light px-5 py-4 rounded shadow-sm" action="../controller/update.php" method="POST">
        <div class="form-header mb-4">
          <h4 class="display-4">Editar Matricula</h4>
          <hr>
        </div>
        <input type="hidden" name="idMatricula" value="<?= $matricula['ID_MATRICULA'] ?>">
        <div class="form-group mb-3">
          <label for="exampleCombobox">Alumno</label>
          <select class="form-control w-100" name="idAlumno" id="exampleCombobox">
            <?= '<option value="'.$matricula['ID_ALUMNO'].'">'.$matricula['ALUMNO'].'</option>' ?>
            <?php while($alumno = mysqli_fetch_array($resultado2)): ?>
              <?= '<option value="'.$alumno['ID_ALUMNO'].'">'.$alumno['NOMBRES'].'</option>' ?>
            <?php endwhile; ?>
          </select>
        </div>

        <div class="form-group mb-3">
          <label for="exampleCombobox">Curso</label>
          <select class="form-control w-100" name="idCurso" id="exampleCombobox">
            <?= '<option value="'.$matricula['ID_CURSO'].'">'.$matricula['CURSO'].'</option>' ?>
            <?php while($curso = mysqli_fetch_array($resultado3)): ?>
              <?= '<option value="'.$curso['ID_CURSO'].'">'.$curso['NOMBRE'].'</option>' ?>
            <?php endwhile; ?>
          </select>
        </div>
        
        <input type="submit" 
          class="btn btn-primary my-3 w-100" 
          name="enviar" 
          value="Guardar"
        >

      </form>
    </div>
  </div>
  
</body>
</html>