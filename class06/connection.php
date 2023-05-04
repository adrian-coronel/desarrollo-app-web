<?php 
  /**
   * Devuelve un objeto sobre el que se puede operar con la base de * datos
   */
  function connect(){
    $connection = mysqli_connect("localhost","root","miryam2003","lab06");
    return $connection;

    #die() se utiliza principalmente para manejar errores en el script y detener la ejecución cuando se encuentra algún problema
    // die(); 
  }

  function disconnect($connection){
    mysqli_close($connection);
  }

