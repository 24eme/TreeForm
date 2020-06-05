<?php

//Generer page random de formulaire
  function generateRandomURL($length = 15) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomURL= '';
    for ($i = 0; $i < $length; $i++) {
        $randomURL .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomURL;
  }


  $url = generateRandomURL();
  $iduser = $_POST['id'];

  $formulaire = "formulaire/form?url=".$url.".php";
  $output= fopen($formulaire, 'w') or die("error");
  $acopier = fopen("form.php",'r');

  fwrite($output, $acopier);

  $questions =$_POST['question'];
  $response =$_POST['response'];
  $form =$_POST['form'];

    foreach($questions as $questions){

      fwrite($file, $questions);

      $stmt = $dbh->prepare("INSERT INTO QUESTIONS (idquestion, question) VALUES (:idquestion, :question)");
      $stmt->bindParam(':idquestion', $idquestion);
      $stmt->bindParam(':question', $question);

      // insertion d'une ligne
      $question = $question[];
      $stmt->execute();

      $stmt = $dbh->prepare("INSERT INTO RESPONSES (idreponse, response) VALUES (:idreponse, :response)");
      $stmt->bindParam(':idresponse', $idresponse);
      $stmt->bindParam(':response', $response);

      // insertion d'une ligne
      $name = 'one';
      $value = 1;
      $stmt->execute();

      $stmt = $dbh->prepare("INSERT INTO FORMS (idForm, name, idUser) VALUES (:idForm, :name,:idUSer)");
      $stmt->bindParam(':name', $name);
      $stmt->bindParam(':value', $);
      $stmt->bindParam(':idUser', $iduser);

      // insertion d'une ligne
      $name = 'one';
      $value = 1;
      $stmt->execute();


    }



?>
