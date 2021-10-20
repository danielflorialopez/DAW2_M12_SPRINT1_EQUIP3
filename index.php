<!--Aquest és el fitxer on creem la sessió la qual anirem millorant durant la realització del mateix.-->
<?php  require_once('./sessio.php'); ?>

<!DOCTYPE html>
<html lang="es">

<!--Aquí el que realitzem és "cridar" al fitxer head.html on tenim tot el que tenim dins d'aquest fitxer,
ens serveix per a no tenir duplicitat d'etiquetes i no tenir que modificar fitxer a fitxer tots els elements si
volem modificar una part del mateix.-->
	<?php include_once "./head.html" ?>

	<body class="home">
	
		<div class="navbar navbar-inverse navbar-fixed-top headroom" >

			<?php include_once "./headernoregistrat.html" ?>

<!--Aquest és el navbar segon on tenim tots els elements on l'usuari pot anar seleccionat on vol anar.-->	
			<div class="navbar-blue">
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav left">
						<li class="active"><a href="./index.php">Home</a></li>
						<li><a href="./proposta.php">Propostes</a></li>
						<li><a href="./projecte.php">Projectes</a></li>
					</ul>
				</div>
			</div>
		</div> 

<!--Aquest és el container principal on podem anar posant tota la informació.-->	

		<div class="container info margin-top">  
		  	<ol class="breadcrumb">
		  	</ol>
	  	<h2 class="thin">Home / Dashboard</h2>
	  	<hr>
		</div>

		<footer id="footer" class="top-space">
		
			<?php include_once "./footer1.html" ?>

			<?php include_once "./footer2.html" ?>

		</footer>	
		
		<?php include_once "./scripts.html" ?>
	
	</body>
</html>