<?php

 
require_once("navbar.php");


if(isset($_GET["noserie"]))
{
$noserie =$_GET["noserie"];
supprimerArticle($noserie);
//redirection
header("Location: ../panier.php");
}

if(isset($_GET["delete"]))
{
unset($_SESSION['panier']);

header("Location: ../panier.php");

}




if(isset($_GET["valider"]))
{
$c=count($_SESSION['panier']['noserie']);
echo("<div class='container mt-5'>");
echo("<h1 align=center>Details de la location</h1></br>");
echo("<h3>Nombre voiture louées: ".$c."</h3></br>");
echo("<h3>Liste des voitures: </h3>");

echo("<ul>");
for($i=0; $i < $c ; $i++) {
      echo("<li>");
      echo(" No ".($i + 1).": ".$_SESSION['panier']['marque'][$i] .  "-"   . $_SESSION['panier']['modele'][$i]. "</br>");
      echo("</li>");
}
echo("</ul><hr>");

echo("<h4>Montant du panier: ".montantGlobal()."</h4></br>");
#echo("<h3>Montant hors taxe: </br></br></h3>");
echo("<h4>Taxe (15%): " . montantGlobal() * 15 / 100  . "</br></br></h4>");
echo("<hr>");
echo("<h3 class='text-primary'>Montant total à payer: <mark class='text-primary'>".montantGlobal() * 1.15. "$</mark></br></br></h3>");
#echo("<h3></h3></br>");

echo("<hr>");

echo("<form method='POST'>");

$datetime_tomorrow = new DateTime('tomorrow');

#echo $datetime_tomorrow->format('Y-m-d');

echo('<div class="row">
<div class="col">
  <input type="date" class="form-control" name="dateDebut"  min=' .  date('Y-m-d') . ' value = '.date('Y-m-d').'>
</div>
<div class="col">
  <input type="date" class="form-control" name="dateFin" min=' .  $datetime_tomorrow->format('Y-m-d') . ' value = '. $datetime_tomorrow->format('Y-m-d').'>
</div>
</div>');


echo("<div class='d-grid gap-2 d-md-flex justify-content-md-end mt-3'>");

echo("<button name='valider' class='btn btn-primary me-md-2'>Valider</button>");
echo("</form>");

echo("</div>");
echo("</div>");





//
//insertion dans la bd
//

if(isset($_POST["valider"])){
      $conn=execute_conn();
      

      try{
            $count=count($_SESSION['panier']['noserie']);
            for ($i=0; $i < $count ; $i++) { 
                  $req="INSERT INTO location (noserie,datelocation,dateretour,prixlocation) VALUES ( " . $_SESSION['panier']['noserie'][$i] . " ,  " . $_POST['dateDebut'] . ", " . $_POST['dateFin'] . "," . $_SESSION['panier']['noserie'][$i] . ")";
                  mysqli_query($conn, $req);
            };

            unset($_SESSION["panier"]);
            
            header('Location: ../info.php?message=success');
      
      }
      catch(Exception $e)
      {
            header('Location: ../info.php?message=error');
      }

#$req="INSERT INTO location (noserie,datelocation,dateretour,prixlocation) VALUES (,.noserie,".datelocation('yy.m.d'),.dateretour('yy.m.d').montant_global().")";

/*if (mysqli_query($conn, $req)) {
      #echo "Effectuer le paiement par PayPal </br>";
      header('Location: info.php?message=success');
} else {
      #echo "Erreur : " . $req . "<br>" . mysqli_error($conn);
      header('Location: info.php?message=error');
}
*/

//afficher le bouton de paiement 

#require_once("PayPal_button.php");
}



}
