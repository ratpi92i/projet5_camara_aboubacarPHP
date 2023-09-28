<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $message = $_POST["message"];


    $serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $base_de_donnees = "tourisme";

    $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

 
    if ($connexion->connect_error) {
        die("La connexion a la a base échoué : " . $connexion->connect_error);
    }

   
    $requete = $connexion->prepare("INSERT INTO contact (nom, prenom, email,message ) VALUES (?, ?, ?, ?)");
    $requete->bind_param("ssss", $nom, $prenom, $email, $message);

   
    if ($requete->execute()) {
       
        $connexion->close();

       
        echo "<script>window.alert('Message transferé avec succes');</script>";
        include"contact.php";
        
    } else {
        echo "Erreur  : " . $requete->error;
    }
}
?>
