<?php


//Aquest fitxer ens serveix per a validar per post la informació la qual l'usuari ha posat en el formulari
//de login, hem creat un usuari i una contrasenya manualment la qual hem creat i fem una comparació amb la que
//ha posat i la que hem creat si pot accedir realitzarem un session_start i si es un maker, entrará directament
//al fitxer recurs.php, en canvi, si no pot entrar torna a redirigir-lo a la mateixa pàgina on podrà tornar a 
//intentar iniciar sessió.

	if (isset($_POST["mail_entra"]) && isset($_POST["pass_entra"])) {
		
		$mail = 'admin@admin.com';
		$pass = 'admin';
		$mailEntra = $_POST["mail_entra"];
		$passEntra = $_POST["pass_entra"];
		$tipus= 'maker';

		if ($passEntra == $pass && $mailEntra == $mail) {
			session_start();
			$valid = 1;
			
			switch ($tipus) {
				case 'maker':
				  header("Location: ./perfil.php");
				  die();
				  break;
			
				default:
				  header("Location: login.php");
				  die();
				  break;
			}
		
		} else {
			$valid = 0;
			header("Location: login.php?success=false");
			die();
		}
	}
	
?>

<!DOCTYPE html>
<html lang="es">
	<!--1.Head-->
	<?php include_once "./head.html" ?>
	<script src="validacions.js"></script>

	<body class="home">
	
		<div class="navbar navbar-inverse navbar-fixed-top headroom" >

			<!--2.Header no registrat-->
			<?php include_once "./headernoregistrat.html" ?>

		<!--3. Navbar blau-->	
		<?php include_once "./segonheader.html" ?> 


	<!--4. Container principal amb tota la informació del formulari de inici de sessió.-->	

	<div class="container info margin-top-login">
		<div class="row">  
		  	<article class="col-xs-12 maincontent">	   
			  	<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				  	<div class="panel panel-default">
					  	<div class="panel-body">
						  	<h3 class="thin text-center">Inicia sessió</h3>
						  	<p class="text-center text-muted">Si no tens un compte el pots crear ràpidament <a href="signup.php">aquí</a>, si ja en tens un entra al teu compte i posa't mans a la feina </p>
						  	<hr>
						  	<?php
						 		if(isset($_GET["success"])){
									echo '<p class="validacio-php">Email o la contrasenya són incorrectes. Intenta-ho de nou.</p>';
						 		}   
						   	?>
						  	<form action="login.php" method="post">
							  	<div class="top-margin">
								  	<label>Email <span class="text-danger">*</span></label>
								  	<input type="text" name="mail_entra" id="email" class="form-control">
								  	<p class="error-login" id="erroremail"></p>
							  	</div>
							  	<div class="top-margin">
								  	<label>Contrasenya <span class="text-danger">*</span></label>
								  	<input type="password" name="pass_entra" id="password" class="form-control">
								  	<p class="error-login" id="errorpassword"></p>
							  	</div>

							  	<hr>

							  	<div class="row">
								  	<div class="col-lg-8">
									  	<b><a href="">Has olvidat la contrasenya?</a></b>
								  	</div>
								  	<div class="col-lg-4 text-right">
									  	<button class="btn btn-action" onclick="checkUser(); return false;" >Entrar</button>
								  	</div>
							  	</div>
						  	</form>
					  	</div>
				  	</div>
			  	</div>	  
		  	</article>
	 	</div>
	</div>

	<!--5. Footer-->	

  	<footer id="footer" class="top-space">		
		<?php include_once "./footer1.html" ?>
		<?php include_once "./footer2.html" ?>
	</footer>	
	
	<!--6. Scripts-->	

	<?php include_once "./scripts.html" ?>

	</body>
</html>