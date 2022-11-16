<?php
try{
    session_start();
    $bdd = new PDO('mysql:host=localhost; dbname=registration; charset=utf8;', 'root', '');
    //echo'connexion reussite';
}catch(Exception $e){
    die('Connexion échouée : ' .$e->getMessage());
}