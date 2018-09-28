<!DOCTYPE html>

<?php



	if (isset($_POST["valider"]))
	{

		$sexe=$_POST["sexe"];
		$nom=$_POST["nom"];
		$prenom=$_POST["prenom"];
		$date=$_POST["date"];
		$email=$_POST["email"];
		$id=$_POST["identifiant"];
		$motdepasse=$_POST["motdepasse"];
		$mdp=sha1($motdepasse);
		$newsletter=$_POST["newsletter"];
	}
	else {
		die("Répondez au questionnaire");
	}
?>

<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<?php
	//connexion à la base de données
	$connexion = mysqli_connect("localhost","ndc1as6-10","3qpbvlV", "ndc1as6-10");

	//on test la connexion
	if (!$connexion){
		die("Connexion impossible : ".mysqli_connect_error($connexion));
	}
	mysqli_set_charset($connexion,"utf-8");

	//requete SQL
	$codeSQL = "insert into client(sexe, prenom, nom, date, mail, identifiant, mdp, promo)"."Values('".$prenom."','".$nom."','".$date."','".$email."','".$id."','".$mdp."',".$newsletter.")";

	$resultat = mysqli_query($connexion,$codeSQL); //on lande la requête SQL

	if (! $resultat){
		die("Requete SQL invalide : " . mysqli_error($connexion));
	}
	?>


</body>
</html>