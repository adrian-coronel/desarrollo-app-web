<?php 
  $codigoGaseosa = $_POST['codigo'];
  $cantidad = $_POST['cantidad'];
  $gaseosasDeTresLitros = [
    [$codigo = 34533, $name= "coca-cola", $precio= 25.5, $medida= '3L'],
    [$codigo = 23213, $name= "inca-kola", $precio= 17.5, $medida= '3L'],
    [$codigo = 42543, $name= "guarana", $precio= 14.8, $medida= '3L'],
  ];

  #descuentos
  $gaseosaEscogida = [];
  foreach($gaseosasDeTresLitros as $gaseosa){
    if($codigoGaseosa == $gaseosa[0]){
      $gaseosaEscogida = $gaseosa;
    }
    
  }
  $precioActual = $gaseosaEscogida[2] - ($gaseosaEscogida[2] * 0.05);
  $importe = $precioActual * $cantidad;
  $importeDescuento = $importe * 0.07;
  $importeAPagar= $importe - ($importe * 0.07);
  $caramelosPorGaseosa = $cantidad * 2;
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
          <h5>Información</h5>
        </div>
        <div class="card-body">
          <p><?= 'Precio antiguo: '. $gaseosa[2] .' | precio actual: '. $precioActual ?></p>
          <p>Importe de la compra: <?= $importe ?></p>
          <p>Importe del descuento: <?= $importeDescuento ?></p>
          <p>Importe a pagar: <?= $importeAPagar?></p>
          <p>Obsequio: <?= $caramelosPorGaseosa ?> caramelos</p>
          
        </div>
      </div>
    </div>
  </div>

</body>
</html>