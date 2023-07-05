<?php
@include 'database.php';
session_start();
if (!isset($_SESSION["nom"])){
    header("Location: inscription.php");

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Formulaire de déconnexion -->
    <form method="POST" action="logout.php">
       <a href="#"> <button type="submit" class="btn btn-primary" name="logout">Se déconnecter</button></a>
    </form>
    <h1>BIENVENUE <span><?php echo $_SESSION['nom'] ?></span></h1>
    
        <
    </form>
</body>
</html>