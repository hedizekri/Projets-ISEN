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
        try 
        {
            $bdd = new PDO('mysql:host=localhost;dbname=sap2lux;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
            die('Erreur :' . $e -> getMessage());
        }
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



    <?php

    if(isset($_GET['product_name'], $_GET['delete'])){
          $product_name = $_GET['product_name'];
          $identifiant = $_SESSION['identifiant'];

          $req = $bdd->prepare('DELETE FROM orders2 WHERE product_name = :product_name AND identifiant = :identifiant');

              $req->execute(array(

                'product_name' => $product_name,

                'identifiant' => $identifiant,

              )
            );
        }

    ?>

    <meta http-equiv="refresh" content="1; URL=mon_panier.php" />

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