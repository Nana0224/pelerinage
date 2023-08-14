<?php

    //Définition de constantes
    define('db_host','localhost');
    define('db_name','pelerinage');
    define('db_username','root');
    define('db_password','');


// Verifie si la base donées existe sinon affiche le message d'erreur
try {

    $base = new PDO("mysql:host=".db_host."; dbname=".db_name, db_username, db_password);
    
    
//Le programme montre l'erreur et arrête l'exécution
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $ex){
    die('Erreur:' .$ex->getMessage());
}
    