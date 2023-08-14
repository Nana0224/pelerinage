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
              <h6 class="m-0 font-weight-bold text-secondary" style="text-align: center;">Liste des catégories de pélérinage</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>
           
                    <th>Intitulé</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                        require_once('../models/listePelerinage.php');
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


         <!-- Page modale ajout nouvel pélérinage -->
          <div class="modal fade" id="ajout" tab-index="-1" aria-hidden="true" area-labelledby="ajouter" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content modal-md">

                        <div class="modal-header"><i class="glyphicon glyphicon-pencil"></i>&nbsp;Nouvel pélérinage
                        <button type="button" class="close" data-dismiss="modal" area-hidden="true">&times;</button></div>
                    <div class="modal-body">

                        <form method="POST" action="../models/ajoutPelerinage.php" enctype="multipart/form-data">
                        <div class="card-body row">
                           
                         
                            <div class="form-group col-6">
                                <label for="nom">Intitulé</label>
                                <input type="text" class="form-control" name="nom" placeholder="Entrer l'intitulé du pélérinage" required>
                            </div>
                            <div class="form-group col-6">
                              <label for="statut">Statut</label>
                              <select class="form-control" name="statut" required>
                                <option>Actif</option>
                                <option>Inactif</option>
                              </select>
                          </div>
                            
                          </div> 
                            <div class="card-footer col-12">
                              <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-save"></i>&nbsp;Enregistrer</button>
                              <button type="reset" class="btn btn-danger float-right"><i class="glyphicon glyphicon-repeat"></i>&nbsp;Annuler</button>
                            </div>
                      </form>
                    </div>
                </div>
                                   
            </div>
          </div>    
        <!-- Fin du module -->

 <?php
     include('templates/js.php');
  ?>

</body>

</html>
