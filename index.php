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
		
		<script>
function showHint()
{

var msj = document.getElementById("email").value;

if (msj.length==0)
  { 
  //document.getElementById("email").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.status==200)
    {
    //document.getElementById("email").innerHTML=xmlhttp.responseText;
	var respon = xmlhttp.responseText;
	var ult = respon.charAt(str.length-1)
	alert(respon.length);
	if (ult == "1"){
			alert("Correo Enviado");
		}else{
			alert("Upss, Hay problemas en servidor " + respon);
		}
		alert("Upss, Hay problemas en servidor " + respon);
	}
  }
xmlhttp.open("GET","email.php?msj="+msj,false);
xmlhttp.send();
}
</script>
		
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
					
					<li>
						<a href="#" target="_blank"><img src="images/6.png" alt="image1" width="450px" height="550px"/></a>
						<!-- <div class="sb-description">
							<h3>Faithful Investor</h3>
						</div> -->
					</li>
					
				</ul>

			
			</div><!-- /wrapper -->
			</td>
			<td>
			
			<div id="logo">
				<img id="img_logo" src="img/klinco_logo oscuro-04.png" width="300px">
			</div>
			
			<div id="suscribe">
					<div id="cont">
						<p>Ingresa tu email para notificarte noticias de Klinco</p>
						<form id="suscripcion" >
							<input type="email" name="email" id="email" placeholder="Tu email aquí" required="required">
							<input type="submit" value="Enviar" onclick="showHint();">
						</form>
						<div id="respuesta"></div>
					</div>
				</div>
			</td>
		
		</tr>
		
</table>

<div id="descripcion">
					 <h1>Brinda educación y manejo de finanzas personales, para acceder al crédito ideal.</h1>
				</div>
				
				
				
				<div id="info" align="left">
					<div id="seccion-uno" class="mpo">
						<img src="">
						<h3 class="info-tit">Educación</h3>
						<p>La mejor experiencia para entender las prácticas más eficientes en el uso del dinero, un entrenamiento para mejorar tu relación con el dinero y el crédito.</p>
					</div>
					<div id="seccion-dos" class="mpo">
						<img src="">
						<h3 class="info-tit">Crédito</h3>
						<p>Entenderás los conceptos que involucran esta herramienta financiera y la mejor manera de obtenerlo con nosotros. Durante esta experiencia seguro obtendrás el mejor crédito a tu medida.</p>
					</div>
					<div id="seccion-tres" class="mpo">
						<img src="">
						<h3 class="info-tit">Libertad</h3>
						<p>Imagínate dominar tu economía con inteligencia financiera que te permita respirar tranquilidad y cumplir tus objetivos.</p>
					</div>
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
					¿Tienes preguntas o comentarios?<a href="feedback.html"> ¡Háznoslo saber!</a>
				</p>
				<p>
					2013 - Klinco 
				</p>
				</div>		
			</div> 
		
	</body>
</html>