<?php require_once('require/navbar.php');

if(!isset($_SESSION["admin"])){
  header("Location: connexion.php");
}

?>
<div class="container mt-5">
    <h2 class="mb-4">Création</h2>

<form class="row g-3 border" action="require/traitement_admin.php" method="POST">
  <div class="col-md-6">
    <label class="form-label">Marque</label>
    <input type="text" class="form-control" name="marque">
  </div>
  <div class="col-md-6">
    <label class="form-label">Model</label>
    <input type="text" class="form-control" name="model">
  </div>
  <div class="col-md-6">
    <label class="form-label">Prix</label>
    <input type="number" class="form-control" name="prix">
  </div>
  <div class="col-md-4">
    <label  class="form-label">Photo</label>
    <input type="text" class="form-control" name="photo">
  </div>
  <div class="col-md-2">
    <label class="form-label">disponible</label>
    <input type="number" class="form-control" name="disponible">
  </div>
  <div class="col-12">
    <button type="submit" name="creation" class="btn btn-primary mb-3">Ajouter</button>
  </div>
</form>
</div>
