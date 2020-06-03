<?php

require("database.php");

   if (isset($_POST['Se connecter'])) {

     $user = $_POST[];
     $pwd = password_hash($pwd,PASSWORD_DEFAULT);

     //Si se connecte avec un email
     if(filter_var($email, FILTER_VALIDATE_EMAIL))){
        SELECT * FROM USER WHERE email=" "and password=".$pwd.;"
     }
     else{
       SELECT * FROM USER WHERE username=" "and password=".$pwd.;"
     }

  } else if (isset($_POST['S\'inscrire'])) {
     //Si btn s'inscrire redirigé à page s'inscrire
      header('Location: ../sinscrire.php');
  }
?>
