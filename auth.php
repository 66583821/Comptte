<?php
// Informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestion";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['validate'])) {
    // Récupérer les valeurs saisies dans le formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `users` WHERE `email`= '$email' AND `mot_de_passe`='$password'";
    $reqq= mysqli_query($conn, $sql);
    $row= mysqli_fetch_array($reqq);
    if(is_array($row)){
        $_SESSION["email"]=$row["email"];
        $_SESSION["password"] = $row["mot_de_passe"];
    }else{
        echo "echec de connection";
        header("location:login.php");
    }
}

if (isset($_SESSION["email"])) {

    header("location:acceuil.html");
}

if (isset($_SESSION['visiteur'])) {
    echo "Bonjour ".$_SESSION['visiteur']['nom']." (deconnexion)";
  }

?>