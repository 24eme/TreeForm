<?php
require_once("../model/connexion.php");

   session_start();
   if($_SESSION["autoriser"]=="oui"){
      header("location:../view/home.php");
      exit();
   }

   else{
     echo("éqsfhqlfq");
   }
?>
