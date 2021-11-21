<?php

require_once('require/navbar.php');

if(!isset($_SESSION["logIn"])){
    header("Location: connexion.php");
  }
  
$id =  null;
if(isset($_GET["id"])){
    $id = $_GET["id"];
}

creationPanier();


affichePanier();



?>