<?php
require_once("../model/connexion.php");

$email=$_POST["email"];
$password=$_POST["password"];

$sel=$bd->prepare('SELECT * from Users where email=? and password=? limit 1');
$sel->execute([$email,$password]);
$tab=$sel->fetchAll();



if(count($tab)>0){
  header("location:../view/home.php");
}

else{
  header('location:../index.php?erreur=1');
}

?>
