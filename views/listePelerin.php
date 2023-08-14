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
              <h6 class="m-0 font-weight-bold text-secondary" style="text-align: center;">Liste des pélérins</h6>
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
                        require_once('../models/listePelerin.php');
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


     
    <!-- Page modale ajout nouveau client -->
  <div class="modal fade" id="ajout" tab-index="-1" aria-hidden="true" area-labelledby="ajouter" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content modal-md">

                <div class="modal-header"><i class="glyphicon glyphicon-pencil"></i>&nbsp;Nouvel pèlerins
                <button type="button" class="close" data-dismiss="modal" area-hidden="true">&times;</button></div>
            <div class="modal-body">

                <form method="POST" action="../models/ajoutPelerin.php" enctype="multipart/form-data">
                <div class="card-body row">
                  <div class="form-group col-6">
                    <label for="nom">Nom du pèlerin</label>
                    <input type="text" class="form-control" name="nom" placeholder="Entrer nom du pèlerin" required>
                  </div>
                  <div class="form-group col-6">
                    <label for="prenom">Prénom du pèlerin</label>
                    <input type="text" class="form-control" name="prenom" placeholder="Entrer prenom du pèlerin" required>
                  </div>
                  <div class="form-group col-6">
                    <label for="dateNaissance">Date naissance</label>
                    <input type="date" class="form-control" name="dateNaissance" placeholder="Entrer la date de naissance" required>
                  </div>
                  <div class="form-group col-6">
                    <label for="lieuNaissance">Lieu naissance</label>
                    <input type="text" class="form-control" name="lieuNaissance" placeholder="Entrer le lieu de naissance" required>
                  </div>
                  <div class="form-group col-6">
                    <label for="genre">Genre</label>
                    <input type="text" class="form-control" name="genre" placeholder="Entrer le genre" required>
                  </div>
                  <div class="form-group col-6">
                    <label for="prof">Profession</label>
                    <input type="text" class="form-control" name="prof" placeholder="Entrer la profession" required>
                  </div>
                  <div class="form-group col-6">
                    <label for="passport">Numéro passport</label>
                    <input type="text" class="form-control" name="passport" placeholder="Entrer le numéro du passport" required>
                  </div>
                  <div class="form-group col-6">
                    <label for="tel">Téléphone</label>
                    <input type="text" class="form-control" name="tel" placeholder="Entrer le téléphone" required>
                  </div>
                  <div class="form-group col-6">
                    <label for="verse">Versement</label>
                    <input type="number" class="form-control" name="verse" placeholder="Entrer le montant du versement" required>
                  </div>
                  <div class="form-group col-6">
                    <label for="totauxVerse">Totaux versement</label>
                    <input type="number" class="form-control" name="totauxVerse" placeholder="Entrer totaux versement" required>
                  </div>
                  <div class="form-group col-6">
                    <label for="totalPaye">Total payé</label>
                    <input type="number" class="form-control" name="totalPaye" placeholder="Entrer total payé" required>
                  </div>
                  <div class="form-group col-6">
                    <label for="impay">Impayé</label>
                    <input type="number" class="form-control" name="impay" placeholder="Entrer l'impayé" required>
                  </div>
                  <div class="form-group col-6">
                    <label for="depenseTotale">Dépenses totales</label>
                    <input type="number" class="form-control" name="depenseTotale" placeholder="Entrer dépenses totales" required>
                  </div>
                  <div class="form-group col-6">
                    <label for="situation">Situaion finale </label>
                    <input type="text" class="form-control" name="situation" placeholder="Entrer la situation finale" required>
                  </div>
                  <div class="form-group col-6">
                    <label for="idPelerinage">Type pèlerinage</label>
                    <select class="form-control" name="idPelerinage" required>
                      <?php
                      require_once('../controllers/database_connexion.php');
                       $pelerinage0=$base->prepare("SELECT * FROM type_pelerinage");
                       $pelerinage0->execute();
                       $pelerinage=$pelerinage0->fetchall();
                       for($i=0; $i<count($pelerinage); $i++){
                         $idPelerinage=$pelerinage[$i]['id_pelerinage'];
                         $intitulePel=$pelerinage[$i]['intitule_pel'];
                         echo "<option value= '$idPelerinage'>$intitulePel</option>";
                       }
                      ?>
                    </select>
                  </div>
                  <div class="form-group col-6">
                    <label for="idDepense">Type dépense</label>
                    <select class="form-control" name="idDepense" required>
                      <?php
                      require_once('../controllers/database_connexion.php');
                       $depense0=$base->prepare("SELECT * FROM type_depense");
                       $depense0->execute();
                       $depense=$depense0->fetchall();
                       for($i=0; $i<count($depense); $i++){
                         $idDepense=$depense[$i]['id_depense'];
                         $intituleDep=$depense[$i]['intitule_dep'];
                         echo "<option value= '$idDepense'>$intituleDep</option>";
                       }
                      ?>
                    </select>
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
