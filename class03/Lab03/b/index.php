<?php 

  $number1 = $_GET['number1'];
  $number2 = $_GET['number2'];
  $number3 = $_GET['number3'];
  $number4 = $_GET['number4'];

  function sum($number1, $number2){
    return $number1 + $number2;
  }

  function multiply($number1, $number2){
    return $number1 * $number2;
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
  <title>Calcular</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-7 col-12 mt-5 mx-auto">
        
        <form id="formLogin" method="GET" action="index.php">
          <div class="form-group">
            <label for="number1">Number One:</label>
            <input id="number1" type="number" class="form-control border-0 bg-light shadow-sm" name="number1" required>
          </div>
          
          <div class="form-group mt-3">
            <label for="number2">Number Two:</label>
            <input id="number2" type="number" class="form-control border-0 bg-light shadow-sm" name="number2" required>
          </div>

          <div class="form-group mt-3">
            <label for="number3">Number Three:</label>
            <input id="number3" type="number" class="form-control border-0 bg-light shadow-sm" name="number3" required>
          </div>

          <div class="form-group mt-3">
            <label for="number4">Number Four:</label>
            <input id="number4" type="number" class="form-control border-0 bg-light shadow-sm" name="number4" required>
          </div>

          
          <div class="form-group mt-4 text-center">
            <button class="btn btn-primary col-8" type="submit">Send</button>
          </div>
          
        </form>

        <?php if($_GET): ?>
          <div class="mt-5">
            <h5>Sum of the first two numbers: <span><?= sum($number1, $number2) ?></span></h5>

            <h5>Products of the last two numbers: <span><?= multiply($number4, $number4) ?></span></h5>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
      
</body>
</html>