<?php 


if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
#session_destroy();
?>

<?php

#session_start();
function execut_requete($requete)
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "autoverte";
    
    // Create connection
    $link = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($link->connect_error) {
      die("Connection failed: " . $link->connect_error);
    }

    $result=$link->query($requete);
    if(!$result)
{
    die("Error into query SQL");
}
return $result;
     
}


function execute_conn()

{ 
$mysqli=new mysqli("localhost","root","root","autoverte");

if($mysqli->connect_error) die (" Erreur de connexion");

return $mysqli;

}
//Creation de panier
function creationPanier(){
  if (!isset($_SESSION['panier'])){
     $_SESSION['panier']=array();
     $_SESSION['panier']['noserie'] = array();
     $_SESSION['panier']['marque'] = array();
     $_SESSION['panier']['modele'] = array();
     $_SESSION['panier']['disponible'] = array();
     $_SESSION['panier']['prix'] = array();
     $_SESSION['panier']['verrou'] = false;
  }
  return true;
}

//Ajout d'articles dans le panier
function ajoutPanier($noserie,$marque,$modele,$disponible,$prix)
{
  $positionProduit = array_search($noserie,$_SESSION['panier']['noserie']);

    if($positionProduit!=false)
    {
      $_SESSION['panier']['disponible'][$positionProduit] += $disponible;
    }
    else
    {
      //Sinon on ajoute le produit
      array_push($_SESSION['panier']['noserie'],$noserie);
      array_push($_SESSION['panier']['marque'],$marque);
      array_push($_SESSION['panier']['modele'],$modele);
      array_push($_SESSION['panier']['disponible'],$disponible);
      array_push($_SESSION['panier']['prix'],$prix);
    }
   
}

//Afficher le panier
function affichePanier(){
    $count=count($_SESSION['panier']['noserie']);
?>
<table class="table table-dark text-left">
  <thead>
    <tr>
      <th colspan=6 class="text-center fs-1">Panier d'achat</th>
    </tr>
    <tr>
    <th scope="col">Numero de serie</th>
      <th scope="col">Marque</th>
      <th scope="col">Modele</th>
      <th scope="col">Quantite <!-- disponible--></th>
      <th scope="col">Prix</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php for ($i=0; $i < $count ; $i++) {  ?>
    <tr>
      <th scope="row"><?php echo ($_SESSION['panier']['noserie'][$i]);?></th>
      <td><?php echo ($_SESSION['panier']['marque'][$i]);?></td>
      <td><?php echo ($_SESSION['panier']['modele'][$i]);?></td>
      <td><?php echo ($_SESSION['panier']['disponible'][$i]);?></td>
      <td><?php echo ($_SESSION['panier']['prix'][$i]);?></td>
      <td><a href="require/traitement.php?noserie=<?php echo($_SESSION['panier']['noserie'][$i]);?>"><input class="btn btn-outline-danger btn-sm" type="submit" name="supprimer" value="supprimer"></a></td>
    </tr>
    <?php
  }
  ?>
  <tr>
    <td colspan="5"><h1>Total</h1></td>
    <td colspan="1"><h1> <?= montantGlobal();?> $ </h1></td>
  </tr>
  <tr class="text-center"><td colspan="2" ><a href="require/traitement.php?valider=true"><input class="btn btn-primary" type="submit" name="valider" value="valider et declarer le paiement"> </a></td>
  <td colspan="2" ><a class="btn btn-danger" href="require/traitement.php?delete=true"> Vider mon panier</a></td>
  <td colspan="2" ><a class="fs-2" href="index.php"> Autoverte</a></td></tr>
  </tr>
  </tbody>
</table>
<?php
}


//Afficher montant global
function montantGlobal()
{
$total=0;
$count=count($_SESSION['panier']['noserie']);
for ($i=0; $i <$count ; $i++) { 
	$total+=(int)$_SESSION['panier']['disponible'][$i]*(int)$_SESSION['panier']['prix'][$i];
}
return $total;

}


//Suppression article
function supprimerArticle($noserie)
{
   //Si le panier existe
   creationPanier() ;
      //Nous allons passer par un panier temporaire
      $tmp=array();
      $tmp['noserie'] = array();
      $tmp['marque'] = array();
      $tmp['modele'] = array();
      $tmp['disponible'] = array();
      $tmp['prix'] = array();
      $tmp['verrou'] = $_SESSION['panier']['verrou'];

      
      for($i = 0; $i < count($_SESSION['panier']['noserie']); $i++)
      {   
         if ($_SESSION['panier']['noserie'][$i] !== $noserie)
         {
          var_dump($_SESSION);
            array_push( $tmp['noserie'],$_SESSION['panier']['noserie'][$i]);
            array_push( $tmp['marque'],$_SESSION['panier']['marque'][$i]);
            array_push( $tmp['modele'],$_SESSION['panier']['modele'][$i]);
            array_push( $tmp['disponible'],$_SESSION['panier']['disponible'][$i]);
            array_push( $tmp['prix'],$_SESSION['panier']['prix'][$i]);
         }

      }
      //On remplace le panier en session par notre panier temporaire à jour
      $_SESSION['panier'] =  $tmp;

      //On efface notre panier temporaire
      unset($tmp);
   }

