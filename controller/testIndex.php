<!DOCTYPE html>
<html>
<head>

  <link type="text/css" rel="stylesheet" href="../view/css/main.css" />
  <title>TreeForm</title>
</head>
<body>
  <form method="post">
    <label>Création de Formulaire</label><br>

    <input type="text" name="question"><br>
    <label>Veuillez saisir la(les) réponse(s) possible(s)</label><br>
    <input type="text" name="textdata[]"><br>
    <input type="text" name="textdata[]"><br>

    <input type="submit" value="Publier" name="submit">

  </form>
</body>
</html>
<?php

  $file = fopen('data.txt', 'a');

  $data=$_POST['textdata'];
    foreach($data as $data){
      fwrite($file, $data);
    }
  fclose($file);

?>
