<?php
require_once('../controllers/database_connexion.php');

  $idUser=$_GET['idUser'];
  $user0=$base->prepare("SELECT * FROM utilisateur WHERE id_user=:idUser");
  $user0->execute(array('idUser'=>$idUser));
  $user=$user0->fetchall();

  for($i=0; $i<count($user); $i++){

    $nom=$user[$i]['nom']." ".$user[$i]['prenom'];
    $username=$user[$i]['username'];
    $role=$user[$i]['role_user'];
    $statut=$user[$i]['statut'];
    $idUser=$user[$i]['id_user'];
  }   
?>