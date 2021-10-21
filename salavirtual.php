<!--1.Sessió-->
<?php
  require_once('./sessio.php');
?>

<!DOCTYPE html>
<html lang="es">

	<!--2.Head-->
	<?php include_once "./head.html" ?>
	<script src="validacions.js"></script>

	<body class="home">
	
		<div class="navbar navbar-inverse navbar-fixed-top headroom" >

			<!--3. Header registrat-->
			<?php include_once "./headerregistrat.html" ?>

			<!--4. Navbar-->
			<div class="navbar-blue">
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav left">
						<li><a href="./index.php">Home</a></li>
						<li><a href="./proposta.php">Propostes</a></li>
						<li><a href="./projecte.php">Projectes</a></li> 
					</ul>
				</div>
			</div>
		</div> 

		<!--5. Container principal amb tota la informació del formulari que ens serveix per a crear recursos.-->	
		<div class="container info margin-top">  
		<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
			  		<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			  		<li class="breadcrumb-item"><a href="#">El meu perfil</a></li>
					<li class="breadcrumb-item"><a href="elsmeusprojectes.php">Els meus projectes</a></li>
			  		<li class="breadcrumb-item"><a href="#">Bolígraf intel·ligent</a></li>
					<li class="breadcrumb-item active" aria-current="page">Sala virtual</li>
				</ol>
		  	</nav>
			
			<h2 class="thin">Sala virtual</h2>
			<hr>
			<div class="esquerra">
				<img class="imatgePrincipal" src="recursos/imatges/imatgeProva.png">
				<p class="text-muted margin-salavirtual">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aliquid adipisci aspernatur. Soluta quisquam dignissimos earum quasi voluptate. Amet, dignissimos, tenetur vitae dolor quam iusto assumenda hic reprehenderit?
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aliquid adipisci aspernatur. Soluta quisquam dignissimos earum quasi voluptate. Amet, dignissimos, tenetur vitae dolor quam iusto assumenda hic reprehenderit?
				</p>
			</div>
		
			<div class="dreta1">
				<a href=""><img src="recursos/imatges/imatgeProva4x3.png"></a>
				<p class="center bold margin-text">Gestor documental</p>
				<a href=""><img src="recursos/imatges/imatgeProva4x3.png"></a>
				<p class="center bold">Xat</p>
			</div>

			<div class="dreta2">
				<a href=""><img src="recursos/imatges/imatgeProva4x3.png"></a>
				<p class="center bold margin-text">Gestor de tasques</p>
				<a href="recursos.php"><img src="recursos/imatges/imatgeProva4x3.png"></a>
				<p class="center bold">Gestor de recursos</p>
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