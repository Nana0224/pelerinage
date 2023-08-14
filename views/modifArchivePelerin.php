<?php
require_once('../controllers/database_connexion.php');
$idPelerin=$_GET['idPelerin'];
$pelerin0=$base->prepare("SELECT * FROM pelerin P, type_pelerinage TP, type_depense TD WHERE id_pelerin=:idPelerin 
and P.id_depense=TD.id_depense
and P.id_pelerinage=TP.id_pelerinage");
$pelerin0->execute(array('idPelerin'=>$idPelerin));
$pelerin=$pelerin0->fetch();



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
              <h6 class="m-0 font-weight-bold text-success" style="text-align: center;">Modification du pèlerin</h6>
            </div>
              <form method="POST" action="../models/modifArchivePelerin.php">
                <div class="card-body row">
                  <div class="form-group" hidden>
                    <input type="number" class="form-control" value="<?php echo $pelerin['id_pelerin']; ?>" name="idPelerin" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="nom">Nom du pèlerin</label>
                    <input type="text" class="form-control" value="<?php echo $pelerin['nom']; ?>" name="nom"  required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="prenom">Prénom du pèlerin</label>
                    <input type="text" class="form-control" value="<?php echo $pelerin['prenom']; ?>" name="prenom"  required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="dateNaissance">Date naissance</label>
                    <input type="date" class="form-control" value="<?php echo $pelerin['date_naissance']; ?>" name="dateNaissance" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="lieuNaissance">Lieu naissance</label>
                    <input type="text" class="form-control" value="<?php echo $pelerin['lieu_naissance']; ?>" name="lieuNaissance" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="genre">Genre</label>
                    <input type="text" class="form-control" value="<?php echo $pelerin['sexe']; ?>" name="genre" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="prof">Profession</label>
                    <input type="text" class="form-control" value="<?php echo $pelerin['profession']; ?>" name="prof" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="passport">Numéro passport</label>
                    <input type="text" class="form-control" value="<?php echo $pelerin['numero_passport']; ?>" name="passport" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="tel">Téléphone</label>
                    <input type="text" class="form-control" value="<?php echo $pelerin['telephone']; ?>" name="tel" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="verse">Versement</label>
                    <input type="number" class="form-control" value="<?php echo $pelerin['versement']; ?>" name="verse" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="totauxVerse">Totaux versement</label>
                    <input type="number" class="form-control" value="<?php echo $pelerin['totaux_versement']; ?>" name="totauxVerse" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="totalPaye">Total payé</label>
                    <input type="number" class="form-control" value="<?php echo $pelerin['total_paye']; ?>" name="totalPaye" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="impay">Impayé</label>
                    <input type="number" class="form-control" value="<?php echo $pelerin['impaye']; ?>" name="impay" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="depenseTotale">Dépenses totales</label>
                    <input type="number" class="form-control" value="<?php echo $pelerin['depenses_total']; ?>" name="depenseTotale" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="situation">Situation finale</label>
                    <input type="text" class="form-control" value="<?php echo $pelerin['situation_final']; ?>" name="situation" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="idPelerinage">Type pèlerinage</label>
                    <input type="text" class="form-control" value="<?php echo $pelerin['intitule_pel']; ?>" name="idPelerinage" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="idDepense">Type dépense</label>
                    <input type="text" class="form-control" value="<?php echo $pelerin['intitule_dep']; ?>" name="idDepense" required="">
                  </div>
                  
                 
                <!-- /.card-body -->

                  <div class="card-footer col-12">
                    <button type="submit" class="btn btn-success" name="submit">Modifier</button> </form>
                    <a href="../views/archivePelerin.php"><button type='button' class="btn btn-danger float-right">Annuler</button></a>
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
