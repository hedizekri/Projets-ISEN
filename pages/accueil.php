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
    
    </div> <!-- fin menu -->

    

    <!-- ******************************************************* -->

    <!--                 CONTENU                                 -->

    <!-- ******************************************************* -->

    
    <?php
    $reponse=$bdd->query("SELECT * FROM products");
    ?>
                    
    <?php
        $arrayindex = 0;
        while ($nom = $reponse->fetch())
        {
            $arrayindex = $arrayindex + 1;
        } 
    ?>

        
    <div id="contenu">
      <br>
      <br>
        <h1> 
            <img src="../images/nouveautes.png" class="titre_style" >
        </h1>
        <br>    
        <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <a href="https://education.francetv.fr/"><img id="imageddb" src="../images/images produit/<?php echo $arrayindex?>.png" /></a>
          <div class="text_diapo">Costume</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <a href="https://education.francetv.fr/"><img id="imageddb2" src="../images/images produit/<?php echo $arrayindex-1?>.png" /></a>
          <div class="text_diapo">Pantalon</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <a href="https://education.francetv.fr/"><img id="imageddb3" src="../images/images produit/<?php echo $arrayindex-2?>.png" /></a>
          <div class="text_diapo">Chaussures</div>
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
        
        <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }
        </script>

    </div>
  </div>

    <div width=90% boder=1>
        <h1>
            <img src="../images/actu.png" class="titre_style" >
        </h1>
        
        <h3>
            Découvrez nos nouvelles gammes de costumes !
        </h3>
        
        <p>Stock renouvelé toutes les semaines.</p>
    </div>
    <br>
    <p>
        <h1>
            <img src="../images/bons plans.png" class="titre_style" >
        </h1>

    </p>

    <p>

     Retrouvez toutes nos promos et bons plans directement en magasin.

    </p>

    

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









