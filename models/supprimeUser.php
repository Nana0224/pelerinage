<?php
require_once('../controllers/database_connexion.php');
session_start();

	
	$idUser=$_GET['idUser'];
	$delete=$base->prepare("UPDATE utilisateur SET statut='Inactif' WHERE id_user=:idUser");
	$delete->execute(array('idUser'=>$idUser));
	header('location:../views/listeUser.php');
?>