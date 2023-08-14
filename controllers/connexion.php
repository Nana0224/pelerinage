<?php
require_once('database_connexion.php');
if(isset($_POST['Connexion'])){
  extract($_POST);
  $req=$base->prepare('SELECT * FROM utilisateur WHERE username=? AND pass=?');
  $req->execute([$username,$pass]);
  $tab=$req->fetch();
  if($tab['username']==$username AND $tab['pass']==$pass){
    session_start();
    $_SESSION['user0']=$tab;
    if($tab['statut']=='Actif' && $tab['role_user'] == 'Administrateur' || $tab['role_user'] == 'Utilisateur'){

      header('location:views/dashboard.php');

    }  
    else{
      header('location:index.php?msg=2');
    }
}else{
    header('location:index.php?msg=1');
  }
}
?>