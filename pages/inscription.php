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
		$motdepasse=sha1($motdepasse);
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
	$connexion = mysqli_connect("localhost","root","", "sap2lux");

	//on test la connexion
	if (!$connexion){
		die("Connexion impossible : ".mysqli_connect_error($connexion));
	}
	mysqli_set_charset($connexion,"utf-8");

	//requete SQL
	$codeSQL = "insert into users(sexe, prenom, nom, date, email, identifiant, motdepasse)"."Values('".$sexe."','".$prenom."','".$nom."','".$date."','".$email."','".$id."','".$motdepasse."')";

	$resultat = mysqli_query($connexion,$codeSQL); //on lande la requête SQL

	if (! $resultat){
		die("Requete SQL invalide : " . mysqli_error($connexion));
	}
	?>


</body>
</html>