<?php
require('connexion.php');

	if ( isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['sexe']) && isset($_POST['dnaiss']) && isset($_POST['filiere']) && isset($_POST['niveau']) && isset($_POST['image']) && isset($_POST['digital']) && isset($_POST['argent_verser']) && isset($_POST['date_payement']) && isset($_POST['adresse']) && isset($_POST['ville']) && isset($_POST['pays']))
	{

		$ma_requete = $var_connection->prepare('INSERT INTO etudiant 
			(d_biometrique, nom, prenom, genre, date_naiss, filiere, niveau, Montant_ver, date_payement, adresse, ville, pays, nom_img, taille_img, type_img, bin_img) 
			VALUES (:d_biometrique, :nom, :prenom, :genre, :date_naiss, :filiere, :niveau, :Montant_ver, :date_payement, :adresse, :ville, :pays,:nom_img, :taille_img, :type_img, :bin_img)');
    	$ma_requete->execute( array(
    		'd_biometrique'=>$_POST['digital'],
    		'nom'=>$_POST['nom'],
    		'prenom'=>$_POST['prenom'],
    		'genre'=>$_POST['sexe'],
    		'date_naiss'=>$_POST['dnaiss'], 
    		'filiere'=>$_POST['filiere'],
    		'niveau'=>$_POST['niveau'],
    		'Montant_ver'=>$_POST['argent_verser'],
    		'date_payement'=>$_POST['date_payement'],
    		'adresse'=>$_POST['adresse'],
    		'ville'=>$_POST['ville'],
    		'pays'=>$_POST['pays'],
    		'nom_img'=>$_FILES['image']['nom'],
    		'taille_img'=>$_FILES['image']['size'],
    		'type_img'=>$_FILES['image']['type'],
    		'bin_img'=>file_get_contents($_FILES['image']['tmp_name']) 

    	));
	}

?>