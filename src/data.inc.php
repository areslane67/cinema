<?php 

try{
      $_bdd=new PDO('mysql:host=localhost;dbname=cinema;charset=utf8', 'root', '');
    }
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}