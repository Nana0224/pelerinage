<?php
require_once('../controllers/database_connexion.php');
session_start();
	
	$id=$_GET['id'];
	$delete=$base->prepare("UPDATE type_depense SET statut='Inactif' WHERE id_depense=:id");
	$delete->execute(array('id'=>$id));
	header('location:../views/listeDepense.php');
?>