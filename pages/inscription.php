<?php

session_start();
require('outils.php') ;

?>


<!DOCTYPE html>     <!-- PAGE : MODELE.HTML -->



<html>



<head>

  <title>Sap2lux</title>
  <script type="text/javascript" src="fonctions.js" language="javascript"></script>
  <meta charset="utf-8" />





  <link href="../styles/styles.css"  rel="stylesheet" type="text/css" />







</head>





<body>

            

    <!-- ******************************************************* -->

    <!--                 MENU                                    -->

    <!-- ******************************************************* -->

    

    <div id="titre">

      <?php

        afficheTitre();

      ?>

    </div>



    <div id="menu">

      <?php

        afficheMenu();

      ?>

    </div> <!-- fin menu -->

    

    <!-- ******************************************************* -->

    <!--                 CONTENU                                 -->

    <!-- ******************************************************* -->

    

    <div id="connexion_inscription">

        <?php
     
    /* page: inscription.php */
 
//connexion à la base de données:
$BDD = array();
$BDD['host'] = "localhost";
$BDD['user'] = "root";
$BDD['pass'] = "";
$BDD['db'] = "sap2lux";
$mysqli = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);
if(!$mysqli) {
    echo "Connexion non établie.";
    exit;
}
 
$AfficherFormulaire=1;
//traitement du formulaire:
if(isset($_POST['identifiant'],$_POST['mdp'])){//l'utilisateur à cliqué sur "S'inscrire", on demande donc si les champs sont défini avec "isset"
    if(empty($_POST['identifiant'])){//le champ identifiant est vide, on arrête l'exécution du script et on affiche un message d'erreur
        echo "Le champ identifiant est vide.";
    } elseif(!preg_match("#^[a-z0-9]+$#",$_POST['identifiant'])){//le champ identifiant est renseigné mais ne convient pas au format qu'on souhaite qu'il soit, soit: que des lettres minuscule + des chiffres (je préfère personnellement enregistrer le identifiant de mes membres en minuscule afin de ne pas avoir deux identifiant identique mais différents comme par exemple: Admin et admin)
        echo "Le identifiant doit être renseigné en lettres minuscules sans accents, sans caractères spéciaux.";
    } elseif(strlen($_POST['identifiant'])>25){//le identifiant est trop long, il dépasse 25 caractères
        echo "Le identifiant est trop long, il dépasse 25 caractères.";
    } elseif(empty($_POST['mdp'])){//le champ mot de passe est vide
        echo "Le champ Mot de passe est vide.";
    } elseif(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM membres WHERE identifiant='".$_POST['identifiant']."'"))==1){//on vérifie que ce identifiant n'est pas déjà utilisé par un autre membre
        echo "Ce identifiant est déjà utilisé.";
    } else {
        //toutes les vérifications sont faites, on passe à l'enregistrement dans la base de données:
        //Bien évidement il s'agit là d'un script simplifié au maximum, libre à vous de rajouter des conditions avant l'enregistrement comme la longueur minimum du mot de passe par exemple
        if(!mysqli_query($mysqli,"INSERT INTO membres SET identifiant='".$_POST['identifiant']."', mdp='".md5($_POST['mdp'])."', mail='".$_POST['mail']."', nom='".$_POST['nom']."', prenom='".$_POST['prenom']."', date='".$_POST['date']."'")){//on crypte le mot de passe avec la fonction propre à PHP: md5()
            echo "Une erreur s'est produite: ".mysqli_error($mysqli);//je conseille de ne pas afficher les erreurs aux visiteurs mais de l'enregistrer dans un fichier log
        } else {
            echo "Vous êtes inscrit avec succès!";
            //on affiche plus le formulaire
            $AfficherFormulaire=0;
        }
    }
}
if($AfficherFormulaire==1){
    ?>

    <?php
}
?>


      


      </form>


    </div> <!-- fin contenu -->



         

    <!-- ******************************************************* -->

    <!--                 PIED DE PAGE                            -->

    <!-- ******************************************************* -->

    

    <footer>

      <?php

        afficheFooter();

      ?>

    </footer> <!-- fin du pied de page -->





</body>



</html> 









