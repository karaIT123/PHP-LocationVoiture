<?php

require_once("fonction.php");

if(isset($_POST["logOut"]))
{
      unset($_SESSION["logIn"]);
      header("Location: ../connexion.php");
}

if(isset($_POST["logOut_admin"]))
{
      unset($_SESSION["admin"]);
      header("Location: ../connexion.php");
}