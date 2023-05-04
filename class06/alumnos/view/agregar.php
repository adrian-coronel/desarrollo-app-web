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
  <title>Nuevo Alumno</title>
</head>
<body>

  <div class="container">
    <div class="row mt-5">
      <form action="../controller/create.php" method="POST">
        
        <?php include("_form.php"); ?>
        <input type="submit" 
        class="btn btn-primary" 
        name="enviar" 
        value="Agregar">

      </form>
    </div>
  </div>
  
</body>
</html>