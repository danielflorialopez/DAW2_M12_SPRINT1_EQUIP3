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
						<li><a href="./projectes.php">Projectes</a></li> 
					</ul>
				</div>
			</div>
		</div> 

		<!--5. Container principal amb tota la informació de les diferents propostes que s'han creat a l'aplicatiu.-->	
		<div class="container info margin-top">  
		  	<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
			  	<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			  	<li class="breadcrumb-item"><a href="proposta.php">Propostes</a></li>
			  	<li class="breadcrumb-item active" aria-current="page">Pàgina 1</li>
				</ol>
		  	</nav>
			<div class="row">
   			 	<div class="col-sm-8">
					<h2 class="thin">Propostes</h2>
				</div>
				
				<!--5.1 Crear proposta.-->	

    			<div class="col-sm-4 padding-plus">
					<a class="add" href="crearproposta.php"><i class="fa fa-plus fa-lg"></i></a>
				</div>
  			</div>
			<hr class="proposta-hr">
		
			<!--5.2 Cercador avançat i les diferents propostes.-->	

			<div class="row">
				<div class="col-sm-3 box">
					<h5 class="bold subrayado">Categoria</h5>
					<div class="checkbox">
						<label><input type="checkbox" value="">Impresora 3D</label>
					</div>
					<div class="checkbox">
					<label><input type="checkbox" value="">Fresadora</label>
				 	</div>
				 	<div class="checkbox">
						<label><input type="checkbox" value="">Talladora làser</label>
				 	</div>
				 	<div class="checkbox">
						<label><input type="checkbox" value="">Talladora de vinil</label>
				 	</div>
			  	</div>
				<div class="col-sm-6">
					<div class="row margin-left margin-bottom">
						<div class="col-sm-4 box2 margin-right img-size">
							<a href="proposta1.php"><img class="imatgespropostes" src="http://1.bp.blogspot.com/-UkWJwRkhr0c/VgHeAgYgHeI/AAAAAAAAAbg/oSp3491C8uM/s1600/puesta-de-sol-en-playa-4237.jpg"></a>
						</div>
						<div class="col-sm-4 box2 margin-right img-size">
							<img class="imatgespropostes" src="https://cdn.wallpapersafari.com/73/8/rZJVIa.jpg">
						</div>
						<div class="col-sm-4 box2 margin-right img-size">
							<img class="imatgespropostes" src="https://4ksamples.com/wp-content/uploads/2016/01/sample-Elysium.2013.2160p.WEB-DL-TrollUHD.mkv_snapshot_00.04_2016.01.12_11.27.35-700x329.jpg">
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="row margin-left margin-bottom">
						<div class="col-sm-4 box2 margin-right margin-bottom">
							<p class="center bold">Proposta 1</p>
						</div>
						<div class="col-sm-4 box2 margin-right">
							<p class="center bold margin-bottom">Proposta 2</p>
						</div>
						<div class="col-sm-4 box2">
							<p class="center bold margin-bottom">Proposta 3</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="row margin-left margin-bottom">
						<div class="col-sm-4 box2 margin-right img-size">
							<img class="imatgespropostes" src="https://aws1.discourse-cdn.com/business7/uploads/firecore/optimized/3X/2/0/20ea544fd1600f9a1264e1c4c46e71f24c4adcf3_2_690x388.jpeg">
						</div>
						<div class="col-sm-4 box2 margin-right img-size">
							<img class="imatgespropostes" src="https://cdn2.ifacility.co.uk/wp-content/uploads/2017/09/Bath-4k-Image-1024x576.jpg">
						</div>
						<div class="col-sm-4 box2 margin-right img-size">
							<img class="imatgespropostes" src="https://noticiasmoviles.com/wp-content/uploads/1609956400_221_The-Best-4K-Wallpapers-December-2019.jpg">
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="row margin-left margin-bottom">
						<div class="col-sm-4 box2 margin-right margin-bottom">
							<p class="center bold">Proposta 4</p>
						</div>
						<div class="col-sm-4 box2 margin-right">
							<p class="center bold margin-bottom">Proposta 5</p>
						</div>
						<div class="col-sm-4 box2">
							<p class="center bold margin-bottom">Proposta 6</p>
						</div>
					</div>
				</div>
			</div>
			
			<!--5.3 Navegació per pàgines.-->	

			<nav aria-label="Page navigation example">
  				<ul class="pagination center">
    				<li class="page-item">
      					<a class="page-link" href="#" aria-label="Previous">
        					<span aria-hidden="true">&laquo;</span>
        					<span class="sr-only">Anterior</span>
      					</a>
    				</li>
    				<li class="page-item active"><a class="page-link" href="#">1</a></li>
    				<li class="page-item"><a class="page-link" href="#">2</a></li>
    				<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">4</a></li>
    				<li class="page-item"><a class="page-link" href="#">5</a></li>
    				<li class="page-item">
      					<a class="page-link" href="#" aria-label="Next">
        					<span aria-hidden="true">&raquo;</span>
        					<span class="sr-only">Següent</span>
      					</a>
    				</li>
  				</ul>
			</nav>
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