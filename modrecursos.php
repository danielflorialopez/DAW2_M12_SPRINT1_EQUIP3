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
						<li><a href="./projectes.php">Projectes</a></li> 
					</ul>
				</div>
			</div>
		</div> 

		<!--5. Container principal amb tota la informació del formulari que ens serveix per a modificar recursos.-->	
		<div class="container info margin-top">  
		<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
			  		<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			  		<li class="breadcrumb-item"><a href="#">El meu perfil</a></li>
					<li class="breadcrumb-item"><a href="elsmeusprojectes.php">Els meus projectes</a></li>
			  		<li class="breadcrumb-item"><a href="#">Bolígraf intel·ligent</a></li>
			  		<li class="breadcrumb-item"><a href="salavirtual.php">Sala virtual</a></li>
			  		<li class="breadcrumb-item"><a href="recursos.php">Recursos</a></li>
					<li class="breadcrumb-item active" aria-current="page">Editar recursos</li>
				</ol>
		  	</nav>
			
			<h2 class="thin">Modificació dels recursos</h2>
			<hr>
		
			<form action="#" target="" method="" name="" class="formulari">
				<label>Recurs<span class="text-danger">*</span></label>
				<input type="text" placeholder="Recurs" id="nomrecurs" class="formulari-crear"/>
				<p class="error" id="errorrecurs"></p>
				<label>Aportat per<span class="text-danger">*</span></label>
				<input type="text" placeholder="Aportat per" id="aportatper" class="formulari-crear"/>
				<p class="error" id="erroraportat"></p>
				<button class="formulari-send btn btn-action" onclick="checkRecurs()">Publicar</button>
        	</form>
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