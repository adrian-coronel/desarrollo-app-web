<?php 

  include('../../connection/connection.php');
  $connect = connect();
  if ($_GET['id_autor']){

    $query = $connect->prepare("SELECT id_autor,nombres,categoria,apellido_paterno,apellido_materno FROM autor WHERE id_autor = ?;");
    $query->bind_param('i',$_GET['id_autor']); # bind_param(typos de dato, value)

    $query->execute();
  
    $resultado = $query->get_result();
    
    $autor = mysqli_fetch_array($resultado);
  }


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
  <title>Modificar Matricula</title>
</head>
<body>

  <div class="container">
    <div class="row mt-5">
      <form class="bg-light px-5 py-4 rounded shadow-sm" action="update.php" method="POST">
        <div class="form-header mb-4">
          <h4 class="display-4">Editar Autor</h4>
          <hr>
        </div>
        <input type="hidden" name="id_autor" value="<?= $autor['id_autor'] ?>">
        <div class="form-group mb-3">
          <label for="nombres">Nombres:</label>
          <input class="form-control" 
            type="text" name="nombres" 
            required maxlength="45"
            value="<?= $autor['nombres'] ?>"
          >
        </div>

        <div class="form-group mb-3">
          <label for="apellido_paterno">Apellido Paterno:</label>
          <input class="form-control" 
            type="text" name="apellido_paterno" 
            required maxlength="45"
            value="<?= $autor['apellido_paterno'] ?>"
          >
        </div>

        <div class="form-group mb-3">
          <label for="apellido_materno">Apellido Materno:</label>
          <input class="form-control" 
            type="text" name="apellido_materno" 
            maxlength="45"
            value="<?= $autor['apellido_materno'] ?>"
          >
        </div>
        
        <div class="form-group mb-3">
          <label for="categoria">Categoría:</label>
          <select required class="form-control w-100" name="categoria" id="exampleCombobox">
            <?= '<option value="'.$autor['categoria'].'">'.$autor['categoria'].'</option>' ?>
            <option value="Cuento">Cuento</option>
            <option value="Terror">Terror</option>
            <option value="Comedia">Comedia</option>
            <option value="Desarrollo-Personal">Desarrollo-Personal</option>
            
        </div>
        
        <input type="submit" 
          class="btn btn-primary my-3 w-100" 
          name="enviar" 
          value="Guardar"
        >
        <a href="alumnos.php" class="btn bg-white shadow-sm  w-100">Regresar</a>

      </form>
    </div>
  </div>
  
</body>
</html>