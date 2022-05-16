<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Page Title</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="robots" content="all,follow">
<link rel="stylesheet" href="css/main.css">
<style>
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<head>
</head>
<body>
<?php
include "./admin/db.php";
session_start();
function login(){
    echo '<div id="login-modal">
    <div class="modal">
      <div class="top-form">
        <div class="close-modal">
          &#10006;
        </div>
      </div>
      <div class = "login-form">
        <h2>Přihlášení do systému</h2>
        <form action="php/logsystem/login.php" method="set" id="login">
          <input class="form-control" type="text" placeholder="Prezdívka/e-mail" name="lusername">
          <input class="form-control" type="password" placeholder="Password" name="lpassword">
          <br>
          <label for="checkbox">Zapamatovat si přihlášení?
          <input class="checkbox" type="checkbox" name="remember"></label>
          <input  class ="submit-btn" type = "submit" name= "submit_login" value = "Odeslat">
      </form>

      </div>
    </div>
  </div>';
}


function register(){
        echo '
        <div id="register-modal">
        <div class="modal">
          <div class="top-form">
            <div class="close-modal">
              &#10006;
            </div>
          </div>
          <div class = "login-form">
            <h2>Registrovat se do systemu</h2>
            <form action="php/logsystem/register.php" method="POST" id="register" >
              <input class="form-control" type="text" placeholder="Prezdívka/e-mail" name="username" value=>
              <input class="form-control" type="text" placeholder="Jméno" name="name" value=>
              <input class="form-control" type="text" placeholder="Příjmení" name="surname" value=>
              <input class="form-control" type="email" placeholder="e-mail" name="email" value=>
              <input class="form-control" type="password" placeholder="Heslo" name="password" value=><br>
              <input class="form-control" type="password" placeholder="Opakovat Heslo" name="cpassword" value=><br>
              <label for="gdpr">gdpr<input type="checkbox" name="gdpr"></label>
              <input  class = "submit-btn" type = "submit" name= "submit_register" value = "Odeslat">
          </form>

          </div>
        </div>
      </div>';
}



?>
</body>
</html>
