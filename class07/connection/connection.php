<?php

function connect(){
  return  mysqli_connect("localhost","root","miryam2003","lab06");
}

function disconnect($connection){
  mysqli_close($connection);
}
