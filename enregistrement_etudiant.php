<?php

require('connexion.php');
$bio=htmlspecialchars($_POST['digitale']);
$nomstg=htmlspecialchars($_POST['nom']);
$prenom=htmlspecialchars($_POST['prenom']);
$sexe=htmlspecialchars($_POST['sexe']);
$date_nai=htmlspecialchars($_POST['dnaiss']);
$filier=htmlspecialchars($_POST['filiere']);
$niveauetu=htmlspecialchars($_POST['niveau']);
$montans_verse=htmlspecialchars($_POST['argent_verser']);
$date_paid=htmlspecialchars($_POST['date_payement']);
$adres=htmlspecialchars($_POST['adresse']);
$town=htmlspecialchars($_POST['ville']);
$country=htmlspecialchars($_POST['pays']);
$toff=htmlspecialchars($_POST['image']);

$_FILES['image']['name'];
echo $_FILES['image']['name'] ;

if (isset($_FILES['image']) && $_FILES['image']['size']<= 1048576 && $_FILES['image']['error']==0 ) {
	$infosfichier=pathinfo($_FILES['image']['name']);
	$textupload=$infosfichier['extension'];
	$ext_autorises=array('jpg','jpeg','gif','png','pdf');
	 if (in_array($textupload, $ext_autorises)) {
	 	copy($_FILES['image']['tmp_name'],'C:/wamp/www/projetITdeveloper/images/Photo_etudiant/'.basename($_FILES['image']['name']));
	 	echo "le fichier a ete bien telecharge";
	 }
	}

if(empty($_POST['digitale']) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['sexe']) || empty($_POST['dnaiss']) || empty($_POST['filiere']) || empty($_POST['niveau'])
 || empty($_POST['argent_verser']) || empty($_POST['date_payement']) || empty($_POST['adresse']) ||empty($_POST['ville']) || empty($_POST['pays'])  ){
	?><SCRIPT LANGUAGE="JAVASCRIPT"> alert("Vous devez remplir les champs svp!"); </SCRIPT><?php
		echo '<meta http-equiv="refresh" content="0; URL=#">';//redirection
}else{
	
	$requete= "select * from etude where biometrique = '$bio' ";
	$resultat=mysqli_query($conn,$requete) or die ("echec de l'execution de la requete<br>." .mysqli_error($conn));
	if(mysqli_num_rows($resultat)!=0){
		$data=mysqli_fetch_object($resultat);

		echo '<body onLoad="alert(\'Etudiant existant!\')">';
		echo '<meta http-equiv="refresh" content="0;URL=retrouver_etudian.php?sup=echo ($data[\'biometrique\']) ">';
	}else{
		
		// $resql="INSERT INTO `users` (`user_name`, `user_password`,`statut_user`,`adresse`,`mobile`)VALUES('$utilisateur','$code','Etudiant','$mail',$tel)";
				$sql="INSERT INTO `etude` (`biometrique`,`nom`,`prenom`,`sexe`,`dateN`,`filiere`,`niveau`,`montant`,`dateP`,`adresse`,`ville`,`pays`,`photo`)
							VALUES('$bio','$nomstg', '$prenom','$sexe','$date_nai', '$filier',$niveauetu,$montans_verse,'$date_paid', '$adres', '$town', '$country','$toff')";
		if (mysqli_query($conn, $sql)  ) {
			
			echo "Etudiant ajout&eacute; avec succès";
			echo '<meta http-equiv="refresh" content="0; URL=basic_elements.php">';
		} else {
			echo "Erreur : " . $sql . "<br>" . mysqli_error($conn); 
        }
	}
		}
        ?>