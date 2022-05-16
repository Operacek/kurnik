<?php

include "php/usercontrol.php";

function main_menu(){

$main_menu = '<div class="menu">
    <ul class="navigace">
        <li><a href="index.php" class="obecne">Novinky</a></li>
        <li><a href="index.php" class="obecne">Cenník</a></li>
        <li><a href="index.php" class="obecne">Kontakt</a></li>
    </ul>
    <ul class="account">
        <li><button type="button "class="register" id="register-show">Registrovat'.register().'</button></li>
        <li><button type="button" id="login-show" class="login">Prihlasit se '.login().'</button></li>
    </ul>
</div>';
 echo $main_menu;
}




?>
