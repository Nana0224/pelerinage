<?php
require_once('../controllers/database_connexion.php');
session_start();

	$id=$_POST['id'];
	$nom=$_POST['nom'];

		$update=$base->prepare("UPDATE type_pelerinage SET intitule_pel=? WHERE id_pelerinage=?");
		$update->execute([$nom, $id]);
		unset($_POST);


		$_SESSION['Message_succes']="Modification réussie !!!";
		header('location:../views/archivePelerinage.php');
	

?>