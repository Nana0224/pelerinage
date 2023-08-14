<?php
require_once('../controllers/database_connexion.php');

	$idUser=$_GET['idUser'];
	$delete=$base->prepare("UPDATE utilisateur SET statut='Actif' WHERE id_user=:idUser");
	$delete->execute(array('idUser'=>$idUser));
	header('location:../views/archiveUser.php');

?>