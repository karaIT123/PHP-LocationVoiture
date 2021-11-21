<?php
    require_once('Require/navbar.php');
?>



<div class="container mt-5 ">
<h2 >Inscription</h2>
<?php if(isset($_GET['error'])):?>
    <div class="alert alert-danger">
    Erreur: Nous avons rencontré des problèmes lors de l'incription veuillez reessayez.
    </div>
<?php endif ?>
<form class="row g-3 mt-2 border" method="POST" action="Require/utilisateur.php">
  <div class="col-md-6">
    <label class="form-label">Nom</label>
    <input type="text" class="form-control" placeholder="Nom" name="nom">
  </div>
  <div class="col-md-6">
    <label class="form-label">Prenom</label>
    <input type="text" class="form-control" placeholder="Prenom" name="prenom">
  </div>
  <div class="col-12">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" name="email" placeholder="user@example.com">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Telephone</label>
    <input type="phone" class="form-control" name="telephone" placeholder="+1 (234) 567 8900 ">
  </div>
  <div class="col-md-6">
    <label class="form-label">Nom d'utilisateur</label>
    <input type="text" class="form-control" name="nomutilisateur" placeholder="Nom d'utilisateur">
  </div>
  <div class="col-md-6">
  <label class="form-label">Mot de passe</label>
    <input type="password" class="form-control" name="motdepasse" placeholder="•••••••••••••">
  </div>
  
 
  <div class="col-12 pb-4">
    <button type="submit" name="inscription" class="btn btn-primary mr-2">S'inscrire</button><small> Deja un compte <a href="connexion.php">Se connecter</a></small>
  </div>
  
</form>
</div>