
<?php require_once('../model/connexion.php');
// require_once('../controller/save.php');
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="css/main.css" />
  <link rel="shortcut icon" href="img/favicon.png" />
  <script src="js/script.js"></script>
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
  <div  class=" content login_content">
  <form action="../controller/save.php" method="post">
    <div class="username_container">
      <input type="text" class="form-control" placeholder="Pseudo"name="pseudo" required>
      <input type="email" class="form-control" placeholder="email@exemple.com"name="email" required>
    </div>
    <div class="password_container">
      <input type="password" placeholder="Mot de passe" name="password" required>
      <input type="password" placeholder="Confirmation de mot de passe"name="cpassword" required>
    </div>
    <div class="btn_container">
          <button type="submit" class="btn btn_signup" name="btnsignup">S'inscrire</button>
    </div>
  </form>
  </div>

</div>

</body>
</html>
