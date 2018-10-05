<?php

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









