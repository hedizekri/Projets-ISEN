<?php

require ('outils.php');

?>

<!DOCTYPE html>     <!-- PAGE : MODELE.HTML -->

<html>

<head>
  <title>Carrera</title>
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
     
    <td> <center><iframe src="https://www.google.com/maps/embed?pb" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></center> </td> 
    
    
    
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


