<!--1.Sessió-->
<?php
  require_once('./sessio.php');
?>

<!DOCTYPE html>
<html lang="es">

	<!--2.Head-->
	<?php include_once "./head.html" ?>

	<body class="home">
	
		<div class="navbar navbar-inverse navbar-fixed-top headroom" >

			<!--3. Header no registrat-->
			<?php include_once "./headernoregistrat.html" ?>

			<!--4. Navbar-->
			<div class="navbar-blue">
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav left">
						<li><a href="./index.php">Home</a></li>
						<li class="active"><a href="./proposta.php">Propostes</a></li>
						<li><a href="">Projectes</a></li> 
					</ul>
				</div>
			</div>
		</div> 

		<!--5. Container principal amb tota la informació sobre la proposta en concret.-->	
		<div class="container info margin-top">  
		  	<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
			  	<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			  	<li class="breadcrumb-item"><a href="proposta.php">Propostes</a></li>
			  	<li class="breadcrumb-item active" aria-current="page">Proposta 1</li>
				</ol>
		  	</nav>
			<h2 class="thin">Proposta 1</h2>
			<hr>
		
			<div class="row">
				<div class="col-lg-6">
					<div class="margin-bottom">
						<h5>Nikita Mazepin / 30 de setembre del 2021 / Amposta</h1>
						<img class="imatge-proposta" src="https://cdn.wallpapersafari.com/73/8/rZJVIa.jpg">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					</div>
				</div>
				<div class="col-lg-3">
					<h4 class="bold subrayado">Compartir</h4>
					<div class="widget-body">
                    	<p class="follow-me-icons compartir">
                        	<a href=""><i class="fa fa-twitter fa-2"></i></a>
                        	<a href=""><i class="fa fa-instagram fa-2"></i></a>
                        	<a href=""><i class="fa fa-envelope fa-2"></i></a>
                        	<a href=""><i class="fa fa-facebook fa-2"></i></a>
                    	</p>	
                	</div>
					
					<h4 class="bold subrayado categoria">Categoria</h4>
					<h5 class="margin-categoria">Impresora 3D, ecològic</h5>
					
					<h4 class="bold subrayado documents">Documents adjunts</h4>
					<a href="proposta.pdf"><h5 class="margin-categoria">proposta.pdf</h5></a>

					<input class="formulari-send btn btn-action " type="submit" name="enviar" value="Contacta amb el promotor" style="margin-top: 50px;"/>
					<input class="formulari-send btn btn-action" type="submit" name="enviar" value="Sol·licita projecte"/>
					</div>
			  	</div>
			</div>
		</div>

		<!--6. Footer-->	
		<footer id="footer" class="top-space">		
			<?php include_once "./footer1.html" ?>
			<?php include_once "./footer2.html" ?>
		</footer>	
		
		<!--7. Scripts-->
		<?php include_once "./scripts.html" ?>

	</body>
</html>