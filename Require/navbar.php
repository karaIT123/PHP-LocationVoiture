<html>
    
    <head>
        <meta charset='utf-8'>
        <title>Auto-Verte</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   </head>
    <body>

<?php 
  require_once('fonction.php');  
  creationPanier();
  $count=count($_SESSION['panier']['noserie']); 
  //echo $count 
  #var_dump($_SESSION["Login"]);

?>
        
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark me-auto">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Auto-Verte</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Acceuil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="Recherche.php">Recherche</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="panier.php">Panier  <span class="badge bg-secondary"><?= $count ?></span></a> 
              </li>
            </ul>
          </div>
          <a class="btn btn-light ml-2" style="margin-right: 6px;" href="administration.php"> Administration</a>
          <form class="d-flex px-0 mx-0" style="margin: 0!important; padding: 0!important" action="require/log.php" method="POST">
          
          <?php if(isset($_SESSION['logIn'])): ?>
            <!--<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
            <button class="btn btn-outline-danger mr-2" type="submit" name="logOut"> Deconnection</button>
            <?php else: ?>
              <a class="btn btn-outline-light" href="connexion.php"> Connexion</a>
            <?php endif ?>
          </form>

        </div>
      </nav>
        

      
     <!-- <hr />
     <p>
     <marquee>   
BIENVENUE CHEZ AUTOVERTE,LEADER DANS LA LOCATION D'AUTOMOBILE SUR LE MARCHE MONTREALAIS ET QUI VOUS PROPPOSE DES SERVICES PRECIS A UN PRIX DE FAMILLE
    </marquee> 
    </p> 
    <hr />-->
        
        