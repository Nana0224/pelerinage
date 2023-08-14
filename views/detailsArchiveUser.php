<?php
require_once('../models/detailsUser.php');
?>

<?php

  include('templates/header.php');

?> 

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php
      include('templates/sidebar.php');
  ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <!-- Sidebar Toggle (Topbar) -->
         <!-- Topbar Navbar -->

            <?php

              include('templates/navbar.php');

            ?>

        <!-- End of Topbar -->


        <!-- Begin Page Content -->

         <?php

              include('templates/page_header.php');

          ?>     
        <div class="container-fluid">


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-secondary" style="text-align: center;">Détails utilisateur</h6>
            </div>
            <div class="card-body">
              <div class="row" style="padding: 50px;">
                <div class="col-4">
                    <h5><strong>Nom & Prénom utilisateur</strong></h5>
                    <h6><?php echo $nom; ?></h6>
                </div>
                <div class="col-4">
                    <h5><strong>Nom utilisateur</strong></h5>
                    <h6><?php echo $username; ?></h6>
                </div>
              
                <div class="col-4">
                    <h5><strong>Rôle utilisateur</strong></h5>
                    <h6><?php echo $role; ?></h6>
                </div>
                <div class="col-4">
                    <h5><strong>Statut utilisateur</strong></h5>
                    <h6><?php echo $statut; ?></h6>
                </div>
            </div>
            <!-- /.card -->

            <!-- general form elements -->
                <!-- /.card-footer -->
                <div class="card-footer">
                  <a href="../views/archiveUser.php"><button type='button' class="btn btn-danger float-right">Retour</button></a>
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
