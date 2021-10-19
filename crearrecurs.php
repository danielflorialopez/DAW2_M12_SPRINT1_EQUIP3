<?php
  require_once('./sessio.php');
?>

<!DOCTYPE html>
<html lang="es">

	<?php include_once "./head.html" ?>
	<script src="validacions.js"></script>

	<body class="home">
	
		<div class="navbar navbar-inverse navbar-fixed-top headroom" >

			<?php include_once "./headerregistrat.html" ?>

			<div class="navbar-blue">
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav left">
						<li><a href="./index.php">Home</a></li>
						<li><a href="./proposta.php">Propostes</a></li>
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

		<div class="container info margin-top">  
		<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
			  		<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			  		<li class="breadcrumb-item"><a href="proposta.php">El meu perfil</a></li>
					<li class="breadcrumb-item"><a href="proposta.php">Els meus projectes</a></li>
			  		<li class="breadcrumb-item"><a href="proposta.php">Projecte 1</a></li>
			  		<li class="breadcrumb-item"><a href="proposta.php">Sala virtual</a></li>
			  		<li class="breadcrumb-item"><a href="recursos.php">Recursos</a></li>
					<li class="breadcrumb-item active" aria-current="page">Crear recursos</li>
				</ol>
		  	</nav>
			
			<h2 class="thin">Crear recursos</h2>
			<hr>
		
			<form action="altarecurs.php" method="post" action="" class="formulari">
				<label>Recurs<span class="text-danger">*</span></label>
				<input type="text" placeholder="Recurs" id="nomrecurs" name="nomrecurs" class="formulari-crear"/>
				<p class="error" id="errorrecurs"></p>
				<label>Aportat per<span class="text-danger">*</span></label>
				<input type="text" placeholder="Aportat per" id="aportatper" name="aportatper" class="formulari-crear"/>
				<p class="error" id="erroraportat"></p>
				<input class="formulari-send btn btn-action" onclick="isNameEmpty2()" type="submit" name="enviar" value="Publicar"/>
        	</form>
		</div>

		<footer id="footer" class="top-space">		
			<?php include_once "./footer1.html" ?>
			<?php include_once "./footer2.html" ?>
		</footer>	
	
		<?php include_once "./scripts.html" ?>

	</body>
</html>