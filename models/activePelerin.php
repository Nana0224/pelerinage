<?php
require_once('../controllers/database_connexion.php');

	$idPelerin=$_GET['idPelerin'];
	$delete=$base->prepare("UPDATE pelerin SET statut='Actif' WHERE id_pelerin=:idPelerin");
	$delete->execute(array('idPelerin'=>$idPelerin));
	header('location:../views/archivePelerin.php');
	
?>