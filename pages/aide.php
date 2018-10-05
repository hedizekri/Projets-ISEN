<?php

require ('outils.php');

?>

<!DOCTYPE html>     <!-- PAGE : MODELE.HTML -->

<html>

<head>
  <title>Sap2lux</title>
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
    
    <div id="menu">
    
    <?php
        afficheMenu();
    ?>    
     

    </div> <!-- fin menu -->
    
    <!-- ******************************************************* -->
    <!--                 CONTENU                                 -->
    <!-- ******************************************************* -->
    
    <div id="contenu">
     
     <table style="width:80%" >
     
     <tr>
        <td> <center><h1> Nous trouver</h1> </center> </td>
        <td> <center><h1> Nous contacter</h1> </center> </td>
            
    </tr>
     
     <tr>
     
    <td> <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.61971792433!2d3.0465229152651183!3d50.63418087950117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d578da129f7d%3A0xd134d73fb7f4c699!2sISEN+Lille!5e0!3m2!1sfr!2sfr!4v1538589946729" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></center> </td> 
    
    
    
    <td> 
                     
                     <p><b>Alexandre Alhinc :</b> alexandre.alhinc@isen.yncrea.fr</p>
                     <p><b>Clément Villalba :</b> clement.villalba@isen.yncrea.fr</p>
                     <p><b>Hedi Zekri :</b> hedi.zekri@isen.yncrea.fr </p>
                     <p><b>Hubert Milliotte :</b> hubert.milliotte@isen.yncrea.fr</p>
                     
                     <br> 
                     <h4> <center>
                     <p> Téléphone: 03 20 30 40 50 </p>
                    <p> Adresse: 41 Boulevard Vauban, 59800 Lille</p>
                    </center> </h4> 
                    
                    
                    
                    
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

      <p>Mise &agrave; jour : 14/02/2018</p>
    
    </footer> <!-- fin du pied de page -->


</body>

</html> 


