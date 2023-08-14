<?php
require_once('../controllers/database_connexion.php');

	$id=$_GET['id'];
	$delete=$base->prepare("UPDATE type_depense SET statut='Actif' WHERE id_depense=:id");
	$delete->execute(array('id'=>$id));
	header('location:../views/archiveDepense.php');
	
?>