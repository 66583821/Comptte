<?php
// // Informations de connexion à la base de données
 $servername = "localhost";
 $username = "root";
$password = "";
 $dbname = "gestion";

// Connexion à la base de données
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Récupération des données de l'utilisateur à partir du formulaire
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM `users` WHERE `email`= :email";
$stmt = $conn->prepare($query);
$stmt->bindParam(':email', $email);
$stmt->execute();

// Vérification du mot de passe
if ($stmt->rowCount() > 0) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $hashedPassword = $row['mot_de_passe'];
    $nomu = $row['nom'];
    if (password_verify($password, $hashedPassword)) {
        // Le mot de passe est valide, l'utilisateur est authentifié
        echo "Authentification réussie !";
    } else {
        // Le mot de passe est invalide
        echo "Nom d'utilisateur ou mot de passe incorrect.";
        header("location:login.php");
    }
} else {
    // L'utilisateur n'existe pas
    echo "Nom d'utilisateur ou mot de passe incorrect.";
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>BIENVENUE <?php echo  $nomu ;  ?></h1>  

  <!-- Formulaire de déconnexion -->
  <form method="POST" action="logout.php">
       <a href="#"> <button type="submit" class="btn btn-primary" name="logout">Se déconnecter</button></a>
    </form>
</body>
</html>