<?php
require_once('../controllers/database_connexion.php');
session_start();
$user0 = $_SESSION['user0'];
$tab=$_SESSION['user0'];
                
                if (empty($tab)) {
                  header("Location:../index.php");
                }else {
require_once('../controllers/count.php'); }
if ($user0['role_user'] == 'Administrateur') {
    echo '


    <!-- Sidebar -->
    <ul class="navbar-nav bg-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <img src="../img/Kaaba.jpg" style="width: 50px; height: 50px;" alt="KAABA" >
        <div class="sidebar-brand-text mx-3">KAABA</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="../views/dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span><strong>Dashboard</strong></span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interfaces
      </div>

      
      <li class="nav-item">
        <a class="nav-link collapsed" href="../views/listePelerin.php" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-user-friends"></i>
          <span><strong>Gestion pèlerins</strong></span>
        </a>
      </li>

    
      <li class="nav-item">
        <a class="nav-link collapsed" href="../views/listePelerinage.php"  aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fnav-icon fas fa-book"></i>
          <span><strong>Gestion pèlerinage</strong></span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="../views/listeDepense.php"  aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fnav-icon fas fa-book"></i>
          <span><strong>Gestion dépenses</strong></span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="../views/listeUser.php" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-user-friends"></i>
          <span><strong>Gestion utilisateurs</strong></span>
        </a>
      </li>



      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Archives
      </div>


      <li class="nav-item">
        <a class="nav-link collapsed" href="../views/archivePelerin.php" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-user-friends"></i>
          <span><strong>Pèlerins</strong></span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="../views/archivePelerinage.php" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fnav-icon fas fa-book"></i>
          <span><strong>Pèlerinage</strong></span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="../views/archiveDepense.php" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fnav-icon fas fa-book"></i>
          <span><strong>Dépenses</strong></span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="../views/archiveUser.php" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-user-friends"></i>
          <span><strong>Utilisateurs</strong></span>
        </a>
      </li>



      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>


      
    </ul>
    <!-- End of Sidebar -->

    

    
    ';
}

elseif ($user0['role_user'] == 'Utilisateur') {
  echo '


    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="https://www.lesahel.org/author/onep">
        <img src="../models/img/onep.jpg" style="width: 50px; height: 50px;" alt="ONEP Logo" >
        <div class="sidebar-brand-text mx-3">ONEP</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="../views/dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span><strong>Dashboard</strong></span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interfaces
      </div>

      
      <li class="nav-item">
        <a class="nav-link collapsed" href="../views/listeClient.php" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-user-friends"></i>
          <span><strong>Gestion clients</strong></span>
        </a>
      </li>

    
      <li class="nav-item">
        <a class="nav-link collapsed" href="../views/listeAbonn.php"  aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fnav-icon fas fa-book"></i>
          <span><strong>Gestion abonnements</strong></span>
        </a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Archives
      </div>


      <li class="nav-item">
        <a class="nav-link collapsed" href="../views/archiveClient.php" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-user-friends"></i>
          <span><strong>Clients</strong></span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="../views/archiveAbonn.php" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fnav-icon fas fa-book"></i>
          <span><strong>Abonnements</strong></span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>


      
    </ul>
    <!-- End of Sidebar -->



    ';
}

?>



