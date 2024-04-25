<?php
    include_once("./src/data.inc.php");

    function send_data($nom, $prenom, $mail, $psw, $pswC, $ville, $pays, $_bdd){
        $req = $_bdd->prepare('INSERT INTO utilisateur (nom, prenom, mail, psw, pswC, Ville, Pays)VALUES(?,?,?,?,?,?,?)');
        $req->execute(array($nom, $prenom, $mail, $psw, $pswC, $ville, $pays));
    }

?>