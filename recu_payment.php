
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sovabity</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/logo-mini.svg" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="Accueil_scolarite.php"><img src="images/logo-mini.svg" alt="logo"/>SIAPP</a>
          <a class="navbar-brand brand-logo-mini" href="Accueil_scolarite.php"><img src="images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face5.jpg" alt="profile"/>
              <span class="nav-profile-name">Louis Barnett</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Paramètre
              </a>
              <a class="dropdown-item">
                <i class="mdi mdi-logout text-primary"></i>
                deconnexion
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="Accueil_scolarite.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Accueil</span>
            </a>
          </li>
          <!-- partial 
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>
          -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Enregistrement</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="Utlisateur.php">Personel</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/charts/chartjs.html">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Statistiques</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Etudiant_re.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Liste etudiants</span>
            </a>
          </li>
            <!-- partial 
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/mdi.html">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">Utilisateur</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <!-- <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Login </a></li> -->
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login-2.html"> Login 2 </a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/lock-screen.html"> Lockscreen </a></li> -->
              </ul>
            </div>
          </li>
          <!-- partial 
          <li class="nav-item">
            <a class="nav-link" href="documentation/documentation.html">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>

          -->
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">


          <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Recu de payement vision finance</h4>
                  <p class="card-description">
                    Remplissez les champs
                  </p>
                  <form class="forms-sample" action="new_recu.php" method="POST">

                  <div class="form-group">
                      <label for="exampleInputEmail3">Code recu </label>
                      <input type="email" class="form-control" id="exampleInputEmail3" placeholder="code reçu"  required="required" name="cde">
                    </div>
                    <!-- $code=htmlspecialchars($_POST['cde']); -->
                    <div class="form-group">
                      <label for="exampleInputCity1">Matricule </label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Matricule  personnel"  required="required" name="matpers">
                    </div>
                    <!-- $matri=htmlspecialchars($_POST['matpers']); -->
                    
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                      </div>
                      <input type="text" class="form-control" placeholder="Username" aria-label="Username"  required="required" name="user">
                    </div>
                  </div>
                  <!-- $nom=htmlspecialchars($_POST['user']); -->
                  <div class="form-group">
                      <label for="exampleInputCity1">code étudiant</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="code etudiant"  required="required" name="matetu">
                    </div>
                    <!-- $maetu=htmlspecialchars($_POST['matetu']); -->

                    <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white">$</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"  required="required" placeholder="Montant reçu payement" name="mtnrecu">
                      <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                      </div>
                    </div>
                  </div>
                  <!-- $newsolde=htmlspecialchars($_POST['mtnrecu']); -->
                  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date modification des droits </label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="dd/mm/yyyy"/ name="datedtroi"  required="required">
                          </div>
                        </div>
                      </div>
                      <!-- $soldate=htmlspecialchars($_POST['datedtroi']); -->
                    
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
                
         
          </div>
        </div>

        <!-- utile pour le php
          $_POST['nom'];
$_POST['Lnom'];
$_POST['gsex'];
$_POST['dburn'];
$_POST['fere'];
$_POST['level'];
$_POST['img[]'];
$_POST['Mat'];
$_POST['dqr'];
$_POST['digi'];
$_POST['mtvers'];
$_POST['dpaid'];
$_POST['adres'];
$_POST['town'];
$_POST['pays'];
         -->
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
        </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/file-upload.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
