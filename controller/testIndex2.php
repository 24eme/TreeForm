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
  $ = ;
  $ = ;
  $ = ;
  $ = ;
  $ = ;
  $ = ;
  $id = $_POST['idform'];

  $sql = "SELECT * FROM QUESTION WHERE idform =".$id.";"
  $colonne = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '' ORDER BY ORDINAL_POSITION";

  if (!$result = mysqli_query($bd, $requete)) {
    exit(mysqli_error($bd));
  }
  $questions = array();
  if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          $requete[] = $row;
      }
  }




  $csv = fopen('formulaire.csv','w');

  foreach ($variable as $key) {
    $headers[]=;
    // code...
  }

  fputcsv($csv, array('', '', 'Fichier CSV : N° Formulaire ', $id));

if (count($questions) > 0) {
    foreach ($question as $row) {
        fputcsv($csv, $row,string $delimiter = ";");
    }
}


  $file = fopen('questions.txt', 'a');


  $questions =$_POST['question'];
    foreach($questions as $questions){
      fwrite($file, $questions);
    }
  fclose($file);

?>
