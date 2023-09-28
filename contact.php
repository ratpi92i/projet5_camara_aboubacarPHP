<?php include 'fonctions.php';

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulaire de Contact</title>
    <style>
      .container {
        max-width: 400px;
        margin: 30px auto;

        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        text-align: center;
        box-shadow: 5px 4px 10px rgba(0, 0, 0, 0.6);
      }

      label {
        display: block;
        margin-bottom: 5px;
      }

      input[type="text"],
      input[type="email"] {
        width: 100%;
        padding: 10px;
        margin-left: -10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      input[type="submit"] {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }
    </style>
    
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <?php 
    include 'entete2.php'; 
    ?>
    <section class="hero6">
      <div class="hero-content">
        <h1>CONTACT</h1>
      </div>
    </section>

    <div class="container">
      <h1>Contactez-nous</h1>
      <form action="traitement.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required /><br />

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required /><br />

        <label for="email">Adresse Email :</label>
        <input type="email" id="email" name="email" required /><br />

        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="4" required></textarea
        ><br />

        <input type="submit" value="Envoyer" />
      </form>
    </div>

    <script src="script.js"></script>

    <?php 
    include 'footer.php'; 
    ?>
  </body>
</html>
