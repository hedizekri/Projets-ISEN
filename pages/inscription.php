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
     

 
 $mysqli = mysqli_connect("localhost", "root", "", "sap2lux");

            if(!$mysqli){
                echo "Erreur de connexion à la base de données.";
            } else {
 
$AfficherFormulaire=1;

if(isset($_POST['identifiant'],$_POST['mdp'])){

    if(empty($_POST['identifiant'])){
        echo "Le champ identifiant est vide.";

    } elseif(!preg_match("#^[a-z0-9]+$#",$_POST['identifiant'])){

        echo "L'identifiant doit être renseigné en lettres minuscules sans accents, sans caractères spéciaux.";

    } elseif(strlen($_POST['identifiant'])>25){
        echo "L'identifiant est trop long, il dépasse 25 caractères.";

    } elseif(empty($_POST['mdp'])){
        echo "Le champ mot de passe est vide.";

    } elseif(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM membres WHERE identifiant='".$_POST['identifiant']."'"))==1){
        echo "Cet identifiant est déjà utilisé.";

    } else {

        if(!mysqli_query($mysqli,"INSERT INTO membres SET identifiant='".$_POST['identifiant']."', mdp='".md5($_POST['mdp'])."', mail='".$_POST['mail']."', nom='".$_POST['nom']."', prenom='".$_POST['prenom']."', date='".$_POST['date']."'")){
            echo "Une erreur s'est produite: ".mysqli_error($mysqli);

        } else {
            echo "Inscription réussie ! Veuillez vous connecter pour finaliser l'inscription.";

            $AfficherFormulaire=0;
        }
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









