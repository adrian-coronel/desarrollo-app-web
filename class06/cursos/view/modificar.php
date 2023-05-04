<?php 

  include('../../connection.php');
  $connection = connect();
  if ($_GET['id']){
    $sql = "SELECT ID_CURSO,NOMBRE, CREDITOS FROM CURSO WHERE ID_CURSO= ". $_GET['id'];
    $resultado = mysqli_query($connection, $sql);

    while ($row = mysqli_fetch_array($resultado)){
      $nombre = $row['NOMBRE'];
      $creditos = $row['CREDITOS'];
    }

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
  <title>Modificar Curso</title>
</head>
<body>

  <div class="container">
    <div class="row mt-5">
      <form class="bg-light px-5 py-4 rounded shadow-sm" action="../controller/update.php" method="POST">
        <div class="form-header mb-4">
          <h4 class="display-4">Editar Curso</h4>
          <hr>
        </div>
        <?php include("_form.php") ?>
        
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
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