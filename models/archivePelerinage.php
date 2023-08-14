<?php
require_once('../controllers/database_connexion.php');

    $pelerinage0=$base->prepare("SELECT * FROM type_pelerinage WHERE statut='Inactif'");
    $pelerinage0->execute();
    $pelerinage=$pelerinage0->fetchall();

    for($i=0; $i<count($pelerinage); $i++){

        $nom=$pelerinage[$i]['intitule_pel'];
        $id=$pelerinage[$i]['id_pelerinage'];


          echo "<tr> <td>$nom</td><td>

          <a href='../models/activePelerinage.php?id=$id' class='text-success me-2 deletebtn' title='Activer'><i class='fas fa-check'></i></a>
      <a href='modifArchivePelerinage.php?id=$id' class='text-warning me-2 editbtn' title='Modifier'><i class='fas fa-edit'></i></a> 



    </td></tr>";


    }

?>
