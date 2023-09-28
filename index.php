<?php include 'fonctions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    
    <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   
  
    <style>
      .navbar-nav .nav-link {
        color: green; 
        transition: color 0.3s;
    }
    .navbar-nav .nav-link:hover {
        color: rgb(239, 255, 20);
    }
    .navbar-nav .btn {
        margin-left: 15px; 
    }
    </style>
    <title>Page d'accueil</title>
</head>
<body class="main-layout home_page">
    <?php 
    include 'entete2.php'; 
    ?>
    
 
    <section class="slider_section">

        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
           <div class="carousel-inner">
              <div class="carousel-item active">
                 <img class="first-slide" src="images/vue.jpg" alt="First slide" >
                 <div class="container">
                    <div class="carousel-caption relative">
                       <h1 style="color: black;">SITE DE TOURISME AU BURKINA FASO<br></h1>
                       <p></p>
                       <div class="button_section"> <a class="main_bt" href="contact.php">contact</a>  </div>
                       <ul class="locat_icon">
                          <li> <a href="#"><img src="icon/facebook.png"></a></li>
                          <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                          <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                       
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="carousel-item">
                 <img class="second-slide" src="images/services.jpeg" alt="Second slide">
                 <div class="container">
                    <div class="carousel-caption relative">
                       <h1 style="color: black;">Venez decouvrir de merveilleux sites<br></h1>
                       <p></p>
                       <div class="button_section"> <a class="main_bt" href="contact.php">contact</a> </div>
                       <ul class="locat_icon">
                          <li> <a href="#"><img src="icon/facebook.png"></a></li>
                          <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                          <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                          <li> <a href="#"><img src="icon/instagram.png"></a></li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="carousel-item">
                 <img class="third-slide" src="images/bann.jpg" alt="Third slide">
                 <div class="container">
                    <div class="carousel-caption relative">
                       <h1 style="color: rgb(243, 244, 248);">ENVIE DE VOUS RESSOURCER <br> burkina destination de reve!</h1>
                       <p></p>
                       <div class="button_section"> <a class="main_bt" href="contact.php">contact</a> </div>
                       
                       <ul class="locat_icon">
                          <li> <a href="#"><img src="icon/facebook.png"></a></li>
                          <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                          <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                        
                       </ul>
                    </div>
                 </div>
              </div>
           </div>
           <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
           </a>
           <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
           </a>
        </div>
     </section>



<section class="ville">
<?php afficherImageVilleParNom("BOBO-DIOULASSO");?>
    <div class="infos">
        <h1>   <?php echo afficherNomVilleParID(1)?></h1>
        <p> <?php echo afficherDescriptionVilleParNom("BOBO-DIOULASSO");?></p>
        <a href="bobo.php" class="bouton">Voir plus</a>
    </div>
</section>

<section class="ville">
        <div class="infos">
        <h1>   <?php echo afficherNomVilleParID(2)?></h1>
        <p> <?php echo afficherDescriptionVilleParNom("OUAGADOUGOU");?></p>
        <a href="ouaga.php" class="bouton">Voir plus</a>
            </div>
            <?php afficherImageVilleParNom("OUAGADOUGOU");?>
  
</section>

<section class="ville">
<?php afficherImageVilleParNom("BANFORA");?>
    <div class="infos">
    <h1>   <?php echo afficherNomVilleParID(3)?></h1>
    <p> <?php echo afficherDescriptionVilleParNom("BANFORA");?></p>    
    <a href="banfora.php" class="bouton">Voir plus</a>
    </div>
</section>


    
  


    


     <script src="js/jquery.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/bootstrap.bundle.min.js"></script>
     <script src="js/jquery-3.0.0.min.js"></script>
     <script src="js/plugin.js"></script>
     
     <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
     <script src="js/custom.js"></script>
     <?php 
    include 'footer.php'; 
    ?>
</body>
</body>
</html>
