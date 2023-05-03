<?php 

  $name = $_POST['name'];
  $email = $_POST['email'];
  $avatar = $_POST['avatar'];
  

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
  <title>Show User</title>
</head>
<body>
    
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-12 mt-5 mx-auto">

      <div class="card mx-auto" style="width: 30rem;">
        <img src="<?= $avatar ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="display-6"><?= $name ?></h5>
          <a class="nav-link text-primary" href="#"><?= $email ?></a>
          <p class="card-text mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi omnis aspernatur soluta quos nihil. Dolore praesentium accusamus culpa dolorum harum distinctio in officia vel. Pariatur quam tempora cum nesciunt voluptas?</p>
          <a href="#" class="btn btn-primary">Contact</a>
        </div>
      </div>

      </div>
    </div>
  </div>

</body>
</html>