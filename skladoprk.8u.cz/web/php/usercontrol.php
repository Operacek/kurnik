<?php

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
        <form action="/index.php" method="set" id="login">
          <input class="form-control" type="text" placeholder="Prezdívka/e-mail" name="username">
          <input class="form-control" type="password" placeholder="Password" name="password">
          <br>
          <label for="checkbox">Zapamatovat si přihlášení?
          <input class="checkbox" type="checkbox" name="remember"></label>  
          <button id="login "type = "submit" name="sumbit-login" class = "submit-btn">Login</button>
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
            <form action="php/register.php" method="POST" id="register" >
              <input class="form-control" type="text" placeholder="Prezdívka/e-mail" name="username">
              <input class="form-control" type="text" placeholder="Jméno" name="name">
              <input class="form-control" type="text" placeholder="Příjmení" name="surname">
              <input class="form-control" type="email" placeholder="e-mail" name="email">
              <input class="form-control" type="password" placeholder="Heslo" name="password"><br>
              <input class="form-control" type="password-again" placeholder="Opakovat Heslo" name="password-again"><br>
              <label for="gdpr">gdpr<input type="checkbox" name="gdpr"></label>
              <button id="register "type = "submit" name="sumbit-register" class = "submit-btn">Registrovat</button>
          </form>
      
          </div>
        </div>
      </div>';
}
?>
