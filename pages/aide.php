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
     
    <td> <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20246.952778992418!2d3.0412595441724286!3d50.629548521556515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d579573550df%3A0xaa9c89af983f58e9!2sHautes+%C3%89tudes+d&#39;Ing%C3%A9nieur!5e0!3m2!1sfr!2sfr!4v1523442005006" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></center> </td> 
    
    
    
    <td> 
                     
                     <p> <b> Nicolas Frys:</b> nicolas.frys@hei.yncrea.fr </p>
                     <p> <b> Clément Villalba:</b> clement.villalba@hei.yncrea.fr</p>
                     <p><b> Claire Delarue:</b> claire.delarue@hei.yncrea.fr</p>
                     <p> <b>Alexandre Teffaine:</b> alexandre.teffaine@hei.yncrea.fr</p>
                     <p> <b>Jean-Baptiste André:</b> jean-baptiste.andre@hei.yncrea.fr</p>
                     
                     <br> 
                     <h4> <center>
                     <p> Téléphone: +33 00 00 00 00 </p>
                    <p> Adresse: 13 rue de Toul, Lille 59000 </p>
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


