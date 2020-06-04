<?php

function OpenCo() {

$host = "localhost";
$user = "treeform";
$password = "treeform123" ;
$database = "treeform";

$co = (new mysqli($host,$user,$password,$database)
or die("Erreur : Connexion à base de données".$co -> error));

  return $co;

}

 function closeCo($co){
   $co -> close();
  }

 ?>
