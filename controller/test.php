<?php

// Pour que ce soit télécharger
header('Content-type: text/csv');
header('Content-Disposition: attachment; filename="demo.csv"');

// do not cache the file
header('Pragma: no-cache');
header('Expires: 0');


if(($handler = fopen('formulaire.csv', 'w') !== FALSE){

  $html = str_get_html($html);

    foreach($html->find('input.question') as $element)
    {
            $th = array();
            foreach( $element->find('input.question') as $row)
            {
                $th [] = $row->plaintext;
            }
            $td = array();
            foreach( $element->find('') as $row)
            {
                $td [] = $row->plaintext;
            }
            !empty($th) ? fputcsv($fp, $th) : fputcsv($fp, $td);
    }
  fclose($handler);
}?>
