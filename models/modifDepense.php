<?php
require_once('../controllers/database_connexion.php');
session_start();

	$id=$_POST['id'];
	$nom=$_POST['nom'];


		$update=$base->prepare("UPDATE type_depense SET intitule_dep=? WHERE id_depense=?");
		$update->execute([$nom, $id]);
		unset($_POST);


		$_SESSION['Message_succes']="Modification réussie !!!";
		header('location:../views/listeDepense.php');
	

?>