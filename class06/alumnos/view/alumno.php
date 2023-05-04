<?php

  include('../../connection.php');

  $connection = connect();

  $sql = 'SELECT id_alumno,nombres,apellido_paterno,apellido_materno FROM alumno';
  $resultado = mysqli_query($connection, $sql);

  disconnect($connection);
  $count = 0;
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
  <title>Alumnos</title>
</head>
<body>
  <div class="container">
    <div class="row mt-5">
      <h1>Alumnos</h1>
      <a href="agregar.php">Nuevo alumno</a>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          
          <!-- devuelve todas las filas en un array asociativo, numérico, o en ambos. -->
          <?php while($alumno = mysqli_fetch_array($resultado)): ?>
            <tr>
              <th scope="row"><?= $count += 1 ?></th>
              <td><?= $alumno['nombres'] ?></td>
              <td><?= $alumno['apellido_paterno'] ?></td>
              <td><?= $alumno['apellido_materno'] ?></td>
              <td>
                <a href="./modificar.php?id=<?= $alumno['id_alumno'] ?>" class="btn btn-primary">Editar</a>
                <a href="../controller/delete.php?id=<?= $alumno['id_alumno'] ?>" class="btn btn-danger">Eliminar</a>
              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>

    </div>
  </div>

</body>
</html>