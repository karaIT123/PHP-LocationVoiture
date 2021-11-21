<?php
require_once('Require/navbar.php');

if(!isset($_SESSION["logIn"])){
   header("Location: connexion.php");
 }

#var_dump($_POST);


function getSql($id,$motcle){

   $sql = null;

   if($id == "1"){
      $sql = "SELECT * FROM auto WHERE noserie = '$motcle'";
   }
   else if($id == "2"){
      $sql = "SELECT * FROM auto WHERE marque = '$motcle'";
   }
   else if($id == "3"){
      $sql = "SELECT * FROM auto WHERE modele = '$motcle'";
   }
   else{
      $sql = null;
   }


   return $sql;
}


$entiteId = null;
$motcle = null;
$data = null;
$auto="";


if(isset($_POST["entite"]) && isset($_POST["motcle"])){
   
   $motcle = $_POST["motcle"];
   $entiteId = $_POST["entite"];
   
   


   
   $query = getSql($entiteId,$motcle);

   $data = execut_requete($query);
   #$auto =$data->fetch_assoc();

   #var_dump($auto);
}




?>


<div class="container">

      <h2 class="mb-5 ">Recherche</h2>

      <form action="Recherche.php" method="POST">
       <div class="row">
         <div class="col-12">
            <div class="mb-3">
               <label  class="form-label">Mot-cle</label>
               <input type="text" class="form-control" name="motcle" placeholder="mot-cle">
            </div>
          </div>
            <!-- 1 -->
         <div class="col-9">
            <div class="mb-3">

               <select class="form-select" name="entite">
                  <option selected>Choisissez l'entite de la recherche</option>
                  <option value="1">Numero de serie</option>
                  <option value="2">Marque</option>
                  <option value="3">Model</option>
               </select>
            </div>
         </div>

         <!-- 2 -->
         <div class="col-3">
            <button  class="btn btn-primary w-100">Rechercher</button>
         </div>
       </div>
      </form>

</div>



<div class="container">
    <div class="row row-cols-1 row-cols-md-4 g-4 mt-5">
      <?php 
      if(isset($_POST["entite"]) && isset($_POST["motcle"]))
      {
         //$auto = $_POST["auto"];
      
      while($auto=$data->fetch_Object()): 
      ?>

        <div class="col px-2">
          <div class="card" style="width: 18rem;">
            <img src="<?= $auto->photo?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $auto->marque?></h5>
                <p class="card-text"><?= $auto->modele?></p>
                <a href="show.php?id=<?= $auto->noserie ?>" class="btn btn-primary">Afficher</a>
              </div>
          </div>
        </div>
        
        <?php endwhile ?>
    </div>
  </div>
      
      <?php
      }
      ?>




               
