<?php

// Pour que ce soit télécharger
header('Content-type: text/csv');
header('Content-Disposition: attachment; filename="demo.csv"');

// do not cache the file
header('Pragma: no-cache');
header('Expires: 0');

if(($handler = fopen('formulaire.csv', 'w') !== FALSE){

  $increment= 1;
  $requeteQ = msqli_query('SELECT * FROM QUESTIONS WHERE idform ='..'') or die("Erreur requête: " . mysqli_error());
  $requeteR = msqli_query('SELECT * FROM REPONSES WHERE idform='.$fef.'') or die("Erreur requête: " . mysqli_error());

  foreach ($requeteQ as $data) {
    fputcsv($file, array($increment,$Q3,$Q4,$Q5,$Q6,$Q7,$Q8,$Q9,$Q10,$Q11,));

  }
}












 ?>
