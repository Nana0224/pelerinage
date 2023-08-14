<?php
require_once('../models/detailsPelerin.php');
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
              <h6 class="m-0 font-weight-bold text-secondary" style="text-align: center;">Détails pèlerin</h6>
            </div>
            <div class="card-body">
              <div class="row" style="padding: 50px;">
                <div class="col-4">
                    <h5><strong>Nom et Prénom client</strong></h5>
                    <h6><?php echo $nom; ?></h6>
                </div>
                <div class="col-4">
                    <h5><strong>Date naissance</strong></h5>
                    <h6><?php echo $dateNaissance; ?></h6>
                </div>
                <div class="col-4">
                    <h5><strong>Lieu naissance</strong></h5>
                    <h6><?php echo $lieuNaissance; ?></h6>
                </div>
                <div class="col-4">
                    <h5><strong>Genre</strong></h5>
                    <h6><?php echo $genre; ?></h6>
                </div>
                <div class="col-4">
                    <h5><strong>Profession</strong></h5>
                    <h6><?php echo $prof; ?></h6>
                </div>
                <div class="col-4">
                    <h5><strong>Numéro passport</strong></h5>
                    <h6><?php echo $passport; ?></h6>
                </div>
                <div class="col-4">
                    <h5><strong>Téléphone</strong></h5>
                    <h6><?php echo $tel; ?></h6>
                </div>
                <div class="col-4">
                    <h5><strong>Versement</strong></h5>
                    <h6><?php echo $verse; ?></h6>
                </div>
                <div class="col-4">
                    <h5><strong>Totaux versement</strong></h5>
                    <h6><?php echo $totauxVerse; ?></h6>
                </div>
                <div class="col-4">
                    <h5><strong>Total payé</strong></h5>
                    <h6><?php echo $totalPaye; ?></h6>
                </div>
                <div class="col-4">
                    <h5><strong>Impayé</strong></h5>
                    <h6><?php echo $impay; ?></h6>
                </div>
                <div class="col-4">
                    <h5><strong>Dépenses totales</strong></h5>
                    <h6><?php echo $depenseTotale; ?></h6>
                </div>
                <div class="col-4">
                    <h5><strong>Situation finale</strong></h5>
                    <h6><?php echo $situation; ?></h6>
                </div>
                <div class="col-4">
                    <h5><strong>Statut</strong></h5>
                    <h6><?php echo $statut; ?></h6>
                </div>
                <div class="col-4">
                    <h5><strong>Type pèlerinage</strong></h5>
                    <h6><?php echo $intitulePel; ?></h6>
                </div>
                <div class="col-4">
                    <h5><strong>Type dépense</strong></h5>
                    <h6><?php echo $intituleDep; ?></h6>
                </div>

            </div>
            <!-- /.card -->

            <!-- general form elements -->
                <!-- /.card-footer -->
                <div class="card-footer">
                  <button type="" class="btn btn-danger" onclick="history.go(-1)">Retour</button>
                  
                </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

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

<!-- jQuery -->

 <?php
     include('templates/js.php');
  ?>

</body>
</html>
