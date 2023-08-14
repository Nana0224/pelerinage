<?php
require_once('../controllers/database_connexion.php');
session_start();

	//$idUser=$_POST['idUser'];
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$username=$_POST['username'];
	$pass=$_POST['pass'];
	$roleUser=$_POST['roleUser'];
	$statut=$_POST['statut'];


		$insertion=$base->prepare("INSERT INTO utilisateur(nom, prenom, username, pass, role_user,statut) VALUES(?,?,?,?,?,?)");
		$insertion->execute([$nom, $prenom, $username, $pass, $roleUser, $statut]);
		unset($_POST); 

		$_SESSION['Message_succes']="Insertion réussie !!!";
		header("Location:../views/listeUser.php");

?>