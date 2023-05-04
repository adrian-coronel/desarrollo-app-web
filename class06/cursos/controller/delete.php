<?php

  include('../../connection.php');

  $connection = connect();
  if($_GET['id']){
    $sql = "DELETE FROM CURSO WHERE id_curso = ". $_GET['id'];
    $resultado = mysqli_query($connection, $sql);
  }  

  disconnect($connection);

  header('Location: ../view/curso.php');



