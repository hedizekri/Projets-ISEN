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

<div id='connexion_inscription'>  

<br/>
<br/>
<br/>

<table>

    <tr>
        <td>

        <form method="Post" action="connexion.php">

  
        <h2> Connexion </h2>
        <label>Identifiant</label>

        <input type="text" name="identifiant" value="" />

        <br/>
        <br/>

        <label>Mot de passe</label>

        <input type="password" name="mdp" value="" />

        <br/>
        <br/>

        <input type="submit" name="connexion" value="Connexion" />

        <br/>

        <br/>



      </form>

  </td>

  <td>
        
        <form method="post" action="inscription.php">


        <h2> Inscription </h2>

        <label>Nom</label>

        <input type="text" name="nom" size="30" maxlength="30"/>

        <br/>
        <br/>

        <label>Prénom</label>

        <input type="text" name="prenom" size="30" maxlength="30"/>

        <br/>
        <br/>

        <label>Date de Naissance</label>

        <input type="text" name="date" size="10" maxlength="10" placeholder="jj/mm/aaaa"/>

        <br/>
        <br/>

        <label>Adresse Mail</label>

        <input type="text" name="mail"/>

        <br/>
        <br/>

        <label>Identifiant *</label>

        <input type="text" name="identifiant" />

        <br/>
        <br/>

        <label>Mot de passe *</label>

        <input type="password" name="mdp" />

        <br/>

        <p style="font-size: 12px; font-style: italic;" >* champs obligatoires</p>

        <br/>

        <input type="submit" value="Valider"/>
        
        <br/>
        <br/>
        <br/>
        <br/>

    </form>

</td>


</tr>

</table>

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

