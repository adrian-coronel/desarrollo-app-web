<?php 

  $name = $_POST['name'];
  $day = $_POST['day'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proceso</title>
</head>
<body>

  <h2>DATOS</h2>
  <p>El nombre del usuario es <?= $name ?></p>
  <p>El día elegido es <?= $day ?></p>

  <?php 
  
    $visitas = array();
    $visitas['lunes']= 133;
    $visitas['martes']= 233;
    $visitas['miercoles']= 333;
  
    foreach($visitas as $dia => $item){
      echo $dia .' - '. $item .'<br>';
    }
  
  
  ?>

</body>
</html>