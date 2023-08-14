<?php
require_once('../controllers/database_connexion.php');

    $idPelerin=$_GET['idPelerin'];
    $pelerin0=$base->prepare("SELECT * FROM pelerin WHERE id_pelerin=:idPelerin");
    $pelerin0->execute(array('idPelerin'=>$idPelerin));
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
        $verse=$pelerin[$i]['versement'];
        $totauxVerse=$pelerin[$i]['totaux_versement'];
        $totalPaye=$pelerin[$i]['total_paye'];
        $impay=$pelerin[$i]['impaye'];
        $depenseTotale=$pelerin[$i]['depenses_total'];
        $situation=$pelerin[$i]['situation_final'];
        $statut=$pelerin[$i]['statut'];
        
        $intitulePel=$pelerinage['intitule_pel'];
        $intituleDep=$depense['intitule_dep'];

        
        $idPelerin=$pelerin[$i]['id_pelerin'];
       


    }

?>