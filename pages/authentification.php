<?php

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

    

    <div id="contenu">

    <?php

    // on récupère les champs du formulaire

    $Login=$_POST["identifiant"];
    $Mdp=$_POST["motdepasse"];


    //connexion à la base de données
    $connexion = mysqli_connect("localhost","root","3qpbvlV", "sap2lux");

    //on test la connexion
    if (!$connexion){
      die("Connexion impossible : ".mysqli_connect_error($connexion));
    }
    mysqli_set_charset($connexion,"utf-8");

    // extraction des id et mdp
    $requete="SELECT identifiant,mdp from  client";

    //exécution de la requête
      $result= mysqli_query($connexion,$requete);

    // on teste si le login et le mdp sont corrects

    while ($row=mysqli_fetch_assoc($result)) {  
      if ($Login == $row["identifiant"] && $Mdp == $row["mdp"]) {
        $_SESSION["auth"] = 1 ;
        $_SESSION["nom"] = "test" ;
        echo "Connexion réussie !";
        echo "<br>Bonjour (insérer identifiant)";
      } else {
        $_SESSION["auth"] = 0 ;
        $_SESSION["nom"] = "Inconnu" ;
        echo "Connexion impossible" ;
        echo "<br>Identifiant ou mot de passe incorrect";
      }
    }

    ?>

  

    

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









