<?php
require_once('../controllers/database_connexion.php');

  $user0=$base->prepare("SELECT * FROM utilisateur WHERE statut='Inactif'");
  $user0->execute();
  $user=$user0->fetchall();

  for($i=0; $i<count($user); $i++){
        
    $nom=$user[$i]['nom']." ".$user[$i]['prenom'];
    $username=$user[$i]['username'];
    $idUser=$user[$i]['id_user'];

    echo "<tr><td>$nom</td><td>$username</td><td> 
    
      <a href='../models/activeUser.php?idUser=$idUser' class='text-success me-2 deletebtn' title='Activer'><i class='fas fa-check'></i></a>
      <a href='modifArchiveUser.php?idUser=$idUser' class='text-warning me-2 editbtn' title='Modifier'><i class='fas fa-edit'></i></a> 
      <a href='detailsUser.php?idUser=$idUser' class='text-blue me-2 infobtn' title='Détails'><i class='fas fa-info-circle'></i></a>



    </td></tr>";

  }
?>