<?php require_once('require/navbar.php');

if(!isset($_SESSION["admin"])){
  header("Location: connexion.php");
}

if(!isset($_GET["noserie"])){
    header("Location: administration.php");
}

$noserie = $_GET["noserie"];

#echo $noserie;
$data = execut_requete("SELECT * FROM auto WHERE noserie = $noserie");

$voitures =$data->fetch_object();
#var_dump($voitures);

?>
<div class="container mt-5">
    <h2 class="mb-4">Edition</h2>
<?php if($voitures != null): ?>
<form class="row g-3 border" action="require/traitement_admin.php" method="POST">
    <input type="hidden" name="noserie" value="<?= $voitures->noserie ?>">
  <div class="col-md-6">
    <label class="form-label">Marque</label>
    <input type="text" class="form-control" name="marque" value="<?= $voitures->marque ?>">
  </div>
  <div class="col-md-6">
    <label class="form-label">Model</label>
    <input type="text" class="form-control" name="model" value="<?= $voitures->modele ?>">
  </div>
  <div class="col-md-6">
    <label class="form-label">Prix</label>
    <input type="number" class="form-control" name="prix" value="<?= $voitures->prix ?>">
  </div>
  <div class="col-md-4">
    <label  class="form-label">Photo</label>
    <input type="text" class="form-control" name="photo" value="<?= $voitures->photo ?>">
  </div>
  <div class="col-md-2">
    <label class="form-label">disponible</label>
    <input type="number" class="form-control" name="disponible" value="<?= $voitures->disponible ?>">
  </div>
  <div class="col-12">
    <button type="submit" name="edition" class="btn btn-primary mb-3">Enregistrer</button>
  </div>
</form>
<?php else: ?>
    <div class="alert alert-danger">
        Rien a afficher
    </div>

<?php endif ?>
</div>
