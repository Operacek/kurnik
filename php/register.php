<?php
include "../admin/db.php";
if(isset($_POST["submit_register"])){
        connection();
            $username = $_POST["username"];
            $name = $_POST["name"];
            $surname = $_POST["surname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $cpassword = $_POST["cpassword"];
            if($password==$cpassword){
            $query = "select * from accounts where username='$'";
            $result = mysqli_query($connection,$query);
              if(!$result->num_rows > 0){
                     $query = "INSERT INTO accounts (
                       username,
                       name,
                       surname,
                       email,
                       password,
                       auth
                     )
                     VALUES (
                       '$username',
                       '$name',
                       '$surname',
                       '$email',
                       '$password',
                       1
                        )";
                        $result = mysqli_query($connection, $query);
                        header("Location: ../index.php");
                        echo "<script> alert('Uspech!'')</script>";
                  }else{echo "<script>alert('Účet již existuje!')</script>";}
                }else{echo"<script>alert('Hesla se neschoduji!')</script>";}
}else{echo asd;}

?>
