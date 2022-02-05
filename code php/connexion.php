
<?php
//Connexion a la base de donnee

    try {
        $var_connection=new PDO('mysql: host=localhost; dbname=journee_porte_ouverte','root','');
     } catch (Exception $e) {
        die('Connexion impossible:'.$e->getMessage());
     } 
?>