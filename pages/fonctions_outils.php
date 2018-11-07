<?php function afficheMenu() {

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
        
        if ( isset($_SESSION["identifiant"]) ) // si la session existe
        {
          if ( $_SESSION["identifiant"] == 1 )  // si la session vaut 1
          {
            //affichage du bouton mon compte
           echo' </td>
          
      <td><li>
               <a href="mon_panier.php"> Mon panier </a>
          </li
      </td>  
            </tr>
    
          </table>
          </div>';
        }

           

          
          
        // test de session
      
      if ( isset($_SESSION["identifiant"]) ) // si la session existe
        {
          if ( $_SESSION["identifiant"] == 0 )  // si la session vaut 0
            {
              // affichage du bouton de connexion
              echo '<li>
                <a href="#">Connexion / Inscritpion</a>
                <ul>
                        <li><a href="connexion.php">Connexion</a></li>
                        <li><a href="inscription.php">Inscription</a></li>
                </ul>
        </li>';
            }
          else  // si la session vaut 1
            {
              // affichage du bouton de déconnexion
              echo '<li><a href="deconnexion.php">D&eacute;connexion</a></li>';
            }
        }
      else // si la session n'existe pas
        {
          // affichage du bouton de connexion
          echo '<li>
                <a href="#">Connexion / Inscritpion</a>
                <ul>
                        <li><a href="connexion.php">Connexion</a></li>
                        <li><a href="inscription.php">Inscription</a></li>
                </ul>
        </li>';    
        } 
}
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
        
          <form method="Get" action="produit.php">
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
        </li></td>
        </form>
           

          <td><li>
                <a href="#">Connexion / Inscritpion</a>
                <ul>
                        <li><a href="connexion.php">Connexion</a></li>
                        <li><a href="inscription.php">Inscription</a></li>
                </ul>
        </li></td>
           
           <td> </td>
           <td>

               <li>
                <a href="mon_panier.php">Mon Panier</a>
               </li>
          </td>
           
            </tr>
    
          </table>
          </div>';

}

?>