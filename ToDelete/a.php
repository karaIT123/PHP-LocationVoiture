<?php
  require_once('Require/fonction.php');

?>

<html>
    <head>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="stylesheet" href="Require\style.css">
        <title>ESSAI</title>
    </head>
    <body>
    
        <?php require_once('ToDelete/navbar-client.php');?>
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
									<h6 class="mb-0 text-sm">code</h6>
								</label> <input type="text" name="code" placeholder="Enter your code" required></div>
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