<?php
  require_once('./sessio.php');
?>

<!DOCTYPE html>
<html lang="es">

	<?php include_once "./head.html" ?>

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