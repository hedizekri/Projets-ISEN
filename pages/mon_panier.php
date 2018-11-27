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
    <h1>Mon Panier</h1>
    <hr />

      <?php

          if(isset($_GET['cart'], $_GET['name'],$_GET['unit_price'],$_GET['quantity'],$_GET['image'])){
          $unit_price = $_GET['unit_price'];
          $product_name = $_GET['name'];
          $quantity = htmlentities($_GET['quantity'], ENT_QUOTES, "ISO-8859-1");
          $image = $_GET['image'];

          $identifiant = $_SESSION['identifiant'];

          $reponse = $bdd->query('SELECT quantity FROM orders2 WHERE identifiant =  "'. $identifiant .'" AND product_name = "'. $product_name .'"');

          $product_quantity = $reponse->fetch();
          if(!empty($product_quantity)) {

           $nvquantity = $product_quantity['quantity'] + $quantity;

              $req = $bdd->prepare('UPDATE orders2 SET quantity = :nvquantity WHERE product_name = :product_name AND identifiant = :identifiant');

              $req->execute(array(

                'nvquantity' => $nvquantity,

                'product_name' => $product_name,

                'identifiant' => $identifiant,

              )
            );

          } else {

            $req = $bdd->prepare('INSERT INTO orders2(identifiant, product_name, unit_price, quantity, image) VALUES(:identifiant, :product_name, :unit_price, :quantity, :image)');

              $req->execute(array(

                'identifiant' => $identifiant,

                'product_name' => $product_name,

                'unit_price' => $unit_price,

                'quantity' => $quantity,

                'image' => $image,
              )
            );

          }


          }

      ?>

      <?php

      $total = 0;

      if(isset($_SESSION['identifiant'])){
        $reponse=$bdd->query("SELECT * FROM orders2 WHERE identifiant = '".$_SESSION['identifiant']."'");

      ?>

        <table border="1" cellpadding="10">

          <tr>
              <th>Nom</th>
              <th>Image</th>
              <th>Prix</th>
              <th>Quantité</th>
              <th>Supprimer</th>
          </tr>

      <?php

        while ($nom = $reponse->fetch()){

      ?>

       <?php $price = $nom['unit_price']*$nom['quantity'];
       $total = $total + $price;
       ?>


                <tr>
                    <th><?php echo $nom['product_name']; ?></th>
                    <th><?php echo '<img id="imageddb" src="'; echo $nom['image']; echo '" />'; ?></th>
                    <th><?php echo $price; ?>,00€</th>
                    <th><?php echo $nom['quantity']; ?></th>
                    <?php $product_name = $nom['product_name']; ?>

                    <th><form action="delete.php" method="GET">
                            
                            <input type="hidden" name="product_name" value="<?php echo($product_name); ?>" />
                            <input type="submit" name="delete" value="Supprimer">

                        </form>
                </tr>
                
            
      <?php 
        }
      } 

    ?>



      </table>

      <p>Total : <?php echo $total; ?>,00 €</p>


    

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