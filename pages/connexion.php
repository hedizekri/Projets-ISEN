<?php

session_start();
require('outils.php') ;

?>

<!DOCTYPE html>     <!-- PAGE : MODELE.HTML -->



<html>



<head>

  <title>Sap2lux</title>

  <meta charset="utf-8" />




    <link href="../styles/styles.css"  rel="stylesheet" type="text/css" />
    <script language="javascript" src="fonction.js"></script>








</head>





<body>

            

    <!-- ******************************************************* -->

    <!--                 MENU                                    -->

    <!-- ******************************************************* -->

    

    <div id="titre">
    
      <?php

        afficheTitre();

      ?>

    <div id="menu">
    
           <?php

        afficheMenu();

      ?>   
    
    </div> <!-- fin menu -->

    

    <!-- ******************************************************* -->

    <!--                 CONTENU                                 -->

    <!-- ******************************************************* -->

<?php

if(isset($_POST['connexion'])) { 

    if(empty($_POST['identifiant'])) {
        echo "Le champ identifiant est vide.";
    } else {
        
        if(empty($_POST['mdp'])) {
            echo "Le champ mot de passe est vide.";
        } else {
            
            $identifiant = htmlentities($_POST['identifiant'], ENT_QUOTES, "ISO-8859-1");

            $MotDePasse = htmlentities($_POST['mdp'], ENT_QUOTES, "ISO-8859-1");

            $mysqli = mysqli_connect("localhost", "root", "", "sap2lux");

            if(!$mysqli){
                echo "Erreur de connexion à la base de données.";
            }
            else{


                $Requete = mysqli_query($mysqli,"SELECT * FROM membres WHERE identifiant = '".$identifiant."' AND  mdp = '".md5($MotDePasse)."'");

                if(mysqli_num_rows($Requete) == 0) {
                    echo "Connexion impossible. Identifiant ou mot de passe incorrect.";
                } else {
                    
                    $_SESSION['identifiant'] = $identifiant;
                    $_SESSION['auth'] = 1; 

                    echo "Bonjour ". $_SESSION["identifiant"] ."";


                    ?>
                    <meta http-equiv="refresh" content="1; URL=accueil.php" />
                    <?php
                }
            }
        }
    }

}

?>




         

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