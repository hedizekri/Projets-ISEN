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
    cnxDB();

     $codeSQL ="SELECT IDjouet, titre,photo,prix,texte from jouet " 

      


      /* Modification du jeu de résultats en utf8 */
      mysqli_set_charset($cnxDB, 'utf8');

      // lancement effectif de la requête SQL 
      $resultat = mysqli_query($cnxDB,$codeSQL);
      
      // si jamais la requête se passait mal      
      if ( ! $resultat ) 
        die ("Requete SQL invalide : " . mysqli_error($cnxDB));
      
      // on teste le nombre de réponse de la requet
      $nombreLigne = mysqli_num_rows($resultat) ;
      
      
      if ( $nombreLigne > 0 )
        {
                    
          // debut du  tableau avec ligne d'entete
          
          echo '<table border="1" cellpadding="10">';
          echo '<tr>';
          echo '<th>titre</th>';
          echo '<th>photo</th>';
          echo '<th>prix</th>';
          echo '<th>commentaires</th>';
          echo '</tr>';
          
          
          // itération pour chaque ligne de résultat récupérée  
          while ($ligneResultat = mysqli_fetch_assoc($resultat)) 
          {
            echo "<tr>" ;
            echo "<td>".$ligneResultat["titre"]."</td>"; 
            echo "<td>".$ligneResultat["photo"]."</td>"; 
            echo "<td>".$ligneResultat["prix"]."</td>";
            echo "<td>".$ligneResultat["texte"]."</td>";

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









