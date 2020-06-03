<?php

  require("database.php")


  function createForm(){


  }
  foreach( as ){
    if(){

    }
    else{

    }

  }
  $form = "<form method='POST' action='form.php'>";

  $container = "<div class=\"form_content\"> \n";

    $formQuestion = "<label>".;
    $formQuestion = "</label>".;
    $formInput = "<input type=\"radio\" value=".." name=".."/>".;
  $container = "</div>";

  $form = "</form>";

// save tcan be fetched from mysql too
$data = array(
array('Data 11', 'Data 12', 'Data 13', 'Data 14', 'Data 15'),
array('Data 21', 'Data 22', 'Data 23', 'Data 24', 'Data 25'),
array('Data 31', 'Data 32', 'Data 33', 'Data 34', 'Data 35'),
array('Data 41', 'Data 42', 'Data 43', 'Data 44', 'Data 45'),
array('Data 51', 'Data 52', 'Data 53', 'Data 54', 'Data 55')
);

// save each row of the data
foreach ($data as $row)
{

  fputcsv($file, $row);
}

// Close the fil

  try {
    $handler = fopen();
    fputs();
    echo "";
    echo "";
  } catch (exception $e){
    echo "Erreur d'enregistrement";
    echo ->getMess

  }
  exit;
  }

 ?>


<?php foreach ($variable as $key => $value):


?>

<?php endforeach; ?>

 <?php

  $filepath = ''

 $data = array ('aaa,bbb,ccc,dddd',
                  '123,456,789',
                  '"aaa","bbb"');

   $fp = fopen('formulaire.csv', 'w');
   foreach($data as $line){
            $val = explode(",",$line);
            fputcsv($fp, $val);
   }
   fclose($fp);

  ?>
