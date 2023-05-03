<?php
  $user = $_POST['user'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $edad = $_POST['edad'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Fonts Google -->
   <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,300&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Bienvenido</title>
</head>
<body>
  
<div class="container">
    <div class="row mt-5">
      <div class="card col-12 col-lg-9 px-0">
        <div class="card-header">
          <h3 style="text-align:center;">Bienvenido</h3>
        </div>
        <div class="card-body">
          <p><?= '¡Hola '. $user .'!'?></p>
          <p><?= 'Tu dirección es '. $address ?></p>
          <p><?= 'Tienes '. $edad .' años y tu correo es '. $email?></p>

        </div>

    </div>
  </div>

</body>
</html>