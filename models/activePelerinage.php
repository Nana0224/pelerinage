<?php
require_once('../controllers/database_connexion.php');

	$id=$_GET['id'];
	$delete=$base->prepare("UPDATE type_pelerinage SET statut='Actif' WHERE id_pelerinage=:id");
	$delete->execute(array('id'=>$id));
	header('location:../views/archivePelerinage.php');
	
?>