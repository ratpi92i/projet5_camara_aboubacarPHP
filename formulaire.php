<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bootstrap.min.css">

    <title>Document</title>
</head>
<body>
    



<div class="content">
    <div class="container1">
        <div class="image-container">
            <img src="images/conn2.png" alt="Image de Connexion">
        </div>
        <div class="form-container">
            <h2>Connexion</h2>
            <form action="traitement_connexion.php" method="POST">
                <div class="form-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Se connecter</button>
            </form>
            <p>Pas encore de compte ? <a href="inscrisption.php">Inscrivez-vous ici</a></p>
            <div>
</body>
</html>