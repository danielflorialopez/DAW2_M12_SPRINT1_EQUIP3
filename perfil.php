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

			<?php include_once "./headerregistrat.html" ?>

<!--Aquest és el navbar segon on tenim tots els elements on l'usuari pot anar seleccionat on vol anar.-->	
	<?php include_once "./segonheader.html" ?> 

<!--Aquest és el container principal on podem anar posant tota la informació.-->	
<div class="container info margin-top">  
		  	
			<div class="row">
   			 	<div class="col-sm-8">
					<h2 class="thin">El meu perfil</h2>
				</div>
    			
  			</div>
			<hr class="proposta-hr">
		
			<div class="row">
				<div class="col-sm-12 box">
				<div class="row  margin-bottom margin-topimgperfil">
						<div class="col-sm-2 box2 margin-right img-size">
							<a href="proposta1.php"><img class="imatgespropostes" src="http://1.bp.blogspot.com/-UkWJwRkhr0c/VgHeAgYgHeI/AAAAAAAAAbg/oSp3491C8uM/s1600/puesta-de-sol-en-playa-4237.jpg"></a>
						</div>
						<div class="">
							<h4 class=""><b>Ruben Xavero Fernandez</b></h4>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,  incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						
				</div>
			  	</div>
				
			</div>
			</br>
			<div class="col-sm-3">
   			 	<div class="row">
					<h4 class="thin">Contactar</h4>
				</div>
    			
				
						<div class="widget-body margin-bottom col-sm-10 margin-topimgperfil">
							<p class="follow-me-icons compartir ">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-instagram fa-2"></i></a>
								<a href=""><i class="fa fa-envelope fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
				
						
						
  			</div>
			
			<div class="col-sm-9">
   			 	<div class="row">
					<h4 class="thin">Historial de propostes</h4>
				</div>
    			
				<div class="row box">
						<?php
						echo "<table class=\"table\">";
						echo "<thead class=\"thead-dark\"><tr><th>Nom</th><th>Data</th></tr></thead><tbody>";
						echo "<tr><td>Impresora 3D</td><td>25-12-1453</td><td><a href=\"xxx.php\" class=\"fa fa-lg fa-trash-o fa2\"></a></td></tr>";
						
						echo "</tbody></table>";
					?>
				</div>
						
						
  			</div>
			

			
			  	</div>
				
			</div>  
			
		</div>
		<footer id="footer" class="top-space">
		
			<?php include_once "./footer1.html" ?>

			<?php include_once "./footer2.html" ?>

		</footer>	
		
		<?php include_once "./scripts.html" ?>
	
	</body>
</html>