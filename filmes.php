<?php
    include_once("./src/data.inc.php");
    include_once("./src/image.inc.php");
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
            <li><a class="focus" href="./filmes.php">Nos Filmes</a></li>
            <li><a href="./inscription.php">S'inscrire</a></li>
            <li><a href="./connexion.php">Se connecter</a></li>
        </ul>
    </header>
    <main>
        <section class="top">
                <img src="./favico/android-chrome-512x512.png" alt="ico">
                <h1>Films d’horreur , thriller et bien plus en illimiter</h1>
        </section>
        <section class="filme-mid">
            <div>
                <h2>Regardez en illimité sur votre tv</h2>
                <p>Regardez en illimité sur votre Smartphone, Xbox, tablet</p>
            </div>
            <div>
                <img src="./assets/raw.jpg" alt="img">
            </div>
        </section>
        <section class="filme">
            <h2 class="ze">Notre selection pour vous </h2>
            <div>
                <ul>
                    <?php                        
                        if ($stmt) {
                            echo '<ul>';
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo '<li><img src="' . $row['img'] . '"></li>';
                            }
                        }
                    ?>
                </ul>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; - HADDADI Areslane BTS SIO - 2021 -</p>
    </footer>
</body>
</html>