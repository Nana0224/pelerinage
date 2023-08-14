<?php
require_once('../controllers/database_connexion.php');
$idUser=$_GET['idUser'];
$user0=$base->prepare("SELECT * FROM utilisateur WHERE id_user=:idUser");
$user0->execute(array('idUser'=>$idUser));
$utilisa=$user0->fetch();

?>



<?php

  include('templates/header.php');

?>  

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

<!-- sidbar -->
<?php

  include('templates/sidebar.php');

?>  
<!-- sidbar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
          <?php

              include('templates/navbar.php');

          ?> 
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
       
           <?php

              include('templates/page_header.php');

          ?>

        
              <!-- Begin Page Content -->
      <!-- <section class="content"> -->       
        <div class="container-fluid">
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-secondary" style="text-align: center;">Modification de l'utilisateur</h6>
            </div>
              <form method="POST" action="../models/modifArchiveUser.php" enctype="multipart/form-data">
                <div class="card-body row">
                    <div class="form-group" hidden>
                    <input type="number" class="form-control" value="<?php echo $utilisa['id_user']; ?>" name="idUser" placeholder="Entrer identifiant utilisateur" required="">
                    </div>
                  <div class="form-group col-6">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" value="<?php echo $utilisa['nom']; ?>" name="nom" placeholder="Entrer nom utilisateur" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" value="<?php echo $utilisa['prenom']; ?>" name="prenom" placeholder="Entrer prénom utilisateur" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" value="<?php echo $utilisa['username']; ?>" name="username" placeholder="Username" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" value="<?php echo $utilisa['pass']; ?>" name="pass" placeholder="Password" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="role">Rôle</label>
                    <select class="form-control" name="roleUser" required>
                      <option selected value="<?php echo $utilisa['id_user']; ?>"><?php echo $utilisa['role_user']; ?></option>
                      <option>Administrateur</option>
                      <option>Utilisateur</option>

                    </select>
                  </div>
                  
                  
                <!-- /.card-body -->

                  <div class="card-footer col-12">
                    <button type="submit" class="btn btn-success" name="submit">Modifier</button> </form>
                    <a href="../views/archiveUser.php"><button type='button' class="btn btn-danger float-right">Annuler</button></a>
                  </div>
                </div>
              
          </div>

       
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      
       <?php
           include('templates/footer.php');
        ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



 <?php
     include('templates/js.php');
  ?>

</body>

</html>
