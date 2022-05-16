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
    include "php/menu.php";


    main_menu();
?>


<script type="text/javascript">
  $(function() {
      $('#login-show').click(function() {
      $('#login-modal').fadeIn().css("display", "flex");
    });

    $('.close-modal').click(function() {
      $('#login-modal').fadeOut();
    });

    $('#register-show').click(function() {
      $('#register-modal').fadeIn().css("display", "flex");
    });

    $('.close-modal').click(function() {
      $('#register-modal').fadeOut();
    });
  });

  function vefiry(){
    if(document.forms["register"].elements["name"]==''){
      alert('ender remark');
    }
  }

</script>

</body>
</html>
