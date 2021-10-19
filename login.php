<?php
	if (isset($_POST["mail_entra"]) && isset($_POST["pass_entra"])) {
		$mail = 'ericvidiella@iesmontsia.org';
		$pass = 'Admin1234';
		$mailEntra = $_POST["mail_entra"];
		$passEntra = $_POST["pass_entra"];
		$tipus= 'maker';

		if ($passEntra == $pass && $mailEntra == $mail) {
			session_start();
			
			switch ($tipus) {
				case 'maker':
				  header("Location: ./recursos.php");
				  die();
				  break;
			
				case 'promotor':
				  header("Location: ./professors/index.php");
				  die();
				  break;
			
				default:
				  header("Location: login.php");
				  die();
				  break;
			  }
		  
		} else {
			header("Location: login.php");
			die();
		}
	}
	
?>

<!DOCTYPE html>
<html lang="es">

	<?php include_once "./head.html" ?>
	<script src="validacions.js"></script>

	<body class="home">
	
		<div class="navbar navbar-inverse navbar-fixed-top headroom" >

			<?php include_once "./headernoregistrat.html" ?>

		<div class="navbar-blue">
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav left">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="proposta.php">Propostes</a></li>
					<li><a href="">Projectes</a></li> 
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">X <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="">E</a></li>
							<li><a href="">X</a></li>
						</ul>
					</li>
					<li><a href="">Contacte</a></li>
				</ul>
			</div>
		</div>
	</div> 



	<div class="container info margin-top-login">
		<div class="row">  
		  <article class="col-xs-12 maincontent">	   
			  <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				  <div class="panel panel-default">
					  <div class="panel-body">
						  <h3 class="thin text-center">Inicia sessió</h3>
						  <p class="text-center text-muted">Si no tens un compte el pots crear ràpidament <a href="signup.php">aquí</a>, si ja en tens un entra al teu compte i posa't mans a la feina </p>
						  <hr>
						  
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
									  <button class="btn btn-action" onclick="checkUsername()" type="submit">Entrar</button>
								  </div>
							  </div>
						  </form>
					  </div>
				  </div>
			  </div>	  
		  </article>
	 	</div>
	</div>

  	<footer id="footer" class="top-space">		
		<?php include_once "./footer1.html" ?>
		<?php include_once "./footer2.html" ?>
	</footer>	
	
	<?php include_once "./scripts.html" ?>

	</body>
</html>