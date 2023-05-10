<?php

include('../../connection/connection.php');

  $connect = connect();

  #Obtenemos los valores del formulario
  if(isset($_POST['enviar'])){
    $id_autor = $_POST['id_autor'];
    $nombres = $_POST['nombres'];
    $categoria = $_POST['categoria'];
    $apellido_paterno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];

    $query = $connect->prepare("UPDATE AUTOR SET nombres = ?, categoria = ?, apellido_paterno = ?, apellido_materno = ? WHERE id_autor = ?;");
    $query->bind_param('ssssi',$nombres,$categoria,$apellido_paterno,$apellido_materno,$id_autor); # bind_param(typos de dato, value)

    $query->execute();
  
    $resultado = $query->get_result();
    
  }

  disconnect($connect);

  header('Location: index.php');

