<?php 

  $number1 = 1;
  $number2 = 1;
  
  if($_POST){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
  }
  
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

  #Conditions
  if($number1 > $number2){
    $firstResult = 'Sum: '. sum($number1, $number2);
    $secondResult = 'Subtract: '. subtract($number1, $number2);
  } else {
    $firstResult = 'Multiply: '. multiply($number1, $number2);
    $secondResult = 'Divide: '. divide($number1, $number2);
  }
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  <title>Exercise three</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-7 col-12 mt-5 mx-auto">
        
        <form id="formLogin" method="POST" action="" onsubmit="return validate();">
          <div class="form-group">
            <label for="number1">Number One:</label>
            <input id="number1" type="number" class="form-control border-0 bg-light shadow-sm" name="number1" required>
          </div>
          
          <div class="form-group mt-3">
            <label for="number2">Number Two:</label>
            <input id="number2" type="number" class="form-control border-0 bg-light shadow-sm" name="number2" required>
          </div>
          
          <div class="form-group mt-4 text-center">
            <button class="btn btn-primary col-8" type="submit">Send</button>
          </div>
          
        </form>

        <?php if($_POST): ?>
          <div class="mt-5">
            <h5>Result: </h5>
            <h6><?= $firstResult ?></h6>
            <h6><?= $secondResult ?></h6>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </div>
      
  <script>
    const inputNumber2 = document.getElementById('number2');

    function validate(){
      if(inputNumber2.value == 0){
        inputNumber2.classList.add('is-invalid');
        return false;
      }
      return true;
    }
  </script>
</body>
</html>