<?php



  //         if(isset($_GET['motCle']))
	// 	$mc=$_GET['motCle'];
	// else
	// 	$mc="";
	
	// if(isset($_GET['ID_FILIERE']))
	// 	$idf=$_GET['ID_FILIERE'];
	// else
	// 	$idf=0;
		
	// if(isset($_GET['size']))
	// 	$size=$_GET['size'];
	// else
	// 	$size=4;
		
	// if(isset($_GET['page']))
	// 	$page=$_GET['page'];
	// else
	// 	$page=1;
			
	// $offset=($page-1)*$size;
	
	// if($idf==0){// TOUTES LES FILIERES
	// 	$resultat = $con->query("SELECT biometrique, nom ,montant,dateP
	// 							FROM etude
	// 							AND (NOM like '%$mc%' OR PRENOM like '%$mc%')
	// 							ORDER BY S.ID
	// 							LIMIT $size
	// 							OFFSET $offset");

	// 	$resultat2 = $con->query("select count(*) as nbreetu 
	// 							from STAGIAIRE 
	// 							where NOM like '%$mc%' OR PRENOM like '%$mc%'");
	// }
	// else{
	// 	$resultat = $con->query("SELECT *
	// 							FROM etude
	// 							WHERE filiere= $idf
	// 							AND (NOM like '%$mc%' OR PRENOM like '%$mc%')
	// 							ORDER BY montant desc
	// 							LIMIT $size
	// 							OFFSET $offset");

	// 	$resultat2 = $con->query("select count(*) as nbreetu 
	// 							from etude
	// 							where (NOM like '%$mc%' OR PRENOM like '%$mc%')
	// 							And ID_FILIERE=$idf");
	// }
	
	
	// $nbr=$resultat2->fetch();
	
	// $nbrPro=$nbr['nbreetu'];
	
	// $reste=$nbrPro % $size; //l'operateur % (modulo) retourne le reste de la 
	// 					// devision euclidienne de $nbrPro sur $size
	// if($reste==0)
	// 	$nbrPage=$nbrPro/$size;
	// else
	// 	$nbrPage=floor($nbrPro/$size)+1;// floor retourne la partie entière d'un nombre 
	// 									// decimale
										
	// $requetef="select * from filiere";
	// $resultatf = $con->query($requetef);
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Solvability</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
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
          <a class="navbar-brand brand-logo" href="Etudiant_re.html"><img src="images/logo-mini.svg" alt="logo"/>SIAPP</a>
          <a class="navbar-brand brand-logo-mini" href="Etudiant_re.html"><img src="images/logo-mini.svg" alt="logo"/></a>
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
              <input type="text" class="form-control" placeholder="Recherche" aria-label="search" aria-describedby="search">
              <button type="submit" class="btn btn-success">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
         
        
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="../../images/faces/face5.jpg" alt="profile"/>
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
      <!-- partial:../../partials/_sidebar.html -->
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
         
           
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tous les etudiants</h4>
                  <div style="display:flex">
                    <div>
                  <p class="card-description">
                  </p></div> <div class="btn-group-vertical" role="group" aria-label="Basic example" style="margin-left: 88%;">
                    <div class="btn-group">
                      <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Trier</button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item">Nom</a>
                        <a class="dropdown-item">Matricule</a>
                        <a class="dropdown-item">Spécialite</a>
                        <a class="dropdown-item">Niveau</a>
                        <a class="dropdown-item">sexe</a>
                        <a class="dropdown-item">Age</a>
                        <a class="dropdown-item">Solde</a>
                      </div>                          
                    </div>
                  </div>
                </div>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            User
                          </th>
                          <th>
                            Name
                          </th>
                            
                          <th>
                            adresse mail
                          </th>

                          <th>
                            poste
                          </th>
                          
                        </tr>
                      </thead>
                      <?php
                                                     try {
		
                                                      $con =new PDO('mysql:host=localhost;dbname=gestion_stagiaire2;charset=utf8', 'durandkushiki', '19D2503M');
                                                    
                                                    }catch (Exception $e){
                                                    die('Erreur : ' . $e->getMessage());
                                                    
                                                    die('Erreur : impossible de se connecter à la base de donnée');
                                                    }	
                                                    $reponse=$con->query("SELECT * FROM personnel");
                                                        while($donnees=$reponse->fetch()) 
                                                              {
                                                                ?>
                                                          
                      <tbody>
                        <tr>
                          <td class="py-1">
                            <img src="images/Photo_etudiant/<?php echo $donnees['photo']; ?> " alt="image"/>
                          </td>
                          <td>
                          <?php echo $donnees['nom_personnel']; ?>
                          </td>
                          <td>
                          <?php echo $donnees['adress_mail']; ?>
                          </td>
                          <td>
                          <?php echo $donnees['Poste']; ?>
                          </td>
                        </tr>
                        <?php
                              }
                        $pdo = null;
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="nous.html" target="_blank">SIAPP.com </a>2021</span>
        
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
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>