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
	    if(isset($_POST['recherche1'])){ // si formulaire soumis
            $recherche1 = $_POST['recherche1'];
            }
    ?>
    
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

    <div id="menu">
    
           <?php

        afficheMenu();

      ?>   
    
    </div> <!-- fin menu -->

    

    <!-- ******************************************************* -->

    <!--                 CONTENU                                 -->

    <!-- ******************************************************* -->

    <div id="contenu">
    <h1>Recherche</h1>
    <hr />
    </div> <!-- fin contenu -->
    
    
    
    
    <?php
        $reponse=$bdd->query("SELECT * FROM products WHERE name LIKE \"%$recherche1%\"");
        $req = $bdd->query("SELECT * FROM products WHERE name LIKE \"%$recherche1%\"");
    if(($recherche1 == "")||($recherche1 == "%")) 
        {
        echo "Veuillez entrer un mot clé s'il vous plaît!";
        }
    else
         {
            if($req->fetch() == FALSE)
                {
                echo "Aucun article n'a été trouvé";
                }
            else
                {
                ?>
                <table border="1" cellpadding="10">
                <tr>
                <th>Nom</th>
                <th>Photo</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Panier</th>
                </tr> 
                    
                <?php
                while ($nom = $reponse->fetch())
                {
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
                            
                            <input type="number" name="quantity" min="0" max="100" step="1" value="1" size="2">
                            <input type="hidden" name="name" value="<?php echo($name); ?>" />
                            <input type="hidden" name="unit_price" value="<?php echo($unit_price); ?>" />
                            <input type="hidden" name="image" value="<?php echo($image); ?>" />
                            <input type="submit" name="cart" value="Ajouter au panier">

                        </form>




                    </th>
                </tr>
                <?php
                }
                }}?>
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