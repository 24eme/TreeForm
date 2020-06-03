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
  $container = "<div class=\"form_content\"> \n"
    $formQuestion = "<label>".
    $formInput = "<input type=\"checkbox\"/>".
    $form



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
