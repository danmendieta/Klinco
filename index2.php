<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<!-- Resources Slide -->
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
		<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
		<title>Klinco   Crédito - Educación Financiera - Libertad</title>
	</head>
	<body>
	
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.slicebox.js"></script>
		<script type="text/javascript">
			$(function() {
				
				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ).hide(),
						$navOptions = $( '#nav-options' ).hide(),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {

								$navArrows.show();
								$navOptions.show();
								$shadow.show();

							},
							orientation : 'h',
							cuboidsCount : 3
						} ),
						
						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {

								slicebox.next();
								return false;

							} );

							$navArrows.children( ':last' ).on( 'click', function() {
								
								slicebox.previous();
								return false;

							} );

							$( '#navPlay' ).on( 'click', function() {
								
								slicebox.play();
								return true;

							} );

							$( '#navPause' ).on( 'click', function() {
								
								slicebox.pause();
								return false;

							} );

						};

						return { init : init };

				})();

				Page.init();

			});
		</script>
	
	
	
	
		<div id="container" align="center">
		
		
			<table>
		<tr>
			<td>
				<div class="wrapper">

				<ul id="sb-slider" class="sb-slider">
					<li>
						<a href="#" target="_blank"><img src="images/1.png" alt="image1" width="450px" height="550px"/></a>
						<!--<div class="sb-description">
							<h3>Klinco</h3>
						</div> -->
					</li>
					<li>
						<a href="#" target="_blank"><img src="images/2.png" alt="image2" width="450px" height="550px" /></a>
						<!--<div class="sb-description">
							<h3>Honest Entertainer</h3>
						</div> -->
					</li>
					<li>
						<a href="#" target="_blank"><img src="images/3.png" alt="image1" width="450px" height="550px"/></a>
						<!-- <div class="sb-description">
							<h3>Brave Astronaut</h3>
						</div> -->
					</li>
					<li>
						<a href="#" target="_blank"><img src="images/4.png" alt="image1" width="450px" height="550px"/></a>
						<!-- <div class="sb-description">
							<h3>Affectionate Decision Maker</h3>
						</div> -->
					</li>
					<li>
						<a href="#" target="_blank"><img src="images/5.png" alt="image1" width="450px" height="550px"/></a>
						<!-- <div class="sb-description">
							<h3>Faithful Investor</h3>
						</div> -->
					</li>
					
				</ul>

			

				

			</div><!-- /wrapper -->
			</td>
			<td>
			<div id="suscribe">
					<div id="cont">
						<p>Ingresa tu email para notificarte noticias de Klinco</p>
						<form id="suscripcion" action="email.php">
							<input type="email" name="email" id="email" placeholder="Tu email aquí" required="required">
							<input type="submit" value="Enviar">
						</form>
						<div id="respuesta"></div>
					</div>
				</div>
			</td>
		
		</tr>
		
</table>

<div id="descripcion">
					 <h1>Brinda educación y manejo de finanzas personales, para acceder al crédito ideal</h1>
				</div>
				
				
				
				<div id="info">
					<div id="seccion-uno" class="mpo">
						<img src="">
						<h3 class="info-tit">Crédito</h3>
						<p>Entenderas los conceptos que involucran esta herramienta financiera y la mejor manera de obtenerlo con nosotros. Durante esta experiencia seguro obtendras el mejor crédito a tu medida</p>
					</div>
					<div id="seccion-dos" class="mpo">
						<img src="">
						<h3 class="info-tit">Educación</h3>
						<p>La mejor experiencia para entender las practicas mas eficientes en el uso del dinero, un entrenamiento para mejorar tu relación con el dinero y el crédito</p>
					</div>
					<div id="seccion-tres" class="mpo">
						<img src="">
						<h3 class="info-tit">Libertad</h3>
						<p>Imaginate dominar tu economía con inteligencia financiera que te permita respirar tranquilidad y cumplir tus objetivos</p>
					</div>
				</div>
				
				
				
				<div id="header">
				<img id="img_logo" src="img/logo_full.png">
			</div>
		
		
			
		
</table>
			

			

		
		
		

				
			<!-- <form method="post" action="email.php">
  Email: <input name="email" id="email" type="text" /><br />

  Message:<br />
  <textarea name="message" id="message" rows="15" cols="40"></textarea><br />

  <input type="submit" value="Submit" />
</form> -->
				
				
				
			
			<div id="footer">
				<p>
					Tienes preguntas o comentarios?<a href="feedback.html"> Haznoslo saber!</a>
				</p>
				<p>
					2013 - Klinco 
				</p>
				</div>		
			</div> 
		
	</body>
</html>