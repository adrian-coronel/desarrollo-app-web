<?php

  include('../../connection.php');

  $connection = connect();
  if($_GET['id']){
    $sql = "DELETE FROM ALUMNO WHERE id_alumno = ". $_GET['id'];
    $resultado = mysqli_query($connection, $sql);
  }  

  disconnect($connection);

  header('Location: ../view/alumno.php');



