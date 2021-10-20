<!DOCTYPE html>
<html lang="es">

	<!--1. Head-->
	<?php include_once "./head.html" ?>
	<script src="validacions.js"></script>

	<body class="home">
	
		<div class="navbar navbar-inverse navbar-fixed-top headroom" >

			<!--2. Header no registrat-->
			<?php include_once "./headernoregistrat.html" ?>

		<!--3. Navbar-->
		<div class="navbar-blue">
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav left">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="proposta.php">Propostes</a></li>
					<li><a href="">Projectes</a></li> 
				</ul>
			</div>
		</div>
	</div> 
		
	<!--4. Container principal amb el formulari de registre d'usuaris.-->	

	<div class="container info margin-top-login">
		<div class="row">  
		  <article class="col-xs-12 maincontent">	   
			  <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				  <div class="panel panel-default">
					  <div class="panel-body">
						  <h3 class="thin text-center">Registra un nou compte</h3>
						  <p class="text-center text-muted">Si ja tens un compte entra <a href="login.php">aqui</a>.</p>						  <hr>
						  
						  <form action="signup.php" method="post">
								<div class="top-margin">
									<label>Nom  <span class="text-danger">*</span></label>
									<input type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Cognom  <span class="text-danger">*</span></label>
									<input type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Email  <span class="text-danger">*</span></label>
									<input type="text" class="form-control">
								</div>

								<div class="row top-margin">
									<div class="col-pass-6 padding-right-pass">
										<label>Contrasenya <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
									<div class="col-pass-6 padding-left-pass top-margin-pass">
										<label>Confirma contrasenya <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<label class="checkbox">
											<input type="checkbox"> 
											Acepto els <a href="page_terms.html">Termes i condicions</a>
										</label>                        
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">Registrar</button>
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