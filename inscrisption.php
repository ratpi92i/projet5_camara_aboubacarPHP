<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <title>Page d'Inscription</title>
</head>
<body>
      
<div class="header">
<?php 
    include 'entete2.php'; 
    ?>

</div>
    
<div class="content">
   <div class="container1">
        <div class="image-container">
            <img src="images/conn1.png" alt="Image d'Inscription">
        </div>
        <div class="form-container">
            <h2>Inscription</h2>
            <form action="traitement_inscription.php" method="post">
                <div class="form-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" id="nom_user" name="nom_user" required>
                </div>
                <div class="form-group">
                    <label for="email">Adresse e-mail</label>
                    <input type="email" id="email_user" name="email_user" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">S'inscrire</button>

            </form>
            <div>
            <?php
              
                if (isset($_SESSION['messageErreur'])) {
                    echo '<div class="message-erreur">' . $_SESSION['messageErreur'] . '</div>';
                    unset($_SESSION['messageErreur']); 

                } elseif (isset($_SESSION['messageReussite'])) {
                    echo '<div class="message-reussite">' . $_SESSION['messageReussite'] . '</div>';
                    unset($_SESSION['messageReussite']); 
                }
                ?>
        </div>
            <p>Déjà un compte ? <a href="login.php">Connectez-vous ici</a></p>
        </div>
    
     

    </div>
</div>


</div>
</body>
</html>
