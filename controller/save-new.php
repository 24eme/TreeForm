<?php
require_once("../model/connexion.php");


if(isset($_POST['btnsignup'])){

  if (!empty($_POST["pseudo"])&& !empty($_POST["email"])&& !empty($_POST["password"]) && !empty($_POST["cpassword"])){
    $errors=[];
    extract($_POST); //$pseudo=$_POST["pseudo"];
    //$email=$_POST["email"];
    //$password=$_POST["password"];
    //$cpassword=$_POST["cpassword"];


    if(mb_strlen($pseudo)<3){
      $errors[]="Pseudo trop court";
    }


    if (! filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors[]="Adresse email invalide";
    }

    if(mb_strlen($password)<6){
      $errors[]="Mot de passe trop court";

    }
    else{
      if($password!=$cpassword){
        $errors[]="Les deux mots de passe sont différents";
      }
    }
    if(is_already_in_use('email',$email,"Users")){
      $errors[]="Email déjà utilisé";
      //header('location:../view/signup.php');
    }
    if(count($errors)==0){
      $ps=$bd->prepare("INSERT INTO Users(pseudo,email,password)VALUES(?,?,?)");
      $params = array($pseudo,$email,$password);
      $ps->execute($params);
      header("location:../index.php");
    }
  }

  else{
    $errors[]="Tous les champs ne sont pas remplis";
  }

}


?>
