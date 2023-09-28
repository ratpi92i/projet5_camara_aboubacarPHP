<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo_min.png">
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link href="css/morris.css" rel="stylesheet">
 
    <link href="css/style.min.css" rel="stylesheet">
  
    <link href="css/dashboard4.css" rel="stylesheet">
    <title> Administrateur</title>
 
 
</head>

<body class="skin-blue fixed-layout">

 
    <div id="main-wrapper">
      
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
             
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                       <b>
                            
                            <img src="images/logo_min.png" alt="homepage" class="dark-logo" />
                    
                            <img src="images/logo_min.png" alt="BF-tourisme" class="light-logo" />
                        </b>
                    <span>
                    
                         <img src="images/logo.png" alt="homepage" class="dark-logo" />
                    
                         <img src="images/logo.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
      
                <div class="navbar-collapse">
                  
                    <ul class="navbar-nav mr-auto">
                  
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="#"><i class="fas fa-bars"></i></a> </li>

                      
                    </ul>
    
                    <ul class="navbar-nav my-lg-0">
                     
               
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="images/admin.jpg" alt="user" class="">
                                <span class="hidden-md-down">CAMARA &nbsp;<i class="fas fa-angle-down"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <a href="logout.php" class="dropdown-item"><i class="fas fa-power-off"></i> Deconnexion</a>
                            </div>
                        </li>
                        

                        <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="fas fa-hand-peace"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
      
   
        <aside class="left-sidebar">
                           <div class="scroll-sidebar">
              
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="images/admin.jpg" alt="user-img" class="img-circle"><span class="hide-menu">Administrateur</span></a>
                            <ul aria-expanded="false" class="collapse">
                            
                                <li><a href="logout.php"><i class="fa fa-power-off"></i> Deconnexion</a></li>
                            </ul>
                        </li>
              
                        <li class="nav-small-cap">MENU</li>
                    
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-user"></i><span class="hide-menu">Utilisateurs</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">voir</a></li>
                             
                     
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-globe"></i><span class="hide-menu">Villes</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Voir</a></li>
                              
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-map"></i><span class="hide-menu">sites</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">voir</a></li>
                           
                            </ul>
                        </li>
                   
                     </ul>
                </nav>
             
            </div>
       
        </aside>
       
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid"> 
                  
            <img src="images/logo.png" alt="" srcset="">

            </div>

         
        </div>
  
     
        <footer class="footer">
             © 2023 CAMARA Aboubacar / BF-TOURISME. Tous droits réservés.
        </footer>
     
    </div>

    <script src="js2/jquery-3.2.1.min.js"></script>

    <script src="js2/popper.min.js"></script>
    <script src="js2/bootstrap.min.js"></script>

    <script src="js2/perfect-scrollbar.jquery.min.js"></script>

    <script src="js2/waves.js"></script>
   
    <script src="js2/sidebarmenu.js"></script>
  
    <script src="js2/custom.min.js"></script>

    <script src="js2/skycons.js"></script>
    <script src="bootstrap.min.js"></script>


    <script src="js2/raphael-min.js"></script>

    <script src="js2/jquery.sparkline.min.js"></script>

    <script src="js2/dashboard4.js"></script>
    <script src="script.js"></script>
</body>

</html>