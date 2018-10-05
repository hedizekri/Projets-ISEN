<?php 
  // fonction de connexion à la base de données

function cnxDB() {


$connexion = mysqli_connect("localhost","root","", "sap2lux");

  //on test la connexion
  if (!$connexion){
    die("Connexion impossible : ".mysqli_connect_error($connexion));
  }
  mysqli_set_charset($connexion,"utf-8");


}

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
                        <li><a href="chaussures.php">Costumes</a></li>
                        <li><a href="costumes.php">Pantalons</a></li>
                        <li><a href="pulls.php">Pulls</a></li>              
                        <li><a href="pantalons.php">Chaussures</a></li>
                </ul>
        </li></td>
           

          <td><li><a href="connexion_inscription.php">Connexion / Inscription</a></li> </td>
           
           <td> </td>
           
            </tr>
    
          </table>
          </div>';

}

function afficheFooter() {


echo '
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

                    <li><a href="http://www.isen.fr/" target="_blank"> Mentions légales </a></li>

                  </ul>

              </td>

              <td>

                  <ul>

                    <li><a href="aide.php">Besoin&nbsp;d&#145;aide&nbsp;?</a></li>

                  </ul>

              </td>

              <td>

                <ul>

                  <li><a href="informations_marque.php">Information sur la marque</a></li>

          </tr>

      </table>

<body background="../images/briquequalite.jpg">



      <p>Mise &agrave; jour : 18/05/2018</p>

      ' ;

}

function creationPanier()
{
        if (!isset($_SESSION['panier']))
        {
            $_SESSION['panier']=array();
            $_SESSION['panier']['titre'] = array();
            $_SESSION['panier']['description'] = array();
            $_SESSION['panier']['prix'] = array();
            $_SESSION['panier']['verrou'] = false;
        }
   return true;
}
 
function ajouterArticle($titre,$description,$prix){
 
   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //Si le produit existe déjà on ajoute seulement la quantité
      $positionProduit = array_search($type,  $_SESSION['panier']['titre']);
 

         //Sinon on ajoute le produit
         array_push( $_SESSION['panier']['titre'],$titre);
         array_push( $_SESSION['panier']['description'],$description);
         array_push( $_SESSION['panier']['prix'],$prix);
   }
   else{
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
} }
 
function supprimerArticle($type){
   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //Nous allons passer par un panier temporaire
      $tmp=array();
      $tmp['titre'] = array();
      $tmp['description'] = array();
      $tmp['prix'] = array();
      $tmp['verrou'] = $_SESSION['panier']['verrou'];
 
      for($i = 0; $i < count($_SESSION['panier']['type']); $i++)
      {
         if ($_SESSION['panier']['type'][$i] !== $type)
         {
            array_push( $tmp['type'],$_SESSION['panier']['titre'][$i]);
            array_push( $tmp['marque'],$_SESSION['panier']['description'][$i]);
            array_push( $tmp['prix'],$_SESSION['panier']['prix'][$i]);
         }
         
 
      }
      
    }
    else {
            echo "Un problème est survenu veuillez contacter l'administrateur du site.";
        }
      //On remplace le panier en session par notre panier temporaire à jour
      $_SESSION['panier'] =  $tmp;
      //On efface notre panier temporaire
      unset($tmp);
   }
   

function supprimePanier(){
   unset($_SESSION['panier']);
}

?>