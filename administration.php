<?php require_once('require/navbar.php');

if(!isset($_SESSION["admin"])){
  header("Location: connexion.php");
}

//require_once('Require/fonction.php');

$data = execut_requete("Select * from auto");
$voitures =$data->fetch_assoc();
#var_dump($voitures);


?>

<div class="container mt-5">

<?php if(isset($_GET['success'])): ?>
    <div class="alert alert-success">
      Modification effectuer avec succes !
    </div>
<?php endif?>

<?php if(isset($_GET['error'])): ?>
    <div class="alert alert-success">
      Erreur lors de la modification.
    </div>
<?php endif?>

<?php if(isset($_GET['up'])): ?>
    <div class="alert alert-success">
      Enregistrement effectuer avec succes !
    </div>
<?php endif?>

<?php if(isset($_GET['error'])): ?>
    <div class="alert alert-success">
      Erreur lors de l'enregistrement.
    </div>
<?php endif?>

<?php if(isset($_GET['delete'])): ?>
    <div class="alert alert-success">
      Suppression effectuer avec succes !
    </div>
<?php endif?>

<?php if(isset($_GET['nodelete'])): ?>
    <div class="alert alert-success">
      Erreur lors de la suppression.
    </div>
<?php endif?>



<div class="row">
  <div class="col-12">
  <form class="d-flex px-0 mx-0" action="require/log.php" method="POST">

 
  <div class="col-6 me-1">
      <a class="btn btn-outline-primary mr-2 w-100" href="creation.php"> Ajouter</a>
  </div>
  <div class="col-6 ms-1">
      <button class="btn btn-outline-danger mr-2 w-100" type="submit" name="logOut_admin"> Deconnection</button>
  </div>
 
  </form>
  </div>
</div>
  
<table class="table">
  <thead>
    <tr>
      <th scope="col">No #</th>
      <th scope="col">Marque</th>
      <th scope="col">Model</th>
      <th scope="col">Prix</th>
      <th scope="col">Photo</th>
      <th scope="col">disponible</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php while($voitures=$data->fetch_Object()): ?>
  <tr>
      <th scope="row"><?= $voitures->noserie?></th>
      <td><?= $voitures->modele?></td>
      <td><?= $voitures->marque?></td>
      <td><?= $voitures->prix?></td>
      <td><?= $voitures->photo?></td>
      <td><?= $voitures->disponible?></td>
      <td>
        <a href="edition.php?noserie= <?=$voitures->noserie?>" class="btn btn-warning">Editer</a>
        <a href="require/traitement_admin.php?suppression= <?=$voitures->noserie?>"class="btn btn-danger">Supprimer</a>
      </td>
    </tr>
  <?php endwhile ?>
  </tbody>
</table>
</div>




