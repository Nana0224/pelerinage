<?php
require_once('../controllers/database_connexion.php');


$id=$_GET['id'];
$depense0=$base->prepare("SELECT * FROM type_depense WHERE id_depense=:id ");
$depense0->execute(array('id'=>$id));
$depense=$depense0->fetch();  


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
              <h6 class="m-0 font-weight-bold text-secondary" style="text-align: center;">Modification du type de dépense</h6>
            </div>
            
              <form method="POST" action="../models/modifArchiveDepense.php" enctype="multipart/form-data">
                <div class="card-body row">
                    <div class="form-group" hidden>
                    <input type="number" class="form-control" value="<?php echo $depense['id_depense']; ?>" name="id" placeholder="Entrer identifiant" required="">
                  </div>
               
                  <div class="form-group col-6">
                    <label for="nom">Intitulé de la dépense</label>
                    <input type="text" class="form-control" value="<?php echo $depense['intitule_dep']; ?>" name="nom"  required="">
                  </div> 
                  
                <!-- /.card-body -->

                  <div class="card-footer col-12">
                    <button type="submit" class="btn btn-success" name="submit">Modifier</button>
                </form>
                    <a href="../views/archiveDepense.php"><button type='button' class="btn btn-danger float-right">Annuler</button></a>
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
