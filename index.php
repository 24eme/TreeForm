<?php require_once('model/connexion.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="view/css/main.css" />
  <link rel="shortcut icon" href="img/favicon.png" />
  <script src="view/js/script.js"></script>
    <title>TreeForm</title>
</head>

<body>
  <div class="header"><h1>TreeForm<h1></div>
<div class="container">
  <div class="content left_content">
    <div class="headline">
    <p>Creer votre formulaire simplement</p>
    <p>Creer votre sondage</p>
    <p>Participer,échanger avec votre communauté</p>
    </div>
  </div>
  <div class=" content login_content">
  <form action="authentification.php" method="post">  <!--àfairepourconnexion-->
    <div class="username_container">
      <input type="text" class="form-control" placeholder="Pseudo ou Email">
    </div>
    <div class="password_container">
      <input type="text" placeholder="Mot de passe">
    </div>
    <div class="btn_container">
          <button type="submit" class="btn btn_login" name="btnlogin">Se connecter</button>
          <button formaction="view/signup.php"type="submit" class="btn btn_signup" name="btnsignup">S'inscrire</button>

    </div>
  </form>
  </div>

</div>

</body>
</html>
