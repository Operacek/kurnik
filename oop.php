<?php

class clovek{

  function pozdrav(){
    echo "Dobry den";
  }
}

//objekt

      $pavel = new Clovek();
      $jana = new Clovek();
      $dalibor = new Clovek();

// umi pozdravit

    $pavel->pozdrav();
    echo "<br>";
    $jana->pozdrav();



    if(class_exists("clovek")){
      echo "ano!";
    }


    if(method_exists("clovek","pozdrav")){
      echo "ano";
    }
 ?>
