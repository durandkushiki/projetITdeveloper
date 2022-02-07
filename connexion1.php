<?php
try {
    $var_connexion= new PDO('mysql:host=localhost; dbname=gestion_stagiaire','root','');
} catch (Exception $e) {
    die('connexion impossible:'.$e->getMessage());
}

?>