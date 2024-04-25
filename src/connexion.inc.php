<?php

if(isset($_POST["mail"]) || isset($_POST["psw"])){
    try {
        $reponse = $_bdd->query("SELECT mail, nom, prenom, psw, Ville, Pays FROM utilisateur WHERE mail = '{$_POST['mail']}' limit 1");
        
        $DATA  = $reponse->fetch();
        $login = $_POST["mail"];
        $mdp = $_POST["psw"];
        
        if(!$login || !$mdp){
            echo "<p class=\"warning\">Vous avez oublié votre mail ou password incorrect</p>";
        } else if(isset($DATA['psw'])) {
            if(password_verify($_POST["psw"],$DATA['psw'])) {
                // Le mot de passe est correct
                session_start();

                $_SESSION['mail'] = $DATA['mail'];
                $_SESSION['nom'] = $DATA['nom'];
                $_SESSION['prenom'] = $DATA['prenom'];
                $_SESSION['Ville'] = $DATA['Ville'];
                $_SESSION['Pays'] = $DATA['Pays'];


                header("Location: location.php");
                exit;
            } else {
                // Le mot de passe est incorrect
                echo "<p class=\"warning\">Erreur mot de passe incorrect</p>";
            }
        }
    } catch (Exception $e) {
        //throw $th;
    }
}

    

?>
















