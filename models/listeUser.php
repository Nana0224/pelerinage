<?php
require_once('../controllers/database_connexion.php');


  $user0=$base->prepare("SELECT * FROM utilisateur WHERE statut='Actif'");
  $user0->execute();
  $user=$user0->fetchall();

  for($i=0; $i<count($user); $i++){
        
    $nom=$user[$i]['nom']." ".$user[$i]['prenom'];
    $username=$user[$i]['username'];
    $idUser=$user[$i]['id_user'];

    echo "<tr><td>$nom</td><td>$username</td><td> 
    <a href='modifUser.php?idUser=$idUser' class='text-warning me-2 editbtn' title='Modifier'><i class='fas fa-edit'></i></a> 
    <a href='detailsUser.php?idUser=$idUser' class='text-blue me-2 infobtn' title='Détails'><i class='fas fa-info-circle'></i></a> 
    <a href='../models/supprimeUser.php?idUser=$idUser' class='text-danger me-2 deletebtn' title='Archiver'><i class='fas fa-trash'></i></a></td></tr>";

  }
?>