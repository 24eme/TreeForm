<?php

define('DB_HOST','localhost');
define('DB_NAME','treeForm_db');
define('DB_USERNAME','root');
define('DB_PASSWORD','root');



try{
  $bd=new PDO("mysql:host=".DB_HOST. ";dbname=".DB_NAME,DB_USERNAME,DB_PASSWORD);

  $bd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}

catch(PDOException $e){
  die('Erreur:' .$e->getMessage());
}
?>
