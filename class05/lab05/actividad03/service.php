<?php 

  $codigoAuto = $_POST['codigo'];
  $dias = $_POST['numeroDias'];

  $automoviles = [
    '23213' => [$name = 'Toyota Corolla', $precio= 154],
    '34533' => [$name = 'Ford Mustang', $precio= 200],
    '42543' => [$name = 'Chevrolet Camaro', $precio= 550],
    '4252343' => [$name = 'Tesla Model Sz ', $precio= 500],
  ];
  
  function auto_search($automoviles, $valueSearch){
    foreach ($automoviles as $codigo => $auto) {
      if($valueSearch == $codigo)
        return $auto;
    }
  }

  $autoSelecionado = auto_search($automoviles, $codigoAuto);
  $auto = $autoSelecionado[0];
  $precioAuto = $autoSelecionado[1];
  
  #descuento y promociones
  $importeBruto = $dias * $precioAuto;
  $importeDelDescuento = ($dias * $precioAuto) * 0.15;
  $importeNeto = $importeBruto - $importeDelDescuento;
  $lapiceros = $dias * 3;
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
  <title>Resultado</title>
</head>
<body>
  
  <div class="container">
    <div class="row mt-4">
      <div class="card">
        <div class="card-header mx-0">
          <h5>Resultado</h5>
        </div>
        <div class="card-body">
          <p><strong>Se a alquilado el auto <?= $auto .' por '. $dias .' días'?> </strong></p>
          <p>Importe del alquiler por: <?= $importeBruto ?></p>
          <p>El importe del descuento es: <?= $importeDelDescuento ?></p>
          <p>Importe neto: <?= $importeNeto ?></p>
          <p>Obsequio: <?= $lapiceros ?> lapiceros</p>
          
        </div>
      </div>
    </div>
  </div>

</body>
</html>