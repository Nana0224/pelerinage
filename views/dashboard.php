<?php
require_once('../controllers/count.php');
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

          <!-- Content Row -->
          <div class="row">

             <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Liste des utilisateurs</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center;"><?php echo  $user; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Liste des pélérins</div> 
                      <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center;"><?php echo  $total; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Somme</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center;"><?php echo  $verse .' FCFA'; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book  fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Bénéfices</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center;"><?php echo  $benefice .' FCFA'; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
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


<!-- js -->
<?php

  include('templates/js.php');
?>  
<!-- js -->
  

</body>

</html>
