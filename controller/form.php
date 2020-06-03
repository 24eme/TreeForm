<?php

  $file = fopen('formulaire.csv', 'w');

  foreach ($variable as $key => $value) {
    fputcsv($file, array($Q1,$Q2,$Q3,$Q4,$Q5,$Q6,$Q7,$Q8,$Q9,$Q10,$Q11,));
    // save each row of the data
    foreach ($data as $row)
    {
    fputcsv($file, $row);
    }
     
  }












 ?>
