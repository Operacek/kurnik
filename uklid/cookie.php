<?php
  $name = "Cookieoddavida";
  $value = 1563;
  $expiration = time() + (60*60*24*7);

  setcookie($name,$value,$expiration);


  if(isset($_COOKIE[$name])){
  echo $_COOKIE[];
}
 ?>



<!DOCTYPE html>
<html lang="">
<?php
	include "index/head.php";

	?>

<body>




	<?php


 ?>


</html>
