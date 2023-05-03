<?php 
  $number1 = $_POST['number1'];
  $number2 = $_POST['number2'];
  $operation = $_POST['operation'];

  function sum($number1,$number2){
    return $number1 + $number2;
  }
  function subtract($number1,$number2){
    return $number1 - $number2;
  }
  function multiply($number1,$number2){
    return $number1 * $number2;
  }
  function divide($number1,$number2){
    return $number1 / $number2;
  }

  switch($operation){
    case 'sum':
      $result = sum($number1, $number2);
      break;
    case 'subtract':
      $result = subtract($number1, $number2);
      break;
    case 'multiply':
      $result = multiply($number1, $number2);
      break;
    case 'divide':
      $result = divide($number1, $number2);
      break;
    default:
      $result = "Operación no definida";
  }
?>
  
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
</head>
<body>
  <h3>El resultado es: <?= $result ?></h3>
</body>
</html>
