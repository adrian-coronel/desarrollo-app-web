<?php

  include('../../connection.php');

  $connection = connect();
  if($_GET['idmatricula']){
    $sql = "DELETE FROM MATRICULA WHERE ID_MATRICULA = ". $_GET['idmatricula'];
    $resultado = mysqli_query($connection, $sql);
  }  

  disconnect($connection);

  header('Location: ../view/matricula.php');



