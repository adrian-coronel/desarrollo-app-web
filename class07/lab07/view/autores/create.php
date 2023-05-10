<?php

  include('../../connection/connection.php');

  $connect = connect();

  if(isset($_POST['enviar'])){
    $nombres = $_POST['nombres'];
    $categoria = $_POST['categoria'];
    $apellido_paterno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];

    $query = $connect->prepare("INSERT INTO AUTOR(NOMBRES,CATEGORIA,APELLIDO_PATERNO,APELLIDO_MATERNO) VALUES (?,?,?,?)");
    # Une un cojunto de variables con los signos ? del prepare statement
    $query->bind_param('ssss',$nombres,$categoria, $apellido_paterno,$apellido_materno); # bind_param(typos de dato, value)

    $msg = $query->execute() ? 'Alumno registrado con éxito' : 'No se puedo registrar al alumno';

    echo '<h1>'.$msg. '</h1> <br> <a href="index.php" >Regresar</a>';
  }
  
  disconnect($connect);