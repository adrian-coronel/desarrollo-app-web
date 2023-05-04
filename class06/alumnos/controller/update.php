<?php

  include('../../connection.php');

  $connection = connect();

  #Obtenemos los valores del formulario
  if(isset($_POST['enviar'])){
    $id = $_POST['id'];
    $nombres = $_POST['names'];
    $apellidoPaterno = $_POST['apellidoPaterno'];
    $apellidoMaterno = $_POST['apellidoMaterno'];
  
    $sql = "UPDATE ALUMNO SET NOMBRES = '$nombres', APELLIDO_PATERNO = '$apellidoPaterno', APELLIDO_MATERNO = '$apellidoMaterno' WHERE ID_ALUMNO = $id;";
  
    
    $resultado = mysqli_query($connection, $sql);
  }

  disconnect($connection);

  header('Location: ../view/alumno.php');

