<?php
require_once('../controllers/database_connexion.php');
session_start();


	$nom=$_POST['nom'];
	$statut=$_POST['statut'];



		$insertion=$base->prepare("INSERT INTO type_pelerinage(intitule_pel, statut) VALUES(?, ?)");
		$insertion->execute([$nom, $statut]);
		unset($_POST);

		$_SESSION['Message_succes']="Insertion réussie !!!";
		header('location:../views/listePelerinage.php');
?>