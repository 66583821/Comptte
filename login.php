
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<body>

    <br><br>
    <div>
    <form class="container" method="POST" action='auth.php'>

        <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="validate">Se connecter</button>

        <br><br>
        <a href="signup.php"><p>Je n'ai pas de compte, je m'inscris</p></a>
        
    </form>

   
    </div>
</body>
</html>
