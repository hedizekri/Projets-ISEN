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

    <div id="contenu">
    <h1>Chaussures</h1>
    <hr />
    </div> <!-- fin contenu -->

    
    <table border="1" cellpadding="10">
        <tr>
            <th>Nom</th>
            <th>Photo</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Panier</th>
        </tr>
        
    <?php
        $reponse=$bdd->query('SELECT * FROM products WHERE type="chaussure"');
        while ($nom = $reponse->fetch()){
        ?>
        <tr>
            <th><?php echo $nom['name']; ?></th>
            <th><?php echo '<img id="imageddb" src="'; echo $nom['image']; echo '" />'; ?></th>
            <th><?php echo $nom['description']; ?></th>
            <th><?php echo $nom['unit_price']; ?>,00€</th>
            <th>
                <form method="Post" action="mon_panier.php">
                    <input type="submit" name="panier" value="Ajouter a mon panier">
                </form>
            </th>
        </tr>
        
    
    <?php } ?>
    </table>


         

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









