<?php

  include('../../connection.php');

  $connection = connect();

  #Obtenemos los valores del formulario
  if(isset($_POST['enviar'])){
    $id = $_POST['id'];
    $nombre = $_POST['name'];
    $credito = $_POST['credito'];
    
  
    $sql = "UPDATE CURSO SET NOMBRE = '$nombre', CREDITOS = '$credito' WHERE ID_CURSO = $id;";
  
    
    $resultado = mysqli_query($connection, $sql);
  }

  disconnect($connection);

  header('Location: ../view/curso.php');

