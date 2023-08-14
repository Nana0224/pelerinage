<?php
require_once('../controllers/database_connexion.php');

    $pelerin0=$base->prepare("SELECT * FROM pelerin where statut='Inactif'");
    $pelerin0->execute();
    $pelerin=$pelerin0->fetchall();

    for($i=0; $i<count($pelerin); $i++){

        $idDepense=$pelerin[$i]['id_depense'];
        $depense0=$base->prepare("SELECT * FROM type_depense WHERE id_depense=:idDepense");
        $depense0->execute(array('idDepense'=>$idDepense));
        $depense=$depense0->fetch();

        $idPelerinage=$pelerin[$i]['id_pelerinage'];
        $pelerinage0=$base->prepare("SELECT * FROM type_pelerinage WHERE id_pelerinage=:idPelerinage");
        $pelerinage0->execute(array('idPelerinage'=>$idPelerinage));
        $pelerinage=$pelerinage0->fetch();


        $nom=$pelerin[$i]['nom']." ".$pelerin[$i]['prenom'];
        $dateNaissance=$pelerin[$i]['date_naissance'];
        $lieuNaissance=$pelerin[$i]['lieu_naissance'];
        $genre=$pelerin[$i]['sexe'];
        $prof=$pelerin[$i]['profession'];
        $passport=$pelerin[$i]['numero_passport'];
        $tel=$pelerin[$i]['telephone'];
        
        $idPelerin=$pelerin[$i]['id_pelerin'];

        echo "<tr><td>$nom</td><td>$dateNaissance</td><td>$lieuNaissance</td><td>$genre</td><td>$prof</td><td>$passport</td><td>$tel</td>

        <td> 
        
        <a href='../models/activePelerin.php?idPelerin=$idPelerin' class='text-success me-2 deletebtn' title='Activer'><i class='fas fa-check'></i></a>
        <a href='modifArchivePelerin.php?idPelerin=$idPelerin' class='text-warning me-2 editbtn' title='Modifier'><i class='fas fa-edit'></i></a> 
        <a href='../views/detailsPelerin.php?idPelerin=$idPelerin' class='text-blue me-2 infobtn' title='Détails'><i class='fas fa-info-circle'></i></a> 



        </td></tr>";


    }
?>
