<?php
  include('../../connection/connection.php');

  $connect = connect();
  
  $query = $connect->prepare("SELECT l.id_libro,concat(a.nombres,' ',a.apellido_paterno) as nombre_autor, l.titulo, l.especialidad, l.anio, l.editorial, l.url, l.url_avatar FROM libro l INNER JOIN autor a ON a.id_autor = l.id_autor ;");
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
<title>CEDITEC - Libros</title>
</head>
<body>
<div class="container">
  <div class="row mt-5 mx-auto">
    <h1>Libros</h1>
    <a href="agregar.html" class="mb-5">Nuevo libro</a>
    
    
    <?php $count = 0; while($libro = mysqli_fetch_array($resultado)): ?>
      <div class="card col-3 col-md-4 col-sm-6 py-3" style="width: 15rem;">
        <img class="card-img-top" src="<?= $libro['url_avatar']?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><?= $libro['titulo']?></h5>
          <p class="card-text">Autor: <?= $libro['nombre_autor'] ?></p>
          <p class="card-text">Año: <?= $libro['anio'] ?></p>
          <p class="card-text">Editorial: <?= $libro['editorial'] ?></p>
          <a href="<?= $libro['url'] ?>" class="btn btn-primary">Comprar</a>
        </div>
      </div>   
    <?php endwhile; ?>
      

  </div>
</div>

</body>
</html>