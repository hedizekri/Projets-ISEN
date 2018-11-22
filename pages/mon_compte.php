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

   <?php
        connexionBdd();
    ?>

            

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

<?php 
                    if ( !isset($_SESSION["auth"]) || $_SESSION["auth"] == 0 )
    {
        // redirection
        header("location:connexion_inscription.php");
    } 
?>


    <div id="contenu">
    <h1>Mon Compte</h1>
    <hr />
    
        
        
    <?php

        $reponse=$bdd->query("SELECT * FROM membres WHERE identifiant = '". $_SESSION['identifiant'] ."'");
        while ($nom = $reponse->fetch()){
        ?>
        
            <br/>
            <?php echo "Identifiant : ".$nom['identifiant'].""; ?>
            <br/>
            <br/>
            <?php echo "Mail : ".$nom['mail'].""; ?>
            <br/>
            <br/>
            <?php echo "Nom : ".$nom['nom'].""; ?>
            <br/>
            <br/>
            <?php echo "Prenom : ".$nom['prenom'].""; ?>
            <br/>
            <br/>
            <?php echo "Date de Naissance : ".$nom['date'].""; ?>

        
    
    <?php } ?>
 

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