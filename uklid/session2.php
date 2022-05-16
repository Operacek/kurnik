<?php session_start();

  echo $_SESSION["pozdrav"];

 ?>


<!DOCTYPE html>
<html lang="">
<?php
	include "index/head.php";

	?>

<body>

<?php
$name = "Cookieasdoddavida";
$value = 1563;
$expiration = time() + (60*60*24*7);

setcookie($name,$value,$expiration);


if(isset($_COOKIE[$name])){
echo $_COOKIE[$name];
} ?>

	<a href="login.php">Login</a>
	<a href="register.php"> register</a>
<a href="asd.php"> asd</a>



<?php
	include "index/footer.php";
	?>



    <script src=""></script>
</body>
</html>
