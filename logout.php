<?php
// Début de session
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['loggedin'])) {
    // Rediriger vers la page de connexion ou faire toute autre action appropriée
    header('Location: login.php');
    exit;
}

// Traitement de la déconnexion
if (isset($_POST['logout'])) {
    // Supprimer toutes les variables de session
    session_unset();

    // Détruire la session
    session_destroy();

    // Rediriger vers la page de connexion ou faire toute autre action appropriée
    header('Location: login.php');
    exit;
}
?>

