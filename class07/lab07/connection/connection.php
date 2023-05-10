<?php


function connect(){
  return  mysqli_connect("localhost","root","miryam2003","lab07");
}

function disconnect($connection){
  mysqli_close($connection);
}
