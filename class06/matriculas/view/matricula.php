<?php

  include('../../connection.php');

  $connection = connect();

  $sql = "SELECT M.ID_MATRICULA,M.ID_ALUMNO, M.ID_CURSO, concat(A.NOMBRES,' ',A.APELLIDO_PATERNO) AS ALUMNO, C.NOMBRE AS CURSO FROM MATRICULA M INNER JOIN ALUMNO A ON M.ID_ALUMNO = A.ID_ALUMNO INNER JOIN CURSO C ON M.ID_CURSO = C.ID_CURSO;";
  $resultado = mysqli_query($connection, $sql);

  disconnect($connection);
  // $count = 0;
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
  <title>Matricula</title>
</head>
<body>
  <div class="container">
    <div class="row mt-5">
      <h1>Matricula</h1>
      <a href="agregar.php" class="">Nueva matricula</a>

      <table class="table mt-4">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Alumno</th>
            <th scope="col">Curso</th>
            <th scope="col">&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          
          <!-- devuelve todas las filas en un array asociativo, numérico, o en ambos. -->
          <?php $count = 0; while($matricula = mysqli_fetch_array($resultado)): ?>
            <tr>
              <th scope="row"><?= $count += 1 ?></th>
              <td><?= $matricula['ALUMNO'] ?></td>
              <td><?= $matricula['CURSO'] ?></td>
              <td>
                <a 
                  href="./modificar.php?idmatricula=<?= $matricula['ID_MATRICULA'].'&idalumno='. $matricula['ID_ALUMNO'].'&idcurso='.$matricula['ID_CURSO'] ?>" 
                  class="btn btn-primary"
                >
                  Editar
                </a>
                <a href="../controller/delete.php?idmatricula=<?= $matricula['ID_MATRICULA'] ?>" class="btn btn-danger">Eliminar</a>
              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>

    </div>
  </div>

</body>
</html>