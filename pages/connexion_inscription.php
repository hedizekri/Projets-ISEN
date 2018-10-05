<?php

require('outils.php') ;

?>


<!DOCTYPE html>     <!-- PAGE : MODELE.HTML -->



<html>



<head>

  <title>Sap2Lux</title>
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

<table align="center">
    <tr>
    <td>
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



      </form>
 </td>
 <td>
     
 </td>
 <td>
      <form method="Post" action="extraction_formulaire.php">


        <h2> Inscription </h2>
        <label>Civilité</label>

        <input type="radio" name="sexe" value="M" />Monsieur

        <input type="radio" name="sexe" value="F" />Madame

        <br/>
        <br/>

        <label>Nom</label>

        <input type="text" name="nom" size="30" maxlength="30"
                id="nom"
                onfocus="myFocus('nom')"
                onblur="myBlur('nom')" />

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

        <input type="text" name="email" size="30" maxlength="30"/>

        <br/>
        <br/>

        <label>Identifiant</label>

        <input type="text" name="identifiant" size="30" maxlength="30"/>

        <br/>
        <br/>

        <label>Mot de passe</label>

        <input type="password" name="motdepasse" size="15" maxlength="15"/>

        <br/>
        <br/>

        <input type="checkbox" name="newsletter" value="1"/> Je souhaite recevoir les promotions Sap2lux par mail

        <br/>
        <br/>

        <input type="submit" name="valider" value="Valider"/>
        
        <br/>
        <br/>
        <br/>
        <br/>



      </form>
    </td>  
    </tr>
    </table>

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









