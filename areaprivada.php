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
					<h2 class="thin">Àrea privada</h2>
				</div>
    			
  			</div>
			<hr class="proposta-hr">
		
			<div class="row">
                <div class="col-sm-5 box">
                    <div class="row">
                        <h4 class="thin">Propostes creades</h4>
                    </div>
                    
                    <?php
						echo "<table class=\"table\">";
						echo "<thead class=\"thead-dark\"><tr><th>Nom</th><th>Data</th></tr></thead><tbody>";
						echo "<tr><td>Impresora 3D</td><td>25-12-1453</td><td><a href=\"xxx.php\" class=\"fa fa-lg fa-trash-o fa2\"></a></td></tr>";
						
						echo "</tbody></table>";
					?>
                </div>
                <div class="margin-left col-sm-5 box">
                    <div class="row">
                        <h4 class="thin">Projectes que promou</h4>
                    </div>
                    

                    <?php
						echo "<table class=\"table\">";
						echo "<thead class=\"thead-dark\"><tr><th>Nom</th><th>Data</th></tr></thead><tbody>";
						echo "<tr><td>Impresora 3D</td><td>25-12-1453</td><td><a href=\"xxx.php\" class=\"fa fa-lg fa-trash-o fa2\"></a></td></tr>";
						
						echo "</tbody></table>";
					?>
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