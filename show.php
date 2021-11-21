<?php

require_once('require/navbar.php');
//require_once('Require/fonction.php');

if(isset($_POST["ajouterPanier"]))
{
    //echo($_POST["noserie"] . $_POST["marque"] . $_POST["modele"] . $_POST["disponible"] . $_POST["prix"]);
    $noserie = $_POST["noserie"];
    $marque = $_POST["marque"];
    $modele = $_POST["modele"];
    $disponible = $_POST["disponible"];
    $prix = $_POST["prix"];
    
    ajoutPanier($noserie,$marque,$modele,$disponible,$prix);
    execut_requete("UPDATE auto SET disponible = disponible - $disponible WHERE noserie = $noserie");
    header("Refresh:0");
    //var_dump($_POST["qte"]);
};


$id =  null;
if(isset($_GET["id"])){
    $id = $_GET["id"];
}

$data = execut_requete("Select * from auto where noserie = " . $id);




?>

<div class="container mt-5">
    <div class="row">
    <?php if($voitures=$data->fetch_Object()): ?>

        <?php if($voitures->disponible < 1): ?>
            <div class="alert alert-info">
                Cet article est plus disponible
            </div>
        <?php endif ?>

        <?php if($voitures->disponible >= 1): ?>
            <div class="col-6">
                <img class="img-fluid w-100" src="<?= $voitures->photo ?>" >
            </div>
            <div class="col-6">
                <h1 class="text-primary"><?= $voitures->prix ?>  $</h1>

                <h3 class="mb-5"><?= $voitures->marque ?> - <i><?= $voitures->modele ?></i></h3>

                <hr>

                <form action="" method="POST">
                    <input type="hidden" name="noserie" value=<?= $voitures->noserie ?> >
                    <input type="hidden" name="marque" value=<?= $voitures->marque ?> >
                    <input type="hidden" name="modele" value=<?= $voitures->modele ?> >
                    <input type="hidden" name="prix" value=<?= $voitures->prix ?> >

                    <select class="form-select form-select-lg mb-3" name="disponible" aria-label=".form-select-lg example">
                        <?php for($i = 1; $i <= $voitures->disponible; $i++): ?>
                        
                        <option value=<?= $i ?>><?= $i ?></option>
                       
                        <?php endfor ?>
                    </select>
                    <button name="ajouterPanier" class="btn btn-primary">Ajouter au panier</button>
                </form>
                
            </div>
        <?php endif ?>


    <?php endif ?>
    </div>
</div>