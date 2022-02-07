<?php

require('connexion.php');
$code=htmlspecialchars($_POST['cde']);
$matri=htmlspecialchars($_POST['matpers']);
$nom=htmlspecialchars($_POST['user']);
$maetu=htmlspecialchars($_POST['matetu']);
$newsolde=htmlspecialchars($_POST['mtnrecu']);
$soldate=htmlspecialchars($_POST['datedtroi']);

if(empty($_POST['cde']) || ($_POST['matpers']) || empty($_POST['user']) || empty($_POST['matetu']) || empty($_POST['mtnrecu']) || empty($_POST['datedtroi']) ){
	?><SCRIPT LANGUAGE="JAVASCRIPT"> alert("Vous devez remplir les champs svp!"); </SCRIPT><?php
		echo '<meta http-equiv="refresh" content="0; URL=#">';//redirection
}else{
		
		
				$sql="INSERT INTO ` recu_comptabilité` (`codeRecu`,`nom_comptable`,`montant`,`matricule_étudiant`,`matricule_agent`,`date`,)
							VALUES($code,'$nom',$newsolde,'$maetu','$matri','$soldate')";
		if (mysqli_query($conn, $sql)  ) {
			
			echo "Recu prélev&eacute; avec succès";
			echo '<meta http-equiv="refresh" content="0; URL=basic_elements.php">';
		} else {
			echo "Erreur : " . $sql . "<br>" . mysqli_error($conn); 
        }
	
		}
        ?>

?>