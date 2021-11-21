<?php

require_once('fonction.php');


if(isset($_POST["connexion"]))
{

    if($_POST['nomutilisateur'] == 'root' && $_POST['motdepasse'] == 'root')
    {
        $_SESSION["admin"] = "admin";
        header("Location: ../administration.php");
    }
    else{
         #die("ok");
        $sql= "SELECT login,password FROM client where login='".$_POST['nomutilisateur']."' AND password='".$_POST['motdepasse']."';";

            
        $result=execut_requete($sql);
        if($result->fetch_assoc())
        {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION['logIn'] = $_POST['nomutilisateur'];
            #$_SESSION['password'] = $_POST['motdepasse']; 
            
            header('Location: ../index.php');
        }
        else{
            header('Location: ../connexion.php?error=true');
        }
    }
   
}
elseif(isset($_POST["inscription"]))
{
    $sql= "INSERT INTO client(prenom,nom,email,telephone,login,password) VALUES   
    ('$_POST[prenom]', '$_POST[nom]','$_POST[email]','$_POST[telephone]','$_POST[nomutilisateur]','$_POST[motdepasse]')";
    var_dump($sql);

    
    
    $result=execut_requete($sql);
    if($result)
    {
        header("Location: ../connexion.php?success=true");
        //echo"<script type='text/javascript'>alert('Données insérées avec success')</script>";
    }  
    else{
        header('Location: ../inscription.php?error=true');
    }
    
   
}
else{

}

?>