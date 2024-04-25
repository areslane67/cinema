<?php
    session_start();
    include_once("./src/data.inc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./favico/favicon.ico">
    <link rel="stylesheet" href="./css/style.css">
    <title>Ténébroscope</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="./index.php">Acceuil</a></li>
            <li><a href="./filmes.php">Nos Filmes</a></li>
            <li><a class="focus" href="./inscription.php">S'inscrire</a></li>
            <li><a href="./connexion.php">Se connecter</a></li>
        </ul>
    </header>
    <main>
        <section class="top">
            <img src="./favico/android-chrome-512x512.png" alt="ico">
            <h1>Films d’horreur , thriller et bien plus en illimiter</h1>
        </section>
        <section class="pow">
            <img class="ins" src="./assets/raw.jpg" alt="img">
            <h2>Inscription rapide</h2>
        </section>
            <div class="container">
                <div class="content-2 ">
                    <form method="post" class="login">
                        <label>Nom*</label>
                        <input type="text" name="nom" aria-labelledby="Nom"  id="Nom" placeholder="nom" aria-required="true">
                        <label>Prénom*</label>
                        <input type="text" name="prenom" aria-labelledby="Prénom"  id="Prénom" placeholder="prenom" aria-required="true">
                        <label>E-mail*</label>
                        <input type="email" name="mail" aria-labelledby="email"  id="email" placeholder="Mail Utilisateur" aria-required="true" autofocus>
                        <label>Mot de passe*</label>
                        <input type="password" name="psw" aria-labelledby="password" id="password" placeholder="Mot de passe" aria-required="true">
                        <label>Mot de passe confirme*</label>
                        <input type="password" name="pswC" aria-labelledby="password" id="password" placeholder="Mot de passe" aria-required="true">
                        <label>Ville*</label>
                        <input type="Ville" id="Ville" name="Ville" placeholder="Ville" required>
                        <label>Pays*</label>
                        <input type="Pays" id="Pays" name="Pays" placeholder="Pays" required>
                        <input type="submit" aria-label="Envoyer" value="CONNECTION A VOTRE COMPTE" id="ex">
                    </form>   
                    <?php
                        include_once __DIR__."/src/inscription.inc.php";
                    ?> 
                 </div>
            </div>
    </main>
    <footer>
        <p>&copy; - HADDADI Areslane BTS SIO - 2021 -</p>
    </footer>
</body>
</html>