<?php
  require_once('./sessio.php');
?>

<!DOCTYPE html>
<html lang="es">

	<?php include "./head.html" ?>

	<body class="home">
	
		<div class="navbar navbar-inverse navbar-fixed-top headroom" >

			<?php include "./headernoregistrat.html" ?>

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
						  
						  <form>
							  <div class="top-margin">
								  <label>Usuari/Email <span class="text-danger">*</span></label>
								  <input type="text" class="form-control">
							  </div>
							  <div class="top-margin">
								  <label>Contrasenya <span class="text-danger">*</span></label>
								  <input type="password" class="form-control">
							  </div>

							  <hr>

							  <div class="row">
								  <div class="col-lg-8">
									  <b><a href="">Has olvidat la contrasenya?</a></b>
								  </div>
								  <div class="col-lg-4 text-right">
									  <button class="btn btn-action" type="submit">Entrar</button>
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
		<?php include "./footer1.html" ?>
		<?php include "./footer2.html" ?>
	</footer>	
	
	<?php include "./scripts.html" ?>

	</body>
</html>