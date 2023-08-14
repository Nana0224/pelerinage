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

          <div class="col-md-12">
            <div>
                <div class="d-flex justify-content-end">
                  <button type="button" class="btn btn-sm me-3" data-toggle='modal' data-target='#ajout'><i class="fas fa-folder-plus">Ajouter</i></button>
                </div>
              </div>
            </div><br>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-secondary" style="text-align: center;">Liste des pélérins archivés</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>
           
                    <th>Nom & Prénom</th>
                    <th>Date naissance</th>
                    <th>Lieu naissance</th>
                    <th>Sexe</th>
                    <th>Profession</th>
                    <th>Numéro Passport</th>
                    <th>Téléphone</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                        require_once('../models/archivePelerin.php');
                    ?>
                  </tbody>
                </table>
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
