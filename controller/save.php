<?php
require_once("../model/connexion.php");

$pseudo=$_POST["pseudo"];
$email=$_POST["email"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];

if($password != $cpassword){
    header('location:../view/signup.php');
    echo("Veuillez saisir un mot de passe identique");
}
elseif("SELECT * from Users where email=.$email."){
    if(mysqli_num_rows()!=0){
      header('location:../view/signup.php');
      echo("Cette adresse mail est déjà utilisée");
    }
}
else{
  $ps=$bd->prepare("INSERT INTO Users(pseudo,email,password)VALUES(?,?,?)");
  $params = array($pseudo,$email,$password);
  $ps->execute($params);
  header("location:../index.php");
}

?>
