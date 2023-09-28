<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $base_de_donnees = "tourisme";

    $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

    if ($connexion->connect_error) {
        die("La connexion à la base a échoué : " . $connexion->connect_error);
    }

    $verif_req = "SELECT * FROM utilisateurs WHERE nom_user = ?";
    $requete = $connexion->prepare($verif_req);
    $requete->bind_param("s", $username);
    $requete->execute();
    $result = $requete->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"];
        $role = $row["role"];

        if (password_verify($password, $hashedPassword)) {
            $_SESSION['username'] = $username;

            if ($role === 'administrateur') {
                header("Location: admin.php");
                exit();
            } else {
                header("Location: index.php");
                exit();
            }
        } else {
            $_SESSION['messageErreur'] = "Mot de passe incorrect. Veuillez réessayer.";
            header("Location: login.php");
            exit();
        }
    } else {
        $_SESSION['messageErreur'] = "Aucun utilisateur trouvé avec ce nom d'utilisateur.";
        header("Location: login.php");
        exit();
    }

    $connexion->close();
}
?>
