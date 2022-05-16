	




<!DOCTYPE html>
<html lang="">
<?php
	include "index/head.php";
	?>

<body>

	<?php
	echo "asd";
		include "config/db.php";
		Connection();



		if(isset($_POST["submit_register"])){

			Connection();
			$name = $_POST["name"];
			$surname = $_POST["surname"];
			$username = $_POST["username"];
			$password = $_POST["password"];
			$email = $_POST["email"];
			$auth = 1;
			echo "asd";
			$query = "INSERT INTO accounts (username,name,surname,email,password,auth) values ('$username','$name','$surname','$email','$password','$auth')";
			$result = mysqli_query($connection,$query);


			$query = "SELECT * FROM accounts";
			$result = mysqli_query($connection,$query);
			while($row =mysqli_fetch_assoc	($result)){
				print_r($row);
			}
		}
 ?>



    <script src=""></script>
</body>
</html>
