<?php

  include('../../connection.php');

  $connection = connect();

  #Obtenemos los valores del formulario
  if(isset($_POST['enviar'])){
    // $id = $_POST['id'];
    $id_alumno = $_POST['idAlumno'];
    $id_curso = $_POST['idCurso'];
    $id_matricula = $_POST['idMatricula'];

    $sql = "UPDATE MATRICULA SET ID_ALUMNO = $id_alumno, ID_CURSO = $id_curso WHERE ID_MATRICULA = $id_matricula;";
   
    $resultado = mysqli_query($connection, $sql);
  }

  disconnect($connection);

  header('Location: ../view/matricula.php');

