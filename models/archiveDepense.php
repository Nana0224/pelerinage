<?php
require_once('../controllers/database_connexion.php');

    $depense0=$base->prepare("SELECT * FROM type_depense WHERE statut='Inactif'");
    $depense0->execute();
    $depense=$depense0->fetchall();

    for($i=0; $i<count($depense); $i++){

        $nom=$depense[$i]['intitule_dep'];
        $id=$depense[$i]['id_depense'];


          echo "<tr> <td>$nom</td><td>

          <a href='../models/activeDepense.php?id=$id' class='text-success me-2 deletebtn' title='Activer'><i class='fas fa-check'></i></a>
      <a href='modifArchiveDepense.php?id=$id' class='text-warning me-2 editbtn' title='Modifier'><i class='fas fa-edit'></i></a> 



    </td></tr>";


    }

?>
