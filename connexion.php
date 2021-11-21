<?php
    require_once('Require/navbar.php');
?>



<div class="container w-25 mt-5">
<h2>Connexion</h2>
<?php if(isset($_GET['error'])):?>
    <div class="alert alert-danger">
    Nom d'utilisateur ou mot de passe incorrect.
    </div>
<?php elseif(isset($_GET['success'])): ?>
  <div class="alert alert-success">
    Inscription effectuée avec success.
    </div>
<?php endif ?>
<form class="row g-3 border mt-2" method="POST" action="Require/utilisateur.php">
  <div class="col-md-12">
    <label class="form-label">Nom d'utilisateur</label>
    <input type="text" class="form-control" placeholder="Nom d'utilisateur" name="nomutilisateur">
  </div>
  <div class="col-md-12">
    <label class="form-label">Mot de passe</label>
    <input type="password" class="form-control" placeholder="•••••••••••••••••" name="motdepasse">
  </div>
  
  
 
  <div class="col-12 pb-4">
    <button type="submit" name="connexion" class="btn btn-primary mr-2"> Se connecter</button><small> Pas de compte ? <a href="inscription.php">S'inscrire</a></small>
  </div>
  
</form>
</div>