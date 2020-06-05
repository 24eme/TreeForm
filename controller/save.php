
<?php
require_once("../model/connexion.php");

$pseudo=$_POST["pseudo"];
$email=$_POST["email"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];


$stmt= $bd->prepare('SELECT * FROM Users WHERE email=?');
$stmt->execute([$email]);
$user=$stmt->fetch();




if(mb_strlen($pseudo)<3){
  header('location:../view/signup.php'); //"Pseudo trop court"

}

if (! filter_var($email, FILTER_VALIDATE_EMAIL)){
  header('location:../view/signup.php');
}

if(mb_strlen($password)<6){
  header('location:../view/signup.php');
    }

if($password != $cpassword){
    header('location:../view/signup.php');
    //echo("Veuillez saisir un mot de passe identique");
}
if($user){
  header('location:../view/signup.php'); //email existe déjà

}
else{
  $ps=$bd->prepare("INSERT INTO Users(pseudo,email,password)VALUES(?,?,?)");
  $params = array($pseudo,$email,$password);
  $ps->execute($params);
  header("location:../index.php");
}

?>
