<?php 

function afficheTitre() {

    echo '<a href="accueil.php"><img center src="../images/logo.png" class="logo_titre"></a>';

}

function afficheMenu() {

echo 
        '
        <div id="menu_deroulant">

        <table align="center">

        <tr>
        <td>

               <li>
                <a href="recherche.php">Recherche</a>
               </li>
          </td>


          <td>

               <li>
                <a href="tous_les_produits.php">Tous les produits</a>
               </li>
          </td>
          <td>
               <li>
                <a href="#">Homme / Femme</a>
                <ul>
                        <li><a href="homme.php">Homme</a></li>
                        <li><a href="femme.php">Femme</a></li>
                </ul>
        </li>
          <td>
        </td>

          <td><li>
                <a href="#">Par Type</a>
                <ul>
                        <li><a href="Costumes.php">Costumes</a></li>
                        <li><a href="pantalons.php">Pantalons</a></li>
                        <li><a href="pulls.php">Pulls</a></li>              
                        <li><a href="chaussures.php">Chaussures</a></li>
                </ul>
        </li></td>';
        
        if ( isset($_SESSION["auth"]) ) // si la session existe
        {
          if ( $_SESSION["auth"] == 1 )  // si la session vaut 1
          {
            //affichage du bouton mon panier
           echo'
            <td>
              <li>
                <a href="mon_panier.php"> Mon panier </a>
              </li>
            </td>';
          }
        }



        if ( isset($_SESSION["auth"]) ) // si la session existe
        {
          if ( $_SESSION["auth"] == 1 )  // si la session vaut 1
          {
            //affichage du bouton mon panier
           echo'
            <td>
              <li>
                <a href="mon_compte.php"> Mon compte </a>
              </li>
            </td>';
          }
        }

           

          
          
        // test de session
      
      if ( isset($_SESSION["auth"]) ) // si la session existe
        {
          if ( $_SESSION["auth"] == 1 )  // si la session vaut 1
            {
              // affichage du bouton de connexion
              echo '<td><li><a href="deconnexion.php">D&eacute;connexion</a></li></td>';
            }

          else  // si la session ne vaut pas 1
            {
              // affichage du bouton de déconnexion
              echo '
              <td>
                <li>
                  <a href="connexion_inscription.php">Connexion / Inscritpion</a>
                  
                </li>
              </td>';
            }
        }
      else // si la session n'existe pas
        {
          // affichage du bouton de connexion
          echo '<td><li>
                <a href="connexion_inscription.php">Connexion / Inscritpion</a>
                
        </li></td>';

        }

        echo '
        </tr>
    
          </table>
          </div>';     
}

function afficheFooter() {


echo '

        <input onclick="topFunction()" id="myBtn" type="image" src="../images/top.png" />

        <script>
          // quand l utilisateur scroll de 20px, montrer le bouton
          window.onscroll = function() {scrollFunction()};

          function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                  document.getElementById("myBtn").style.display = "block";
              } else {
                  document.getElementById("myBtn").style.display = "none";
              }
          }

          // When the user clicks on the button, scroll to the top of the document
          function topFunction() {
              document.body.scrollTop = 0;
              document.documentElement.scrollTop = 0;

              
          }
        </script>

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

                    <li><a href="http://www.isen.fr/" target="_blank">Mentions légales</a></li>

                  </ul>

              </td>

              <td>

                  <ul>

                    <li><a href="aide.php">Besoin&nbsp;d&#145;aide&nbsp;?</a></li>

                  </ul>

              </td>

              <td>

                <ul>

                  <li><a href="informations_marque.php">Informations sur la marque</a></li>
                </ul>
              </td>

          </tr>

      </table>



      <p>Mise &agrave; jour : 16/10/2018</p>

      ' ;

}


?>