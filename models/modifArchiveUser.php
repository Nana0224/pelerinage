<?php
require_once('../controllers/database_connexion.php');
session_start();

	$idUser=$_POST['idUser'];
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$username=$_POST['username'];
	$pass=$_POST['pass'];
	$roleUser=$_POST['roleUser'];

		$update=$base->prepare("UPDATE utilisateur SET nom=?, prenom=?, username=?, pass=?, role_user=? WHERE id_user=?");
		$update->execute([$nom, $prenom, $username, $pass, $roleUser, $idUser]);
		unset($_POST); 

		$_SESSION['Message_succes']="Modification réussie !!!";
		header("Location:../views/archiveUser.php");

?>