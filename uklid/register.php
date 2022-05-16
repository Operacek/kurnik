<!DOCTYPE html>
<html lang="">
<?php
	include "index/head.php";

	?>

<body>

  <form action="formular.php" method="post">
      <input type="text" name = "name" placeholder="Křestní jméno">
      <br>
      <input type="text" name = "surname" placeholder="Prijmeni">
      <br>
      <input type = "text" name = "username" placeholder="prezdivka">
      <br>
      <input type = "password" name = "password" placeholder="Heslo">
      <br>
      <input type = "email" name = "email" placeholder="E-Mail">
      <br>
      <input type = "submit" name= "submit_register" value = "Odeslat">

  </form>
	<?php


 ?>


</html>
