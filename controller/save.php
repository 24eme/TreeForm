<?php
require_once("../model/connexion.php");
require_once("../view/s-inscrire.php");

$pseudo=$_POST["pseudo"];
$email=$_POST["email"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];

if($password != $cpassword){
    echo("Les mots de passe sont différents");
}
else{

}

?>
