<?php
require_once('../controllers/database_connexion.php');

    $depense0=$base->prepare("SELECT * FROM type_depense WHERE statut='Actif'");
    $depense0->execute();
    $depense=$depense0->fetchall();

    for($i=0; $i<count($depense); $i++){

        $nom=$depense[$i]['intitule_dep'];
        $id=$depense[$i]['id_depense'];


          echo "<tr><td>$nom</td>              

        <td> 
        <a href='modifDepense.php?id=$id' class='text-warning me-2 editbtn' title='Modifier'><i class='fas fa-edit'></i></a>  
        
        
        <a href='../models/supprimeDepense.php?id=$id' class='text-danger me-2 deletebtn' title='Archiver'><i class='fas fa-trash'></i></a></td></tr>";


    }

?>
