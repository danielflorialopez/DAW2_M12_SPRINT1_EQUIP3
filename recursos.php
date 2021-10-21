<!--1.Sessió-->
<?php
	include_once './classes/GestRecursos.php';
  	require_once('./sessio.php');

	if(isset($_POST['nomrecurs'])){
		$recursos = new GestRecursos();
		$recursos->altaRecurs($_POST['nomrecurs'],$_POST['aportatper']);
		$_SESSION ['Recurs'][] = $recursos;
	}
?>

<!DOCTYPE html>
<html lang="es">

	<!--2.Head-->
	<?php include_once "./head.html" ?>

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

		<!--5. Container principal amb el llistat de tots els recursos que tindrem en el gestor de recursos.-->	
		<div class="container info margin-top">  
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
			  		<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			  		<li class="breadcrumb-item"><a href="#">El meu perfil</a></li>
					<li class="breadcrumb-item"><a href="elsmeusprojectes.php">Els meus projectes</a></li>
			  		<li class="breadcrumb-item"><a href="#">Bolígraf intel·ligent</a></li>
			  		<li class="breadcrumb-item"><a href="salavirtual.php">Sala virtual</a></li>
			  		<li class="breadcrumb-item active" aria-current="page">Recursos</li>
				</ol>
		  	</nav>
	  		<div class="row">
   			 	<div class="col-sm-8">
					<h2 class="thin">Recursos</h2>
				</div>
    			<div class="col-sm-4 padding-plus">
					<a class="add" href="crearrecurs.php"><i class="fa fa-plus fa-lg"></i></a>
				</div>
  			</div>
			<hr class="proposta-hr">
			
			<?php
				echo "<table class=\"table\">";
            	echo "<thead class=\"thead-dark\"><tr><th>Recurs</th><th>Aportat per</th></tr></thead><tbody>";
				
				if (isset($_SESSION['Recurs'])) {
					foreach($_SESSION ['Recurs'] as $rec) {
						echo "<tr><td>".$rec->getNom()."</td><td>".$rec->getAportat()."</td><td><a href=\"modrecursos.php\"class=\"fa fa-lg fa-edit edit-icon fa2\"></a><a href=\"elimrecursos.php\" class=\"fa fa-lg fa-trash-o fa2\"></a></td></tr>";
					}
				}

				echo "<tr><td>Plastic</td><td>Promotor</td><td><a href=\"modrecursos.php\"class=\"fa fa-lg fa-edit edit-icon fa2\"></a><a href=\"elimrecursos.php\" class=\"fa fa-lg fa-trash-o fa2\"></a></td><tr>";
				echo "</tbody></table>";
			?>

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