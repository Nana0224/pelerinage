<?php
require_once('database_connexion.php');

//Tous les pelerins
	$pelerin_total = "SELECT count(*) FROM pelerin";
    $total_pelerin = $base->query($pelerin_total);
    $total = $total_pelerin->fetchColumn();


//Tous les utilisateurs
    $user_total = "SELECT count(*) FROM utilisateur";
    $total_user = $base->query($user_total);
    $user = $total_user->fetchColumn();   



//Total des versements
    $verse_total = "SELECT sum(totaux_versement) FROM pelerin";
    $total_verse = $base->query($verse_total);
    $verse = $total_verse->fetchColumn(); 


//Total des bénéfices
    $benefice_total = "SELECT sum(totaux_versement-depenses_total) FROM pelerin";
    $total_benefice = $base->query($benefice_total);
    $benefice = $total_benefice->fetchColumn(); 
   

?>
