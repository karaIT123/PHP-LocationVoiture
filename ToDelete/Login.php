<?php
  
  require_once('Require\fonction.php');
//require_once('Require\index.php');

?>
<html>
    <head>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="stylesheet" href="Require/style.css">
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    </head>

    <body>
        
   
        <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
			<div class="card card0 border-0">
				<div class="row d-flex">
				
					<div class="col-lg-6">
						<div class="card2 card border-0 px-4 py-5">
							<!---se connecter en tant que Administration--->
							<div class="row shadow-none p-4 mb-4 bg-light">
								<h6 class="mb-0 mr-4 mt-2">ADMINISTRATION</h6>
							</div>
							<form action="Login.php" method="POST">
								<div class="row px-3"> <label class="mb-1">
										<h6 class="mb-0 text-sm">Login</h6>
									</label> <input class="mb-4" type="text" name="login" placeholder="Enter a valid email address"> </div>
								<div class="row px-3"> <label class="mb-1">
										<h6 class="mb-0 text-sm">Password</h6>
									</label> <input type="password" name="password" placeholder="Enter password"> </div>
								<div class="row px-3 mb-4">
									<div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div> <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
								</div>
								<div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center" name="Usager"><a href="administration.php">Se connecter</a></button> </div>
							<div class="row mb-3 px-3"> <a href="Inscription.php"><input name="creation1" type="button" value="Creer un compte"></a></div>
						<!---->
						</div>
					</div>
					
					
					<div class="col-lg-6">
						<div class="card2 card border-0 px-4 py-5">
							<!---se connecter en tant que client--->
							<div class="row shadow-none p-4 mb-4 bg-light">
								<h6 class="mb-0 mr-4 mt-2">CLIENT</h6>
							</div>
							<form action="Login.php" method="POST">
								<div class="row px-3"> <label class="mb-1">
										<h6 class="mb-0 text-sm">Login</h6>
									</label> <input class="mb-4" type="text" name="login" placeholder="Enter a valid email address"> </div>
								<div class="row px-3"> <label class="mb-1">
										<h6 class="mb-0 text-sm">Password</h6>
									</label> <input type="password" name="password" placeholder="Enter password"> </div>
								<div class="row px-3 mb-4">
									<div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div> <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
								</div>
								<div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center" name="Usager"><a href="Usager.php">Se connecter</a></button> </div>
								
								<div class="row mb-3 px-3"> <a href="Inscription.php"><input name="creation2" type="button" value="Creer un compte"></a></div>
								
							</form>
							<!------>
						</div>
					</div>
					
					
				</div>
			</div>
</div>
     
    </body>
</html>


<?php

     //SE CONNECTER EN TANT QUE Client
     if(isset($_POST['Usager']))
     {
         // Verification
         $sql= "SELECT login,password FROM client where login='".$_POST['login']."' AND password='".$_POST['password']."';";

        
         $result=execut_requete($sql);
         if($result->fetch_assoc())
            {
                $_SESSION['Login']=$_POST['login'];
                $_SESSION['password']=$_POST['password']; 
				//header('Location: ./Usager.php');
            }
            else
            {
               echo"<script type='text/javascript'>alert('ERREUR ,VOS INFORMATIONS SONT INCORRECTES')</script>";
            }  
     }    
	 ?> 
	 <?php

//SE CONNECTER EN TANT QUE Administrion
if(isset($_POST['Usager']))
{
	// Verification
	$sql= "SELECT login,password FROM administration where login='".$_POST['login']."' AND password='".$_POST['password']."';";

   
	$result=execut_requete($sql);
	if($result->fetch_assoc())
	   {
			$_SESSION['Login']=$_POST['login'];
			$_SESSION['password']=$_POST['password']; 
			//header('Location: ./Usager.php');
	   }
	   else
	   {
		  echo"<script type='text/javascript'>alert('ERREUR ,VOS INFORMATIONS SONT INCORRECTES')</script>";
	   }  
}    

       ?> 

