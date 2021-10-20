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
						<li><a href="./projectes.php">Projectes</a></li> 
					</ul>
				</div>
			</div>
		</div> 

		<div class="container info margin-top">  
		<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
			  		<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			  		<li class="breadcrumb-item"><a href="#">El meu perfil</a></li>
					<li class="breadcrumb-item"><a href="elsmeusprojectes.php">Els meus projectes</a></li>
			  		<li class="breadcrumb-item"><a href="#">Projecte 1</a></li>
			  		<li class="breadcrumb-item"><a href="#">Sala virtual</a></li>
			  		<li class="breadcrumb-item"><a href="recursos.php">Recursos</a></li>
					<li class="breadcrumb-item active" aria-current="page">Editar recursos</li>
				</ol>
		  	</nav>
			
			<h2 class="thin">Modificar proposta</h2>
			<hr>
		
			<form action="altaproposta.php proposta1.php" target="" method="post" enctype="multipart/form-data" name="" class="formulari">
				<div class="row">
					<div class="col-md-6">
						<label>Nom del projecte<span class="text-danger">*</span></label>
						<input type="text" placeholder="Projecte" id="nomprojecte" class="formulari-crear" name="nomprojecte"/>
						<p class="error" id="errorprojecte"></p>
						<label>Localitat<span class="text-danger">*</span></label>
						<input type="text" placeholder="Localitat" id="localitat" class="formulari-crear"/>
						<p class="error" id="errorlocalitat"></p>
						<label for="categoria">Categoria</label>
					  	<select name="categoria" id="categoria" class="formulari-crear">
							<option value="cap">Cap</option>
							<option value="impresora3d">Impresora 3D</option>
							<option value="fresadora">Fresadora</option>
							<option value="laser">Talladora làser</option>
							<option value="vinil">Talladora de vinil</option>
					  	</select>          
						<label>Imatge</label>
						<input type="file" id="file" accept="image/png, .jpeg, .jpg, image/gif" class="formulari-crear" name="img"/>
						<label>Fitxer</label>
						<input type="file" id="file" accept=".pdf" class="formulari-crear"/>
					</div>
					<div class="col-md-6 margin-left-formulari">
						<label>Descripcio<span class="text-danger">*</span></label>
	        			<textarea placeholder="Descripcio" maxlength="1000" id="descripcio" class="formulari-crear-textarea"></textarea>
						<p class="error" id="errordescripcio"></p>
					</div>
					<input class="formulari-send btn btn-action" onclick="isNameEmpty()" type="submit" name="enviar" value="Modificar"/>
				</div>
        	</form>
		</div>

		<footer id="footer" class="top-space">		
			<?php include_once "./footer1.html" ?>
			<?php include_once "./footer2.html" ?>
		</footer>	
	
		<?php include_once "./scripts.html" ?>

	</body>
</html>