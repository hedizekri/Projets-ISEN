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
            echo $recherche1;
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
        if(($recherche1 == "")||($recherche1 == "%")) {
        echo "Veuillez entrer un mot clé s'il vous plaît!";
        }
        else{
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
        $reponse=$bdd->query("SELECT * FROM products WHERE name LIKE \"%$recherche1%\"");
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
        
    
    <?php }}?>
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









