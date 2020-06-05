
<?php         //ttp://www.codeurjava.com/2016/12/formulaire-de-login-avec-html-css-php-et-mysql.html

session_start();
if(isset($_POST['email']) && isset($_POST['password'])){
    // connexion à la base de données
    require_once('../model/connexion.php');

    $username = mysqli_real_escape_string($bd,htmlspecialchars($_POST['email']));
    $password = mysqli_real_escape_string($bd,htmlspecialchars($_POST['password']));


    if($username !== "" && $password !== "")       //rentre si les deux champs sont rempli
    {
        $requete = "SELECT count(*) FROM utilisateur where
              email = '".$username."' and password = '".$password."' "; //prend le nombre de fois ou l'email est écrit dans la base de données
        $exec_requete = query($bd,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];


        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['email'] = $username;
           header('Location: ../view/home.php');
        }
        else                                 //si l'utilisateur n'est pas dans la base de données alors il est redirigé vers la page d'accueil
        {
           header('location:../index.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
      header('location:../index.php?erreur=2'); //retourne à la page index.html si l'un des champs est vide
    }

}


else{
   header('Location: ../index.php');

}
mysqli_close($bd); // fermer la connexion
?>
