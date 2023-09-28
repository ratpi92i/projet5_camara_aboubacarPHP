<?php include 'fonctions.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Page d'accueil</title>
</head>
<body>
    <?php 
    include 'entete2.php'; 
    ?>
    <section class="hero1">
        <div class="hero-content">
            <h1>BOBO-DIOULASSO</h1>
        </div>
    </section>



    <section class="tourist-sites">
  <h2>Sites Touristiques à Bobo-Dioulasso</h2>
  <div class="site-container">
   
    <div class="tourist-site">
    <?php echo afficherImageParID(1); ?>
      <h3> <?php echo afficherNomSiteParID(7);?> </h3>
      <p> <?php echo afficherDescriptionSiteParID(1);?></p>
      <a href="#">visiter</a>
    </div>


    <div class="tourist-site">
    <?php echo afficherImageParID(2); ?>
      <h3> <?php echo afficherNomSiteParID(2);?> </h3>
      <p> <?php echo afficherDescriptionSiteParID(2);?></p>
      <a href="#">visiter</a>
    </div>

    <div class="tourist-site">
    <?php echo afficherImageParID(3); ?>
      <h3> <?php echo afficherNomSiteParID(3);?> </h3>
      <p> <?php echo afficherDescriptionSiteParID(3);?></p>
      <a href="#">visiter</a>
    </div>
  </div>
</section>


      
<?php 
    include 'footer.php'; 
    ?>
</body>
</html>
