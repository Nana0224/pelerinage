<?php
require_once('../controllers/database_connexion.php');
session_start();
	
	$idPelerin=$_GET['idPelerin'];
	$delete=$base->prepare("UPDATE pelerin SET statut='Inactif' WHERE id_pelerin=:idPelerin");
	$delete->execute(array('idPelerin'=>$idPelerin));
	header('location:../views/listePelerin.php');
?>