<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>sovabity</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/logo-mini.svg" />
</head>
<body>
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="Accueil.html"><img src="images/logo-mini.svg" alt="logo"/>SIAPP</a>
          <a class="navbar-brand brand-logo-mini" href="Accueil.html"><img src="images/logo-mini.svg" alt="logo"/></a>
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
              <img src="../../images/faces/ISSAM_Institut_Logo_200.png" alt="profile"/>
              <span class="nav-profile-name">Administrateur</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
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
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="Accueil_admi.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Accueil</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Identification_admi.php">
              <i class="mdi mdi-account-check"></i>
              <span class="menu-title">Identification</span>
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
            <a class="nav-link" href="charts_admi.php">
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
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                  <ul class="nav nav-tabs px-4" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="overview-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                  
                  </ul>
                  <div class="tab-content py-0 px-0">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                       
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-calendar-heart icon-lg me-3 text-primary"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Start date</small>
                            <div class="dropdown">
                              <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                <a class="dropdown-item" href="#">12 Aug 2018</a>
                                <a class="dropdown-item" href="#">22 Sep 2018</a>
                                <a class="dropdown-item" href="#">21 Oct 2018</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-eye me-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total views</small>
                            <h5 class="me-2 mb-0">9833550</h5>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- c'est ici que je dois  metre la fa??on dont les infos seront affich??es --> 
        <!-- 

         -->
         <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Informations d'identificaion</h4>
              <p class="card-description">
              <!-- Matricule :-->
              <!-- Code QR : <img src="" alt=""> QR code -->
              <label for=""> Donn??es biom??trique : </label><label for=""><!-- ici c'est les donn??es num??rique recup??r?? par le lecteur --></label>
              </p> 
              <p> <label for=""> <h2> Le seuil a ??t?? d??fini ?? : </h2></label><label for=""><h3 class="text-danger"><!-- le seuil que le dacc a defini --> <label for="">%</label></h3></label> </h2> </p>
              <div class="table-responsive pt-3">
                <div class="case2" style="display:flex; height: 30em;">
                <div class="bloc1" style="flex: 50%; margin-left: 10em; margin-top: 2em;">
                  <img src="images/ISSAM_Institut_Logo_200.png " alt=" photo" width="100%" height="100%"><!-- normalement c'est le lien enregistr?? dans la Bd qui doit ??tre l?? pour que la BD soit charg?? -->
                </div>
                <div class="bloc2" style=" margin-left: 10em; margin-top: 2em;">
                  <h1 class="text-primary" >Droit universitaire</h1><br>
                  <div class="cas"> 
                    <label for="">Ann??e scolaire :</label> <h2> <!-- Ann??e scolaire academique en cour --> </h2><br>
                    <label for="">Montant actuel :</label> <h2> <!-- montant de la pension actuelle --> </h2><br>
                    <label for="">Montant ?? pay?? :</label> <h2> <!-- ici on fait le" montant normal - le montant actuel de sa pension" --></h2>
                  </div> 
                    <div>
                      <label for="">Date de payement : </label><label for=""> <h2> <!-- la date de payement de la bd --></h2> </label>
                     <div class="form-check form-check-success">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" >
                          Termin??
                        </label>
                      </div> <h2> <!-- sp??cialit?? --> </h2>
                    </div>
                </div>
              </div>

              <div class="case1" style="display:flex; height: 40em;">
                <div class="bloc3" style="flex: 50%; margin-left: 0%;  margin-top: 2em; margin-left: 2em;"> 
                  <p>Graphe</p>
                  <div class="row">
                    <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Statistiques</h4>
                          <canvas id="pieChart"></canvas>
                        </div>
                      </div>
                    </div>
                    
                </div>
                </div>
                <div class="bloc4" style="margin-top: 2em; margin-left: 2em;"> 
                  <h1 class="text-primary">Informations </h1>
<div class="cas"> <label for="">Nom:</label> <h2><!-- ici c'est le nom --> </h2>
<label for="">Prenom :</label> <h2> <!-- le prenom --></h2>
<label for="">Sexe :</label> <h2> <!-- le sexe --></h2>
</div> 
<div>
  <label for="">Filiere : </label> <h2> <!-- la fili??re --></h2> 
  <label for="">Option :</label> <h2> <!-- sp??cialit?? --> </h2>
  <label for="">Niveau :</label> <h2> <!-- le niveau --> </h2>
</div>
<br>
                </div>
              </div>

              </div>
             <!-- les autres infos se rangent ici 

             <div id="toff"></div> <div ></div>
            </div>-->
          </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->
      <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ?? <a href="nous.html" target="_blank">SIAPP.com </a>2021</span>
       
      </div>
      </footer>
      <!-- partial -->
    </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ?? <a href="nous.html" target="_blank">SIAPP.com </a>2021</span>
         
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
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="../../vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/chart.js"></script>
  <!-- End custom js for this page-->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/data-table.js"></script>
  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->

  <script src="js/jquery.cookie.js" type="text/javascript"></script>
</body>

</html>

