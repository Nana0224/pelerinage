<?php
require_once('../controllers/database_connexion.php');
session_start();
	
	$id=$_GET['id'];
	$delete=$base->prepare("UPDATE type_pelerinage SET statut='Inactif' WHERE id_pelerinage=:id");
	$delete->execute(array('id'=>$id));
	header('location:../views/listePelerinage.php');
?>