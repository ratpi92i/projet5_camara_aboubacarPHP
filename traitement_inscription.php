<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom_user"];
    $email = $_POST["email_user"];
    $password = $_POST["password"];

    $serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $base_de_donnees = "tourisme";

    $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

    if ($connexion->connect_error) {
        die("La connexion à la base a échoué : " . $connexion->connect_error);
    }

    $verification = "SELECT * FROM utilisateurs WHERE nom_user = ? AND email_user = ?";
    $requete = $connexion->prepare($verification);
    $requete->bind_param("ss", $nom, $email);
    $requete->execute();
    $result = $requete->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['messageErreur'] = "L'utilisateur existe déjà. Veuillez choisir un nom d'utilisateur ou une adresse e-mail différente.";
    } else {

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $insertion_req = "INSERT INTO utilisateurs (nom_user, email_user, password) VALUES (?, ?, ?)";
            $requete = $connexion->prepare($insertion_req);
            $requete->bind_param("sss", $nom, $email, $hashedPassword);

            if ($requete->execute()) {
                $_SESSION['messageReussite'] = "Inscription réussie !";
                header("Location: login.php");
            } else {
                $_SESSION['messageErreur'] = "Une erreur s'est produite lors de l'inscription : " . $connexion->error;
                header("Location: inscrisption.php");
                exit();
            }
    }

    $connexion->close();
}



?>
