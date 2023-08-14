<?php
require_once('../controllers/database_connexion.php');

    $pelerinage0=$base->prepare("SELECT * FROM type_pelerinage WHERE statut='Actif'");
    $pelerinage0->execute();
    $pelerinage=$pelerinage0->fetchall();

    for($i=0; $i<count($pelerinage); $i++){

		$nom=$pelerinage[$i]['intitule_pel'];
        $id=$pelerinage[$i]['id_pelerinage'];


          echo "<tr><td>$nom</td>              

        <td> 
        <a href='modifPelerinage.php?id=$id' class='text-warning me-2 editbtn' title='Modifier'><i class='fas fa-edit'></i></a>  
        
        
        <a href='../models/supprimePelerinage.php?id=$id' class='text-danger me-2 deletebtn' title='Archiver'><i class='fas fa-trash'></i></a></td></tr>";


    }

?>
