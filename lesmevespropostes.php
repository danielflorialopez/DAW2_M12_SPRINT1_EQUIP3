<?php
  require_once('./sessio.php');
?>

<!DOCTYPE html>
<html lang="es">

	<?php include_once "./head.html" ?>

	<body class="home">
	
		<div class="navbar navbar-inverse navbar-fixed-top headroom" >

			<?php include_once "./headerregistrat.html" ?>

			<div class="navbar-blue">
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav left">
						<li><a href="index.php">Home</a></li>
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


		<div class="container info margin-top">  
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
			  		<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			  		<li class="breadcrumb-item"><a href="proposta.php">El meu perfil</a></li>
			  		<li class="breadcrumb-item active" aria-current="page">Les meves propostes</li>
				</ol>
		  	</nav>
	  		<div class="row">
   			 	<div class="col-sm-8">
					<h2 class="thin">Les meves propostes</h2>
				</div>
    			<div class="col-sm-4 padding-plus">
					<a class="add" href="crearproposta.php"><i class="fa fa-plus fa-lg"></i></a>
				</div>
  			</div>
			<hr class="proposta-hr">
			
			<?php
				echo "<table class=\"table\">";
            	echo "<thead class=\"thead-dark\"><tr><th>Titol</th><th>Estat</th></tr></thead><tbody>";
				echo "<tr><td>Boligraf inteligent</td><td>En procés</td><td><a href=\"modpropostes.php\"class=\"fa fa-lg fa-edit edit-icon fa2\"></a><a href=\"elimrecursos.php\" class=\"fa fa-lg fa-trash-o fa2\"></a></td></tr>";
				echo "<tr><td>Soport USB</td><td>Fet</td><td><a href=\"modrecursos.php\"class=\"fa fa-lg fa-edit edit-icon fa2\"></a><a href=\"elimrecursos.php\" class=\"fa fa-lg fa-trash-o fa2\"></a></td><tr>";
				echo "</tbody></table>";
			?>

		</div>

		<footer id="footer" class="top-space">
		
			<?php include_once "./footer1.html" ?>

			<?php include_once "./footer2.html" ?>

		</footer>	
		
		<?php include_once "./scripts.html" ?>
	
	</body>
</html>