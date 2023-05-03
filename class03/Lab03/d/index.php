<?php 

  $record1 = 0;
  $record2 = 0;
  $record3 = 0;
  $message = "";
  
  if($_POST){
    $record1 = $_POST['record1'];
    $record2 = $_POST['record2'];
    $record3 = $_POST['record3'];
  }

  # Function
  function calculateAverage(...$records){
    $result = 0;
    foreach($records as $record){
      $result += $record;
    }
    return ($result / count($records));
  }

  # Average and Condition
  $average = round(calculateAverage($record1,$record2,$record3), 2);
  $isAprobate = $average >= 13;

  # Condition IF ELSE
  if($isAprobate){
    $message = "Aprobado";
  } else{
    $message = "Desaprobado"; 
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
  <title>Exercise four</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-7 col-12 mt-5 mx-auto">
        
        <form id="formLogin" method="POST" action="">
          <div class="form-group">
            <label for="record1">Record One:</label>
            <input id="record1" type="number" class="form-control border-0 bg-light shadow-sm" name="record1" required>
          </div>
          
          <div class="form-group mt-3">
            <label for="record2">Record Two:</label>
            <input id="record2" type="number" class="form-control border-0 bg-light shadow-sm" name="record2" required>
          </div>

          <div class="form-group mt-3">
            <label for="record3">Record Three:</label>
            <input id="record3" type="number" class="form-control border-0 bg-light shadow-sm" name="record3" required>
          </div>
          
          <div class="form-group mt-4 text-center">
            <button class="btn btn-primary col-8" type="submit">Send</button>
          </div>
          
        </form>

        <?php if($_POST): ?>
          <div class="mt-5">
            <h5>Average: <?= $average ?></h5>
            <h4><?= $message ?></h4>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </div>
      

</body>
</html>