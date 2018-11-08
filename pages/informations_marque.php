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
    
    <img center src="../images/clemsape.jpg" id="clem_pres">
    <div id="presentation_marque">
    <h1>Sap2lux, le plus chic de l'urbain.</h1> 
    <p>Sap2lux est l'alliance entre la connaissance de la haute couture et l'experience de la rue. Cette entreprise fondée par quatre jeunes auto-entrepreneurs Lillois à su très rapidement conquérir une place de référence dans le milieu du stylisme en France.</p> 
    <p>La fougue et la spontanéité de ces nouveaux mais colossaux arrivants est leur principal atout. Comme précisé lors d'une conférence soutenue à la célèbre Harvard Business School, Clement est "tombé dans ce milieu par hasard, ses premiers pas en tant que "Reponsable Principal de l'étalage Jeans XL" au marché de Fleury-la-Bétise lui ont fait se rendre compte de son perfectionnisme, de sa volonté de correspondre à toutes les attentes en laissant dans ses créations quelles qu'elles soient une sincérité ardente ".</p>
    <p>Il n'avait qu'onze ans. Aujourd'hui, Clément s'occupe principalement de la branche Com&Mark de la firme rejoint par trois amis d'enfance, Alexandre, Hedi et Hubert pour qui l'avenir à l'air plus que radieux.</p>
    </div>


         

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









