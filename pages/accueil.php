<?php

require('outils.php') ;

?>

<!DOCTYPE html>     <!-- PAGE : MODELE.HTML -->



<html>



<head>

  <title>Carrera</title>

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

    

    <div id="contenu">

    
      <br>
      <br>

        <h1> 
            Les nouveautés

        </h1>

        <br>
          
    <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="../images/1.PNG" class="image_diapo">
          <div class="text_diapo">DTM - Fast Lap</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="../images/2.PNG" class="image_diapo">
          <div class="text_diapo">Quadrocopter Video Next</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="../images/8.PNG" class="image_diapo">
          <div class="text_diapo">PUSTEFIX - Large Tube rainbow bubbles</div>
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
    
    <a href="#" class="top">Haut de page</a>
    
    
    </p>

    <div width=90% boder=1><H1>Actualités</H1><H3>Découvrez nos nouvelles gammes de circuits!</H3><p>Stock renouvelé toutes les semaines. Merci de réserver sur le site et passer en magasin pour régler et emporter votre commande.</p></div>
    <br>
    <p>
        <h1>
        Promos et bons plans 
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

      
        <table align="center">

        <tr>

          <td>

            <div id="follow">

              <a href="https://www.facebook.com" target="_blank"> <img src="../images/LogoFB.png" class="logo" /></a>

              <a href="https://www.youtube.com" target="_blank"> <img src="../images/LogoYT.png" class="logo" /></a>

              <a href="https://www.instagram.com" target="_blank"> <img src="../images/LogoInsta.png" class="logo" /></a>

            </div>

          </td>

              <td>

                <ul>

                    <li><a href="http://www.hei.fr/" target="_blank"> Mentions légales </a></li>

                  </ul>

              </td>

              <td>

                  <ul>

                    <li><a href="aide.php">Besoin&nbsp;d&#145;aide&nbsp;?</a></li>

                  </ul>

              </td>

              <td>

                <ul>

                  <li><a href="InfoCarrera.html">Information sur la marque</a></li>

          </tr>

      </table>   

<body background="../images/briquequalite.jpg">



      <p>Mise &agrave; jour : 18/05/2018</p>

       

    </footer> <!-- fin du pied de page -->





</body>



</html> 









