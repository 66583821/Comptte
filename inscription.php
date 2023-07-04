

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="style.css">
<body>
<?php
// Informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestion";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}
// Vérifier si le formulaire a été soumis
if (isset($_POST['validate'])) {
    // Récupérer les valeurs saisies dans le formulaire
    $lastname = $_POST['nom'];
    $firstname = $_POST['prenom'];
    $date_de_naissance=$_POST['date_de_naissance'];
    $sexe = $_POST['sexe'];
    $email = $_POST['email'];
    $password = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);

    // Préparer la requête d'insertion
    $sql = "INSERT INTO users (nom, prenom, date_de_naissance, sexe, email, mot_de_passe)
            VALUES ('$lastname', '$firstname', '$date_de_naissance', '$sexe', '$email', '$password')";

    // Exécuter la requête d'insertion
    if ($conn->query($sql) === true) {
        echo "Enregistrement réussi.";
    } else {
        echo "Erreur lors de l'enregistrement : " . $conn->error;
    }
}

// Fermer la connexion
// $conn->close();
?>

    <br><br>
    <form class="container" method="POST">

        <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="prenom">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date_de_naissance</label>
            <input type="date" class="form-control" name="date_de_naissance">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Sexe</label>
            <input type="text" class="form-control" name="sexe">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="mot_de_passe">
        </div>
        <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
        z
        <br><br>
        <a href="login.php"><p>J'ai déjà un compte, je me connecte</p></a>
   </form>
 
</body>
</html>