
<?php
//Connexion a la base de donnee
$servername = "localhost";
$database = "gestion_stagiaire2";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Échec de la connexion : " . mysqli_connect_error());
}
 
echo "Connexion r&eacute;ussie";
?>