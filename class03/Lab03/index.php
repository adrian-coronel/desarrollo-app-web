<?php
  $saludo = 'Bienvenido a mi App Web con PHP';

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

  <title>Ingreso</title>
</head>
<body>
  <div class="container">
    <div class="row mt-3">
      <h2>
        <?= 'Desarrollo de Aplicaciones Web' ?>
      </h2>
    </div>
    
    <div class="row">
        <div class="col-sm-9 col-12 mt-5 mx-auto">
          <div class="card">

            <div class="card-header bg-success">
              <div class="card-title text-white">
                Income
              </div>
            </div>
            <div class="card-body">
              <form id="formLogin" method="POST" action="bienvenido.php" onsubmit="return validate();" >
                <div class="form-group">
                  <label for="user">User:</label>
                  <input id="user" type="text" class="form-control border-0 bg-light shadow-sm" name="user" placeholder="Enter your username" required>
                </div>
                <div class="form-group mt-4 mb-4">
                  <label for="password">Password:</label>
                  <input id="password" type="password" class="form-control border-0 bg-light shadow-sm" name="password" placeholder="Enter your password" maxlength="10" required>
                </div>
                <div class="form-group">
                  <button class="btn btn-success col-12">Get into</button>
                </div>
                <div class="mt-3">
                  <p class="text-center">
                    <a href="javascript:inform();">Forgot your password?</a>
                  </p>
                  <p id="message" class="text-primary text-center">

                  </p>
                </div>
                
              </form>
            </div>

          </div>
        </div>
      </div>
      
  </div>
</body>
</html>