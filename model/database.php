<?php

function OpenCo() {

$host = "localhost";
$user = "root";
$password = ;
$database = "treeform";

$co = (new mysqli($host,$user,$password,$database)
or die("Erreur : Connexion à base de données".$co -> error));

  return $co;

}

 function closeCo($co){
   $co -> close();
  }

 ?>
