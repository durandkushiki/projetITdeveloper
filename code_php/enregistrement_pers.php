<?php
      require("connexion.php");


      $numprog=htmlspecialchars($_POST['identifiant']);
$nomp=htmlspecialchars($_POST['nom']);
$adres=htmlspecialchars($_POST['mail']);
$PWD=htmlspecialchars($_POST['pass']);
$poste_pers=htmlspecialchars($_POST['poste']);


if( empty($_POST['identifiant']) || empty($_POST['nom']) || $_POST['mail']|| empty($_POST['pass']) || empty($_POST['poste']) ){
	?><SCRIPT LANGUAGE="JAVASCRIPT"> alert("Vous devez remplir les champs svp!"); </SCRIPT><?php
		echo '<meta http-equiv="refresh" content="0; URL=Identificaiton_admi.php">';//redirection
}else{
	$requete= "select * from personnel where id = $numprog";
	$resultat=mysqli_query($conn,$requete) or die ("echec de l'execution de la requete<br>." .mysqli_connect_error());
	if(mysqli_num_rows($resultat)!=0){
		$data=mysqli_fetch_object($resultat);
		echo '<body onLoad="alert(\'personnel existant!\')">';
		echo '<meta http-equiv="refresh" content="0;URL=Etudiant_re.php">';
	}else{
		$sql="INSERT INTO projet (id,user, mail, password, poste)
						VALUES($numprog, '$nomp', '$adres','$PWD', '$poste_pers')";
		if (mysqli_query($conn, $sql)) {
			echo "Enregistrement effectu&eacute; avec succès";
			echo '<meta http-equiv="refresh" content="0; URL=Utilisateur.php">';
		} else {
			echo "Erreur : " . $sql . "<br>" . mysqli_error($conn); } 
	}
		}


//       if (isset($_POST['nom']) and isset($_POST['mail']) and isset($_POST['pass']) and isset($_POST['poste'])) {
        

//     $ma_requete = $bdd->prepare('INSERT INTO personnel (user, mail, password, poste) VALUES (:username, :mail, :password, :poste)');
//       $ma_requete->execute( array(
//         'username'=>$_POST['nom'],
//         'mail'=>$_POST['mail'],
//         'password'=>$_POST['pass'],
//         'poste'=>$_POST['poste']

//       ));

//       // vider tous les champs

//       $_POST['nom']="";
//       $_POST['mail']="";
//       $_POST['pass']="";
//       $_POST['poste']="";

//       }
// 
?>