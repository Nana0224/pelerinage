<?php
require_once('../controllers/database_connexion.php');
session_start();

	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$dateNaissance=$_POST['dateNaissance'];
	$lieuNaissance=$_POST['lieuNaissance'];
	$genre=$_POST['genre'];
	$prof=$_POST['prof'];
	$passport=$_POST['passport'];
	$tel=$_POST['tel'];
	$verse=$_POST['verse'];
	$totauxVerse=$_POST['totauxVerse'];
	$totalPaye=$_POST['totalPaye'];
	$impay=$_POST['impay'];
	$depenseTotale=$_POST['depenseTotale'];
	$situation=$_POST['situation'];
	$statut=$_POST['statut'];
	$idPelerinage=$_POST['idPelerinage'];
	$idDepense=$_POST['idDepense'];
	
	
		$insertion=$base->prepare("INSERT INTO pelerin(nom,prenom, date_naissance, lieu_naissance, sexe, profession, numero_passport, telephone, versement, totaux_versement, total_paye,impaye, depenses_total, situation_final, statut, id_pelerinage, id_depense) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$insertion->execute([$nom, $prenom, $dateNaissance, $lieuNaissance, $genre, $prof, $passport, $tel, $verse, $totauxVerse, $totalPaye, $impay, $depenseTotale, $situation, $statut, $idPelerinage, $idDepense]);
		unset($_POST);


		$_SESSION['Message_succes']="Insersion réussie !!!";
		header('location:../views/listePelerin.php');

?>