<?php

  require_once('Require/fonction.php');

?>



<html>
    <head>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="stylesheet" href="Require\style.css">
        <title></title>
    </head>
    <body>
    
       
       
        
        <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
			<div class="card card0 border-0">
				<div class="row d-flex">
				    <div class="col-lg-6">
                        <div class="card2 card border-0 px-4 py-5">
							<div class="row shadow-none p-4 mb-4 bg-light">
								<h6 class="mb-0 mr-4 mt-2">Sign up with</h6>
							</div>

							<!-- DEBUT DU FORMULAIRE -->

                     <form action="Inscription.php" method="POST">

				      <div class="row px-3"> <label class="mb-1">
									<h6 class="mb-0 text-sm">First Name</h6>
								</label> <input class="mb-4" type="text" name="firstname" placeholder="Enter your fisrt name" required></div>
							    <div class="row px-3"> <label class="mb-1">
									<h6 class="mb-0 text-sm">Last Name</h6>
								</label> <input type="text" name="lastname" placeholder="Enter your last name" required></div>
                                <div class="row px-3"> <label class="mb-1"><br>
									<h6 class="mb-0 text-sm">Adress</h6>
								</label> <input type="text" name="address" placeholder="Enter your address" required> </div>
                               
						</div>
					</div>
				
					<div class="col-lg-6">
                    <br><br><br><br>
						<div class="card2 card border-0 px-4 py-5">
                                
                            <div class="row px-3"> <label class="mb-1">
									<h6 class="mb-0 text-sm">nom</h6>
								</label> <input type="text" name="nom" placeholder="nom" required></div>
                            
                            <div class="row px-3"> <label class="mb-1">
									<h6 class="mb-0 text-sm">prenom</h6>
								</label> <input type="text" name="prenom" placeholder="Entrer votre prenom" required></div>
                            
                                <div class="row px-3"> <label class="mb-1">
								<br><h6 class="mb-0 text-sm">Adresse email</h6>
								</label> <input type="email" name="email" placeholder="Entrer une adresse email valide" required></div><br>
                            <div class="row px-3"> <label class="mb-1">
									<h6 class="mb-0 text-sm">Telphone</h6>
								</label> <input type="tel" name="telephone" placeholder="Entrer votre telephone" required></div>
                            <div class="row px-3"> <label class="mb-1">
									<h6 class="mb-0 text-sm">Login</h6>
								</label> <input type="text" name="login" placeholder="Entrer votre login" required></div>
                            
                                <div class="row px-3"> <label class="mb-1">
									<br><h6 class="mb-0 text-sm">Password</h6>
								</label> <input type="password" name="password" placeholder="Enter a password" required> </div>
                                <div class="card2 card border-0 px-4 py-5">
							        <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center"  name="inscrire">S'inscrire</button> </div>
						        </div>
                                </div>
					</div>

					</form>

					<!-- FIN DU FORMULAIRE -->
				</div>
			</div>
        </div>


        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
       
    </body>
</html>


<?php
//Définition des informations de connexion

    //Envoi de la requete
    if(isset($_POST['Inscrire']))
    {
            $sql= "INSERT INTO client(code,prenom,nom,email,telephone,login,password) VALUES   
            ('$_POST[code]','$_POST[nom]', '$_POST[prenom]','$_POST[email]','$_POST[telephone]','$_POST[login]','$_POST[password]')";
            
            $result=execut_requete($sql);
            if($result)
            {
                header("Location:traitement.php");
                echo"<script type='text/javascript'>alert('Données insérées avec success')</script>";
            }  

            else
            {
                echo"<script type='text/javascript'>alert('Données non insérées')</script>";
            }
                
        } 
       ?> 