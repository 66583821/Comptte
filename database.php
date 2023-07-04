<?php
$servername = "localhost"; // Nom du serveur de la base de données
$username = "root"; // Nom d'utilisateur de la base de données
$password = ""; // Mot de passe de la base de données
$dbname = "gestion"; // Nom de la base de données

// Établir une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Utilisez $conn pour exécuter des requêtes SQL ou effectuer d'autres opérations sur la base de données

// Fermer la connexion
$conn->close();
?>
