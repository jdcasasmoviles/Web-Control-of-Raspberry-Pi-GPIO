<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Proyecto</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<!-- Header -->
			<div id="header">
				<div class="container">
					<!-- Logo -->
					 <font color="lime"><h2><a href="index.php" id="logo">Web Control of Raspberry Pi GPIO</a></h2></font>
					<img src="images/uni.png" alt="HTML5 Icon" width="128" height="128">
					<!-- Banner -->
						<div id="banner">
							<div class="container">
								<section>
									<header class="major">
										<span class="byline">
 <font color="cyan" size="5"><B>INFO:<B></font>Se desarrolla el software y se implementa el hardware para el manejo de leds, encendido,apagado, parpadeo 
mediante una interfaz web de control que controla los puertos GPIO de una Raspberry Pi.
										</span>
									</header>
		  <font color="cyan" size="5"><B>LED Control:<B></font><br><br>
         <form method="get" action="index.php">
   <font color="red" size="5"><B>GPIO 17<B></font>&nbsp;<input type="submit" name="encender17" value="Encender"> 
   <input type="submit" name="apagar17" value="Apagar">
   <input type="submit" name="parpadear17" value="Parpadear"> 
   </form>
 
 <br></br> 
   
   <form method="get" action="index.php">
   <font color="lime" size="5"><B>GPIO 27<B></font>&nbsp;<input type="submit" name="encender27" value="Encender"> 
   <input type="submit" name="apagar27" value="Apagar">
   <input type="submit" name="parpadear27" value="Parpadear"> 
      </form>
 <br></br> 
  
   <form method="get" action="index.php">
   <font color="yellow" size="5"><B> GPIO 04<B></font>&nbsp;<input type="submit" name="encender4" value="Encender"> 
   <input type="submit" name="apagar4" value="Apagar"> 
   <input type="submit" name="parpadear4" value="Parpadear"> 
    </form>
 <br></br> 
  
   <form method="get" action="index.php">
   <font  color="orange" size="5"><B>GPIO 22<B></font>&nbsp;<input type="submit" name="encender22" value="Encender"> 
   <input type="submit" name="apagar22" value="Apagar">
   <input type="submit" name="parpadear22" value="Parpadear"> 
      </form><br><br>

<form method="get" action="index.php">
   <font  color="white" size="5"><B>ALL<B></font>&nbsp;&nbsp;&nbsp;<input type="submit" name="encenderall" value="Encender"> 
   <input type="submit" name="apagarall" value="Apagar">
   <input type="submit" name="parpadearall" value="Parpadear 1"><br><br>
<font  color="white" size="5"><B>LEDS<B></font>&nbsp;&nbsp;&nbsp; <input type="submit" name="parpadearall2" value="Parpadear 2">
 <input type="submit" name="parpadearall3" value="Parpadear 3">
 <input type="submit" name="parpadearall4" value="Parpadear 4">
      </form>

								</section>			
							</div>
						</div>

				</div>
			</div>

	</body>
</html>

<?php 

// Funciones PHP del pin GPIO 17 
 
  if (isset($_GET['encender17'])) {  
   $a=exec("sudo python /var/www/html/leds/gpio/17/enciende.py"); 
   $_GET['encender17']="";
   echo $a; 
  } 
  
   if(isset($_GET['apagar17'])){
   $a=exec("sudo python /var/www/html/leds/gpio/17/apaga.py");
	$_GET['apagar17']="";   
   echo $a; 
  } 
 
    if(isset($_GET['parpadear17'])){
   $a=exec("sudo python /var/www/html/leds/gpio/17/parpadea.py"); 
   $_GET['parpadear17']=""; 
   echo $a; 
  } 
 
// Fin de las funciónes del pin GPIO 17 
 
 
// Funciones PHP del pin GPIO 27 
 if(isset($_GET['encender27'])){  
   $a=exec("sudo python /var/www/html/leds/gpio/27/enciende.py"); 
   $_GET['encender27']="";
   echo $a; 
  } 
 
   if(isset($_GET['apagar27'])){
   $a=exec("sudo python /var/www/html/leds/gpio/27/apaga.py"); 
   $_GET['apagar27']="";
 echo $a; 
  } 
 
 if(isset($_GET['parpadear27'])){  
   $a=exec("sudo python /var/www/html/leds/gpio/27/parpadea.py"); 
   $_GET['parpadear27']="";
   echo $a; 
  } 
// Fin de las funciónes del pin GPIO 27 
 
 
// Funciones PHP del pin GPIO 4  
   if(isset($_GET['encender4'])){
   $a=exec("sudo python /var/www/html/leds/gpio/4/enciende.py"); 
   $_GET['encender4']="";
   echo $a; 
  } 
 
   if(isset($_GET['apagar4'])){
   $a=exec("sudo python /var/www/html/leds/gpio/4/apaga.py"); 
   $_GET['apagar4']="";
   echo $a; 
  } 
  
   if(isset($_GET['parpadear4'])){
   $a=exec("sudo python /var/www/html/leds/gpio/4/parpadea.py"); 
   $_GET['parpadear4']="";
   echo $a; 
  } 

// Fin de las funciónes del pin GPIO 4 
 
 
// Funciones PHP del pin GPIO 22 
 if(isset($_GET['encender22'])){  
   $a=exec("sudo python /var/www/html/leds/gpio/22/enciende.py"); 
   $_GET['encender22']="";
   echo $a; 
  } 
 
   if(isset($_GET['apagar22'])){
   $a=exec("sudo python /var/www/html/leds/gpio/22/apaga.py"); 
   $_GET['apagar22']="";
   echo $a; 
  } 
  
   if(isset($_GET['parpadear22'])){
   $a=exec("sudo python /var/www/html/leds/gpio/22/parpadea.py"); 
   $_GET['parpadear22']="";
   echo $a; 
  } 
// Fin de las funciónes 
//Funciones PHP del pin GPIO all
 if(isset($_GET['encenderall'])){  
   $a=exec("sudo python /var/www/html/leds/gpio/all/enciende.py"); 
   $_GET['encenderall']="";  
  echo $a; 
  } 
 
   if(isset($_GET['apagarall'])){
   $a=exec("sudo python /var/www/html/leds/gpio/all/apaga.py"); 
  $_GET['apagarall']=""; 
  echo $a; 
  } 
  
   if(isset($_GET['parpadearall']))
  {
  $a=exec("sudo python /var/www/html/leds/gpio/all/parpadea.py");  
  $_GET['parpadearall']=""; 
   echo $a; 
  } 
 if(isset($_GET['parpadearall2']))
  {
  $a=exec("sudo python /var/www/html/leds/gpio/all/parpadea2.py");
  $_GET['parpadearall2']="";
   echo $a;
  }
 if(isset($_GET['parpadearall3']))
  {
  $a=exec("sudo python /var/www/html/leds/gpio/all/parpadea3.py");
  $_GET['parpadearall3']="";
   echo $a;
  }
 if(isset($_GET['parpadearall4']))
  {
  $a=exec("sudo python /var/www/html/leds/gpio/all/parpadea4.py");
  $_GET['parpadearall4']="";
   echo $a;
  }



// Fin de las funciónes del pin GPIO ALL
 
?> 


