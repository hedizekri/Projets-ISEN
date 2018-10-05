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
    
    $choix = 2 ;


     $codeSQL ="SELECT IDvetement, titre,photo,prix,texte from vetement
      inner join categorie 
            on vetement.IDcategorie=categorie.IDcategorie 
            where vetement.idcategorie = '" . $choix . "'"; 

      $connexion = mysqli_connect("localhost","root","", "sap2lux");

  //on test la connexion
  if (!$connexion){
    die("Connexion impossible : ".mysqli_connect_error($connexion));
  }
  mysqli_set_charset($connexion,"utf-8");


      // lancement effectif de la requête SQL 
      $resultat = mysqli_query($connexion,$codeSQL);
      
      // si jamais la requête se passait mal      
      if ( ! $resultat ) 
        die ("Requete SQL invalide : " . mysqli_error($connexion));
      
      // on teste le nombre de réponse de la requet
      $nombreLigne = mysqli_num_rows($resultat) ;
      
      
      if ( $nombreLigne > 0 ) 
        {
                    
          // debut du  tableau avec ligne d'entete
          
          echo '<table border="1" cellpadding="10">';
          echo '<tr>';
          echo '<th>Titre</th>';
          echo '<th>Photo</th>';
          echo '<th>Description</th>';
          echo '<th>Prix</th>';
          echo '</tr>';
          
          
          // itération pour chaque ligne de résultat récupérée  
          while ($ligneResultat = mysqli_fetch_assoc($resultat)) 
          {
            echo "<tr>" ;
            echo "<td>".$ligneResultat["titre"]."</td>"; 
            echo '<td><img src="'.$ligneResultat["photo"].'"/></td>'; 
            echo "<td>".$ligneResultat["texte"]."</td>";
            echo "<td>".$ligneResultat["prix"]." € " . " </td>";

            echo "</tr>";
          }  
          
          // fin tableau
          echo "</table>";

        }
      else
        {
          echo "<h2>Pas d'annonces dans cette cat&eacute;gorie !</h2>"; 
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









