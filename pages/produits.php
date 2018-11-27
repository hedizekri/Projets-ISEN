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
    </div> <!-- fin contenu -->

    
        
<?php

    if(isset($_GET['produit'])){
        $produit = $_GET['produit'];
        $reponse=$bdd->query('SELECT * FROM products WHERE type = "'.$produit.'"');

        ?>
        
        <h1>
        
        <?php 
        if($produit=="costume") {
            echo "Costumes";
        }
        if($produit=="pantalon") {
            echo "Pantalons";
        }
        if($produit=="pull") {
            echo "Pulls";
        }
        if($produit=="chaussures") {
            echo "Chaussures";
        }

        ?>
        
            </h1>

                <table border="1" cellpadding="10">

                    <tr>
                        <th>Nom</th>
                        <th>Photo</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Panier</th>
                    </tr>

        <?php

        while ($nom = $reponse->fetch()){

            ?>

                <tr>
                    <th><?php echo $nom['name']; ?></th>
                    <th><?php echo '<img id="imageddb" src="'; echo $nom['image']; echo '" />'; ?></th>
                    <th><?php echo $nom['description']; ?></th>
                    <th><?php echo $nom['unit_price']; ?>,00€</th>
                    <?php 

                    $name = $nom['name'];
                    $image = $nom['image'];
                    $unit_price = $nom['unit_price'];

                    ?>
                    <th>

                        <form action="mon_panier.php" method="GET">
                            
                            <input type="number" name="quantity" min="1" max="100" step="1" value="1" style="width: 50px;">
                            <input type="hidden" name="name" value="<?php echo($name); ?>" />
                            <input type="hidden" name="unit_price" value="<?php echo($unit_price); ?>" />
                            <input type="hidden" name="image" value="<?php echo($image); ?>" />
                            <input type="submit" name="cart" value="Ajouter au panier">

                        </form>




                    </th>
                </tr>
                
            
        <?php 
        }
    } 

?>

         </table>

         <?php

        if(isset($_GET['sexe'])){ // si formulaire soumis
            $sexe = $_GET['sexe'];
            $reponse=$bdd->query('SELECT * FROM products WHERE sexe = "'.$sexe.'"');

            ?>

            <h1><?php 
            if($sexe=="H") {
                echo "Vêtements Homme";
            }
            if($sexe=="F") {
                echo "Vêtements Femme";
            }
            ?></h1>

            <table border="1" cellpadding="10">
            <tr>
                <th>Nom</th>
                <th>Photo</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Panier</th>
            </tr>

            <?php

            while ($nom = $reponse->fetch()){

            ?>

            <tr>
                <th><?php echo $nom['name']; ?></th>
                <th><?php echo '<img id="imageddb" src="'; echo $nom['image']; echo '" />'; ?></th>
                <th><?php echo $nom['description']; ?></th>
                <th><?php echo $nom['unit_price']; ?>,00€</th>
                <?php 

                    $name = $nom['name'];
                    $image = $nom['image'];
                    $unit_price = $nom['unit_price'];

                    ?>
                    <th>

                        <form action="mon_panier.php" method="GET">
                            
                            <input type="number" name="quantity" min="1" max="100" step="1" value="1" style="width: 50px;">
                            <input type="hidden" name="name" value="<?php echo($name); ?>" />
                            <input type="hidden" name="unit_price" value="<?php echo($unit_price); ?>" />
                            <input type="hidden" name="image" value="<?php echo($image); ?>" />
                            <input type="submit" name="cart" value="Ajouter au panier">

                        </form>
                </th>
            </tr>
            
        
    <?php }} ?>

         </table>

         <?php

        if(isset($_GET['all'])){ // si formulaire soumis
            $all = $_GET['all'];
            $reponse=$bdd->query('SELECT * FROM products');

            ?>

            <h1><?php 
            if($all=="all") {
                echo "Tous les produits";
            }
            ?></h1>

            <table border="1" cellpadding="10">
            <tr>
                <th>Nom</th>
                <th>Photo</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Panier</th>
            </tr>

            <?php

            while ($nom = $reponse->fetch()){

            ?>

            <tr>
                <th><?php echo $nom['name']; ?></th>
                <th><?php echo '<img id="imageddb" src="'; echo $nom['image']; echo '" />'; ?></th>
                <th><?php echo $nom['description']; ?></th>
                <th><?php echo $nom['unit_price']; ?>,00€</th>
                <?php 

                    $name = $nom['name'];
                    $image = $nom['image'];
                    $unit_price = $nom['unit_price'];

                    ?>
                    <th>

                        <form action="mon_panier.php" method="GET">
                            
                            <input type="number" name="quantity" min="1" max="100" step="1" value="1" style="width: 50px;">
                            <input type="hidden" name="name" value="<?php echo($name); ?>" />
                            <input type="hidden" name="unit_price" value="<?php echo($unit_price); ?>" />
                            <input type="hidden" name="image" value="<?php echo($image); ?>" />
                            <input type="submit" name="cart" value="Ajouter au panier">

                        </form>
                </th>
            </tr>
            
        
    <?php }} ?>

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









