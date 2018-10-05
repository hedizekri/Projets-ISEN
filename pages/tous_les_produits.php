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
    
    </div>

    <div id="menu">
    
      <?php

        afficheMenu();

      ?>   
    
    </div> <!-- fin menu -->

    

    <!-- ******************************************************* -->

    <!--                 CONTENU                                 -->

    <!-- ******************************************************* -->

    <div id="contenu">
    <h1>Tous les produits</h1>
    <hr />
    
    <?php

    // appel de la fonction de connexion
    $connexion = mysqli_connect("localhost","root","", "sap2lux");

      //on test la connexion
      if (!$connexion){
        die("Connexion impossible : ".mysqli_connect_error($connexion));
      }


      // Modification du jeu de résultats en utf8
      mysqli_set_charset($connexion, 'utf8');

      // Création de la requête
      $codeSQL ="SELECT IDvetement,titre,photo,prix,texte from vetement" ;

      // lancement effectif de la requête SQL 
      $resultat = mysqli_query($connexion,$codeSQL);
      
        // si jamais la requête se passait mal      
        if ( ! $resultat ) 
          die ("Requete SQL invalide : " . mysqli_error($connexion));
        
        // on teste le nombre de réponse de la requet
        $nombreLigne = mysqli_num_rows($resultat) ;

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









