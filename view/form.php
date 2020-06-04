<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TreeForm</title>
  <link type="text/css" rel="stylesheet" href="css/main.css" />
  <link rel="shortcut icon" href="/img/favicon.ico" />
  <script src="js/script.js"></script>
</head>
<!--
Pour generer Url
for ($i=0; $i < 10; $i++) {
    $randomSite = "http://my.site/paste/" . hash('adler32', $i);
}  -->

<body>
  <div class="container">
  <div class="texte">
    <p>Bienvenue sur mon formulaire, Vous pouvez répondre aux questions suivantes c'est très rapide</p>
  </div>
  <div class="form_container">
    <div class="form_content">
        <label for="form-message" class="questions"> Question 1 : </label><br>
        <input type="radio" name="réponseq1" >
        <label for="form-message" class="reponse"> Réponse 1</label><br>
        <input type="radio" name="réponseq1" >
        <label for="form-message"class="reponse"> Réponse 2</label><br>
        <input type="radio" name="réponseq1" >
        <label for="form-message"class="reponse"> Réponse 3</label><br>
    <div>

    <div class="blocs">
        <label for="form-message"class="questions"> Question 2 : </label><br>
        <input type="radio" name="réponseq2" >
        <label for="form-message"class="reponse"> Réponse 1</label><br>
        <input type="radio" name="réponseq2" >
        <label for="form-message" class="reponse"> Réponse 2</label><br>
        <input type="radio" name="réponseq2" >
        <label for="form-message" class="reponse"> Réponse 3</label><br>
    <div>
    <div class="blocs">
      <label for="form-message"class="questions"> Question 3 : </label><br>
        <input type="radio" name="réponseq3" >
        <label for="form-message"> Réponse 1</label><br>
        <input type="radio" name="réponseq3" >
        <label for="form-message"> Réponse 2</label><br>
        <input type="radio" name="réponseq3" >
        <label for="form-message"> Réponse 3</label><br>
    <div>
    <div class="btn_container">
      <button class="btn" type="submit" name="btnValider" value="Valider" >Valider</button>
      <button class="btn" type="submit" name="btnReset" value="Reinitialiser" >Reinitialiser</button>
    </div>

  </div>



</div>

</body>
</html>
