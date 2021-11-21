<?php 
    require_once('Require/navbar.php');
    $msg = $_GET["message"];
?>

<div class="container mt-5">
    <?php if($msg == 'danger'): ?>
        <div class="alert alert-danger">
            Erreur rencontre lors de la location veuillez ressayer ou contacter l'administrateur. 
        </div>
    <?php endif ?>
        <div class="alert alert-success">
            Location effectuer avec success. MERCI !!!
        </div>

        <a class="btn btn-outline-dark" href="index.php"> Acceuil </a>
</div>