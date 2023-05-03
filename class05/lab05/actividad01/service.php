<?php 
  # determine la comisión, la bonificación, el sueldo bruto, el descuento y el sueldo neto de un vendedor
  $sueldoBasico = 600;  
  $codigo = $_POST['codigo'];
  $cantHijos = $_POST['cantHijos'];
  $importeMensual = $_POST['importeMensual'];

  $comision = $importeMensual *  0.075;
  $bonificacion = 50 * $cantHijos;
  $sueldoBruto = $sueldoBasico + $comision + $comision;
  $descuento = 0.11;
  $sueldoNeto = $sueldoBruto * $descuento;

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
  <title>Bonificación</title>
</head>
<body>
  
  <div class="container">
    <div class="row mt-4">
      <div class="card">
        <div class="card-header mx-0">
          <h5>Bonificación</h5>
        </div>
        <div class="card-body">
          <p>Comisión es: <?= $comision ?></p>
          <p>Bonificación es: <?= $bonificacion ?></p>
          <p>Sueldo bruto es: <?= $sueldoBruto ?></p>
          <p>Descuento aplicado: <?= $descuento * 100 .'%'?></p>
          <p>Sueldo neto: <?= $sueldoNeto ?></p>

        </div>
      </div>
    </div>
  </div>

</body>
</html>