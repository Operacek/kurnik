<?php
include "../../admin/db.php";
error_reporting(0);
session_start();
if(isset($_POST["submit_register"])){
        connection();
            $username = $_POST["username"];
            $name = $_POST["name"];
            $surname = $_POST["surname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $cpassword = $_POST["cpassword"];
            if($password==$cpassword){
            $query = "select * from accounts where username='$username' and username!=''";
            $result = mysqli_query($connection,$query);
            print_r($result);
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
                        echo "<script> alert('Uspech!'')</script>";
                  }else{
                  echo "<script>
                  window.location.href='../../index.php';
                  alert('Účet již existuje!');
                  </script>";}
                }else{echo"<script>alert('Hesla se neschoduji!')</script>";}
}else{echo "<script>alert('Spatne zadane udaje!')</script>";}
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>
