<?php
    
    if(isset($_POST['mail']) || isset($_POST['psw'])){
        $_email = $_POST["mail"];
    
        //on test les chaines de caractère//
        if(!$_POST['nom'] || !$_POST['prenom'] || !$_POST['mail'] || !$_POST['psw'] || !$_POST['pswC'] || !$_POST['Ville'] || !$_POST['Pays'] ){
            echo "<p class=\"warning\">remplisser tout les champs</p>";
            }
            else if(!filter_var($_email, FILTER_VALIDATE_EMAIL)){ //attention à ma fonction
                echo "<p class=\"warning\">Mail invalide</p>";
            }
            else if(is_numeric($_email)){
                    echo "<p class=\"warning\">Vous devez saisir des caractères</p>";
            }
            else if($_POST['psw'] != $_POST['pswC']){
                echo "<p class=\"warning\">pd</p>";
            }
            else{
    
            send_data($_POST['nom'], $_POST['prenom'], $_POST['mail'], password_hash($_POST['psw'],PASSWORD_DEFAULT),password_hash($_POST['pswC'],PASSWORD_DEFAULT),$_POST['Ville'],$_POST['Pays'], $_bdd);
            //password_hash($_POST['psw'],PASSWORD_DEFAULT);
            
            echo header("Location: connexion.php");
            exit;
            
        }                
        
    }
