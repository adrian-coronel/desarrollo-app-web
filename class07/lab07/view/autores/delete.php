<?php

  include('../../connection/connection.php');

  $connect = connect();
  if($_GET['id_autor']){
    $query = $connect->prepare("DELETE FROM AUTOR WHERE ID_AUTOR = ?");
    $query->bind_param('i',$_GET['id_autor']);
    $query->execute();

  }  

  disconnect($connect);

  header('Location: index.php');



