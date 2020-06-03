<!DOCTYPE html>
<html>
<head>

  <link type="text/css" rel="stylesheet" href="../view/css/main.css" />
  <title>TreeForm</title>
</head>
<body>
  <form method="post">
    <label>Création de Formulaire</label><br>

    <input type="text" name="questions"><br>
    <label>Veuillez saisir la(les) réponse(s) possible(s)</label><br>
    <input type="text" name="reponse"><br>
    <input type="text" name="reponse"><br>
    <span class="addAnswer"><i id="moreAnswers"></i><span>
    <span class="addQuestion"><i id="moreQuestion"></i></span>
    <input type="submit" value="Publier" name="submit">


  </form>
</body>
</html>
<?php

if(isset($_POST['questions']))
{
$data=$_POST['reponse'];
$data=$_POST['questions'];
$fp = fopen('formulaire.txt', 'w');
fwrite($fp, $data);
fclose($fp);
}
?>
