<?php


function Connection(){
  global $connection;

  $connection = mysqli_connect("localhost","root","","kurnik");
  if($connection){
    echo "vse ok";
  }else{
    die("Nah! DB");
  }
}

function register(){

}



?>
