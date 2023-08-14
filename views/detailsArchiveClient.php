<?php
require_once('../models/detailsClient.php');
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
              <h6 class="m-0 font-weight-bold text-success" style="text-align: center;">Détails client</h6>
            </div>
            <div class="card-body">
              <div class="row" style="padding: 50px;">
                <div class="col-4">
                    <h5><strong>Nom et Prénom client</strong></h5>
                    <h6><?php echo $nom; ?></h6>
                </div>
                <div class="col-4">
                    <h5><strong>Email client</strong></h5>
                    <h6><?php echo $email; ?></h6>
                </div>
                <div class="col-4">
                    <h5><strong>Statut</strong></h5>
                    <h6><?php echo $statut; ?></h6>
                </div>

            </div>
            <!-- /.card -->

            <!-- general form elements -->
                <!-- /.card-footer -->
                <div class="card-footer">
                  <a href="../views/archiveClient.php"><button type='button' class="btn btn-danger float-right">Retour</button></a>
                  <button type="button" class="btn btn-sm me-3 float-right" data-toggle='modal' data-target='#ajout'><i class="fas fa-folder-plus">Ajouter</i></button>
                </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->



        <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success" style="text-align: center;">Liste des abonnements du client</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                 <tr>
           
                    <th>Formule</th>
                    <th>Début</th>
                    <th>Fin</th>
                    <th>Statut</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                        require_once('../models/abonnClient.php');
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


 <!-- Page modale ajout nouvel abonnement -->
      <div class="modal fade" id="ajout" tab-index="-1" aria-hidden="true" area-labelledby="ajouter" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content modal-md">

                      <div class="modal-header"><i class="glyphicon glyphicon-pencil"></i>&nbsp;Nouvel abonnement
                      <button type="button" class="close" data-dismiss="modal" area-hidden="true">&times;</button></div>
                  <div class="modal-body">

                      <form method="POST" action="../models/ajoutAbonn.php" enctype="multipart/form-data">
                      <div class="card-body row">
                         
                    <div class="form-group" hidden>
                    <input type="number" class="form-control" value="<?php echo $idClient; ?>" name="idClient" placeholder="Entrer identifiant client" required="">
                  </div>
                        <div class="form-group col-6">
                          <label for="statut">Formule de l'abonnement</label>
                          <select class="form-control" name="formule" required>
                            <option>3 mois</option>
                            <option>6 mois</option>
                            <option>12 mois</option>
                          </select>
                        </div>
                          <div class="form-group col-6">
                              <label for="debut">Date début de l'abonnement</label>
                              <input type="date" class="form-control" name="debut" placeholder="Entrer le début de l'abonnement" required>
                          </div>
                          <div class="form-group col-6">
                              <label for="fin">Date fin de l'abonnement</label>
                              <input type="date" class="form-control" name="fin" placeholder="Entrer le début de l'abonnement" required>
                          </div>
                           
                        
                      <br>
                          <div class="form-group col-12">
                            <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-save"></i>&nbsp;Enregistrer</button>
                            <button type="reset" class="btn btn-danger" ><i class="glyphicon glyphicon-repeat"></i>&nbsp;Annuler</button>
                          </div>
                    </form>
                  </div>
              </div>
                                 
          </div>
      </div>    
      <!-- Fin du module -->


<!-- jQuery -->

 <?php
     include('templates/js.php');
  ?>

</body>
</html>
