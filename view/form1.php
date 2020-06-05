
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TreeForm</title>
  <link type="text/css" rel="stylesheet" href="css/main.css" />
  <link rel="shortcut icon" href="/img/favicon.ico" />
  <script src="js/script.js"></script>
</head>

<?php

  //
  // $stmt = $pdo->prepare("SELECT * FROM QUESTION WHERE idform=:id");
  // $stmt->execute(['id' => $idform]);
  // $question = $stmt->fetch();
  //
  // $idquestion = $question['question'];
  //
  // $Qcount = 1;
  //
  //  while($question = $rst->fetch()){
  //
  //    $stmtReponse = $pdo->prepare("SELECT * FROM REPONSES WHERE idquestion=:id");
  //    $stmtReponse->execute(['id' => $idquestion]);
  //    $reponse = $stmtReponse->fetch();
  //
  //      while ($reponse = $rstR->fetch()) {
  //        $formulaire = "<div class=\"form_content\"><span>Q.</span>".$Qcount.
  //                      "<label for=\"form-message\" class=\"question\">".$question['question']."</label><br>
  //                      <input type=\"radio\" name=\"reponses[]\"".$reponse['reponse']."></div>";
  //      }
  //
  //  }
?>


<body>
  <div class="container">
  <div class="texte">
    <p>Bienvenue sur mon formulaire, Vous pouvez répondre aux questions suivantes c'est très rapide</p>
  </div>
  <div class="form_container">
    <form method="POST" action="tocsv.php?url.">
    <!-- <php echo $formulaire;?> -->
    <div class="btn_container">
      <button class="btn" type="submit" name="btnValider" value="Valider" >Valider</button>
      <button class="btn" type="submit" name="btnReset" value="Reinitialiser" >Reinitialiser</button>
    </div>
    </form>
  </div>
</div>
</body>
</html>
