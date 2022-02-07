<?php
      require('connexion.php');


      $numprog=htmlspecialchars($_POST['identifiant']);
$nomp=htmlspecialchars($_POST['nom']);
$adres=htmlspecialchars($_POST['monmail']);
$PWD=htmlspecialchars($_POST['pass']);
$poste_pers=htmlspecialchars($_POST['poste']);
/* $case=htmlspecialchars($_POST['careau']); */
$nom_tof=$_FILES['image']['name'];

if (isset($_FILES['image']) && $_FILES['image']['size']<= 1048576 && $_FILES['image']['error']==0 ) {
	$infosfichier=pathinfo($_FILES['image']['name']);
	$textupload=$infosfichier['extension'];
	$ext_autorises=array('jpg','jpeg','gif','png','pdf');
	 if (in_array($textupload, $ext_autorises)) {
	 	move_uploaded_file($_FILES['image']['tmp_name'],'C:/wamp/www/projetITdeveloper/images/Photo_etudiant/'.basename($_FILES['image']['name']));
	 	echo "le fichier a ete bien telecharge";
	 }
	}



if( empty($_POST['identifiant']) ||  empty($_POST['nom']) || empty($_POST['pass']) || empty($_POST['poste']) ){
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
		$sql="INSERT INTO personnel (id,nom_personnel,	Poste,password,	adress_mail,photo )
						VALUES($numprog, '$nomp','$poste_pers','$PWD','$adres','$nom_tof')";
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