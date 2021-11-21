<?php

 
require_once("fonction.php");


if(isset($_GET["suppression"]))
{
    $suppression = $_GET["suppression"];
    $sql= "DELETE FROM auto WHERE noserie = $suppression;";


            
        $result=execut_requete($sql);
        if($result)
        {
            
            header('Location: ../administration.php?delete=true');
        }
        else{
            header('Location: ../administration.php?nodelete=true');
        }
   
}



if(isset($_POST["edition"]))
{
    $marque = $_POST["marque"];
    $model = $_POST["model"];
    $prix = $_POST["prix"];
    $disponible = $_POST["disponible"];
    $photo = $_POST["photo"];

    $noserie = $_POST["noserie"];
    $sql= "UPDATE auto SET marque = '$marque', modele = '$model', prix = $prix, disponible = '$disponible', photo = '$photo' WHERE noserie = $noserie;";
    #var_dump($sql);

            
        $result=execut_requete($sql);
        if($result)
        {
            
            header('Location: ../administration.php?success=true');
        }
        else{
            header('Location: ../administration.php?error=true');
        }
   
}

if(isset($_POST["creation"]))
{
    $marque = $_POST["marque"];
    $model = $_POST["model"];
    $prix = $_POST["prix"];
    $disponible = $_POST["disponible"];
    $photo = $_POST["photo"];

    $sql= "INSERT INTO auto (marque,modele,prix,disponible,photo)  VALUES ('$marque', '$model', $prix,'$disponible','$photo');";
    //var_dump($sql);

            
        $result=execut_requete($sql);
        if($result)
        {
            
            header('Location: ../administration.php?up=true');
        }
        else{
            header('Location: ../administration.php?donw=true');
        }
}