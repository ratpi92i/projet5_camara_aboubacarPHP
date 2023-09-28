<?php include 'fonctions.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />

    <style>
              .sites-touristiques {
                display: flex;
                justify-content: space-between;
                align-items: center;
                flex-wrap: wrap;
                gap: 20px;
                padding: 20px;
            background: #fff;
                margin-top:14px;
              }

          
              .site-card {
                flex: 1;
                max-width: calc(33.33% - 20px);
                background-color: #fff;
                border-radius: 20px;
                padding: 20px;
                text-align: center;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                transition: transform 0.2s ease-in-out;
              }

              .site-card:hover {
                transform: scale(1.05);
              }

          
              .site-card img {
                width: 100%;
                height: auto;
                border-radius: 20px;
                margin-bottom: 10px;
              }

              
              .site-card h1 {
                font-size: 24px;
                margin-bottom: 10px;
                color: #333;
              }

          
              .site-card p {
                font-size: 16px;
                color: #666;
              }

              @media (max-width: 300px) {
            .sites-touristiques {
                flex-direction: column;
                align-items: center;
            }


            .site-card {
                flex: 1;
            
                max-width: 100%;
                margin-bottom: 20px;
            }
            
            .site-card:hover {
                transform: none;
              }

    </style>
    <title>Page d'accueil</title>
  </head>
  <body>
    <?php 
    include 'entete2.php'; 
    ?>
    <section class="hero3">
      <div class="hero-content">
        <h1>BANFORA</h1>
      </div>
    </section>

    <section class="sites-touristiques">
        <div class="site-card">
        <?php echo afficherImageParID(7); ?>
      <h1> <?php echo afficherNomSiteParID(7);?> </h1>
      <p> <?php echo afficherDescriptionSiteParID(7);?></p>
            </div>
        <div class="site-card">
        <?php echo afficherImageParID(8); ?>
      <h1> <?php echo afficherNomSiteParID(8);?> </h1>
      <p> <?php echo afficherDescriptionSiteParID(8);?></p>
       </div>
       <div class="site-card">
        <?php echo afficherImageParID(9); ?>
      <h1> <?php echo afficherNomSiteParID(9);?> </h1>
      <p> <?php echo afficherDescriptionSiteParID(9);?></p>
       </div>
    </section>

    <?php 
    include 'footer.php'; 
    ?>
  </body>
</html>
