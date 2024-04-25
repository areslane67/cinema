<?php
    session_start();
    include_once("./src/data.inc.php");

    $title = 'Ténébroscope';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./favico/favicon.ico">
    <link rel="stylesheet" href="./css/style.css">
    <title><?php echo $title ?></title>
</head>
<body>
    <header>
        <ul>
            <li><a href="./index.php">Acceuil</a></li>
            <li><a href="./filmes.php">Nos Filmes</a></li>
            <li><a href="./inscription.php">S'inscrire</a></li>
            <li><a class="focus" href="./connexion.php">Se connecter</a></li>
        </ul>
    </header>
    <main>
            <section class="top">
                <img src="./favico/android-chrome-512x512.png" alt="ico">
                <h1>Films d’horreur , thriller et bien plus en illimiter</h1>
            </section>
            <section class="mid">
                <p>Tout les mois profitez de toutes les nouveautees cinema. a partir du mois prochain on vous propose tous les classiques du cinema d’horreur ou thriler ? ou que vous soyez. tous les filmes en VO, VOST, VF et plus d options</p>
                <h2>Connectez Vous</h2>
            </section>
            <div class="content-2">
                <form method="post" class="form-1"> 
                    <label>Mail ou login*</label>
                        <input type="email" name="mail" aria-labelledby="email"  id="email" placeholder="Mail Utilisateur" aria-required="true" autofocus>
                    <label>Mot de passe*</label>
                        <input type="password" name="psw" aria-labelledby="password" id="password" placeholder="Mot de passe" aria-required="true">
                    <input type="submit" aria-label="Envoyer" value="CONNECTION A VOTRE COMPTE" id="ex">
                </form>
                <?php
                    include_once("./src/connexion.inc.php");
                ?>
            </div>
    </main>
    <footer>
        <p>&copy; - HADDADI Areslane BTS SIO - 2021 -</p>
    </footer>
</body>
</html>