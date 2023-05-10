<?php
  include('../../connection/connection.php');

  $connect = connect();
  
  $query = $connect->prepare("SELECT id_autor,nombres,categoria,apellido_paterno,apellido_materno FROM autor;");
  $query->execute();

  $resultado = $query->get_result();

  disconnect($connect);

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
<title>CEDITEC - Autores</title>
</head>
<body>
<div class="container">
  <div class="row mt-5">
    <h1>Autores</h1>
    <a href="agregar.html" class="">Nuevo autor</a>

    <table class="table mt-4">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombres</th>
          <th scope="col">Apellido Paterno</th>
          <th scope="col">Apellido Materno</th>
          <th scope="col">Categoria</th>
          <th scope="col">&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        
        <!-- devuelve todas las filas en un array asociativo, numérico, o en ambos. -->
        <?php $count = 0; while($autor = mysqli_fetch_array($resultado)): ?>
          <tr>
            <th scope="row"><?= $count += 1 ?></th>
            <td><?= $autor['nombres'] ?></td>
            <td><?= $autor['apellido_paterno'] ?></td>
            <td><?= $autor['apellido_materno'] ?></td>
            <td><?= $autor['categoria'] ?></td>
            <td>
              <a href="modificar.php?id_autor=<?= $autor['id_autor'] ?>" class="btn btn-primary">Editar</a>
              <a href="delete.php?id_autor=<?= $autor['id_autor'] ?>" class="btn btn-danger">Eliminar</a>
            </td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>

  </div>
</div>

</body>
</html>