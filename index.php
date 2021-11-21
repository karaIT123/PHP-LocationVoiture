<?php require_once('require/navbar.php');

if(!isset($_SESSION["logIn"])){
  header("Location: connexion.php");
}

//require_once('Require/fonction.php');

$data = execut_requete("Select * from auto where disponible >= 1");
$voitures =$data->fetch_assoc();
#var_dump($voitures);

?>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
   <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 8"></button> -->
  </div>


<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/img1.jpg" class="d-block w-100 img-fluid">
      <div class="carousel-caption d-none d-md-block">
        <h5>NOUS SOMMES OUVERT DE LUNDI A VENDREDI 7J/7 ~ 24H/24 A PARTIR DE 10H30</h5>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/img2.jpg" class="d-block w-100 img-fluid" width="80"  height="550"  alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>SENTEZ VOUS CHEZ VOUS</h5>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/img3.jpg" class="d-block w-100 img-fluid"  width="80"  height="550" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>

    <!--
    <div class="carousel-item">
      <img src="image/im4.jpg" class="d-block w-100 img-fluid"  width="80"  height="580" alt="...">
      <div class="carousel-caption d-none d-md-block">
        
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/im11.jpg" class="d-block w-100" Height="550" Width="80" alt="...">
      <div class="carousel-caption d-none d-md-block">
        
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/im10.jpg" class="d-block w-100" Height="550" Width="80" alt="...">
      <div class="carousel-caption d-none d-md-block">
        
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/im9.jpg" class="d-block w-100"    Height="550" Width="80"  alt="...">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
      </div>-->


    </div>
</div>

<div class="container mt-5">
<div class="row row-cols-1 row-cols-md-4 g-4">
<?php while($voitures=$data->fetch_Object()): ?>
  <div class="col">
    <div class="card">
      <img src="<?= $voitures->photo?>" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title text-center"><?= $voitures->marque?></h5>
        <p class="card-text"><?= $voitures->modele?></p>
        <hr>
        <a href="show.php?id=<?= $voitures->noserie ?>" class="btn btn-primary">Afficher</a>
        
      </div>
    </div>
  </div>
  <?php endwhile ?>
</div>
</div>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    </body>
</html>



