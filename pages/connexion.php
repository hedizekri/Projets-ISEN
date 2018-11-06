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

<div id='connexion_inscription'>  

      <form method="Post" action="authentification.php">

  
        <h2> Connexion </h2>
        <label>Identifiant</label>

        <input type="text" name="identifiant" size="30" maxlength="30"/>

        <br/>
        <br/>

        <label>Mot de passe</label>

        <input type="password" name="motdepasse" size="15" maxlength="15"/>

        <br/>
        <br/>

        <input type="submit" name="valider" value="Valider">

        <br/>

        <br/>



      </form> <!-- fin contenu -->

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