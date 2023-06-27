<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?=$titulo;?></title>

	<!-----FRAMEWORKS----->
	<link rel="stylesheet" href="<?=base_url();?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/fontawesome/css/all.min.css">

	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?=base_url();?>assets/css_propio/estilos.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css_propio/estilos2.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css_propio/style.css">

	<script src="https://kit.fontawesome.com/5faa04ecbd.js" crossorigin="anonymous"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="shortcut icon" href="<?=base_url();?>assets/imagenes/favicon.png">


	<?php
		date_default_timezone_set("America/Argentina/Buenos_Aires");
		
	?>

</head>
<body>

	<!-----FUNCIONES JS de BootsTrap----->
	<script src="<?=base_url();?>assets/bootstrap/js/jquery.slim.min.js"></script>
	<script src="<?=base_url();?>assets/bootstrap/js/popper.min.js"></script>
	<script src="<?=base_url();?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

	<script>
	$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
	$('[data-toggle="popover"]').popover();
	});
	</script>



	<header>

		<div class="container">

		
		
			
			<div class="clima">
			
			<div class="logo">
		
			<img class="centradoimagen" src="<?=base_url();?>assets/imagenes/logo.png" >
			
			</div>
			</div>
			

			<div class="navbar">
            
        
			
				<ul>
					<div class="btn-menu">
					<label for="btn-menu">☰</label>
					
					<li><a href="<?=base_url();?>inicio/ciencia">Ciencia</a></li>
					<li><a href="<?=base_url();?>inicio/salud">Salud</a></li>
					<li><a href="<?=base_url();?>inicio/tecno">Tecno</a></li>
			
				
					<li><a href="<?=base_url();?>inicio/videos">Videos</a></li>
			
				</ul>
			</div>


		</div>
		<?php
			
			session_start();

			if(isset($_SESSION['username']))
			{
				$usuario = $_SESSION['username'];
				
				$finalnombre = $usuario;
			}
			else 
			{
			
				$_SESSION['username'] = "Invitado";
				$finalnombre = "Invitado";

			}
			require 'conexion.php';
			$result = mysqli_query($conexion, "SELECT imagen,id FROM usuarios WHERE usuario = '$finalnombre'");

			if($result->num_rows >0)
			{
				while($row = $result->fetch_assoc())
				{
				
					$finalimagen = $row['imagen'];
				}
			}


			$resultfecha = mysqli_query($conexion, "SELECT date,id FROM usuarios WHERE usuario = '$finalnombre'");

			if($resultfecha->num_rows >0)
			{
				while($row = $resultfecha->fetch_assoc())
				{
				
					$viejafecha = $row['date'];
					
				}
			}
			else $viejafecha = 'Sin logear';

			
			$date = date('d/m/Y');
			$resultado = mysqli_query($conexion, "UPDATE usuarios SET date = '$date' WHERE usuario = '$finalnombre';")
		?>
		
		
		<center>
			<?php if($finalnombre == "Invitado") { ?>
				<img src="<?=base_url();?>assets/imagenes/Login/sinfoto.jpg" alt="..." class="rounded-circle" width="200px" height="200px">
			<?php } ?>
			<?php if($finalnombre != "Invitado") { ?>
				<img src="<?=base_url();?>assets/imagenes/Login/<?php echo $finalimagen; ?>" alt="..." class="rounded-circle" width="200px" height="200px">
			<?php } ?>
			<p>Bienvenido <b> <?php echo $finalnombre ?> </b> tu última conexión fue el dia <b> <?php echo $viejafecha ?>  </b> </p>
		</center>





		
		<div class ="today-date">

		
			<div class="line"></div>
			<div class="date">
				

						
			<?php
			$apiKey = "4fa726d84d6e2fea012a26123037754b";
			$cityId = "3837029";
			$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

			$ch = curl_init();

			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_VERBOSE, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			$response = curl_exec($ch);

			curl_close($ch);
			$data = json_decode($response);
			$currentTime = time();
			?>


			<img
			src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
			class="weather-icon" /> 
			
			
			<?php 

			echo " San Luis ".$data->main->temp_max," ";


			?> °C

						
			<?php


			$anio = date("Y");
			$mes = date("m");
			$dia = date("d");
			$hora = date("H");
			$minutos = date("i");
			$segundos = date("s");
			$fecha = date("Y-m-d");
			$hora = date("H:i:s");
			$completa = date("Y-m-d H:i:s");

			switch($mes)
			{   
				case 1:
				$monthNameSpanish = "Enero";
				break;

				case 2:
				$monthNameSpanish = "Febrero";
				break;

				case 3:
				$monthNameSpanish = "Marzo";
				break;

				case 4:
				$monthNameSpanish = "Abril";
				break;

				case 5:
				$monthNameSpanish = "Mayo";
				break;

				case 6:
				$monthNameSpanish = "Junio";
				break;

				case 7:
				$monthNameSpanish = "Julio";
				break;

				case 8:
				$monthNameSpanish = "Agosto";
				break;

				case 9:
				$monthNameSpanish = "Septiembre";
				break;

				case 10:
				$monthNameSpanish = "Octubre";
				break;

				case 11:
				$monthNameSpanish = "Noviembre";
				break;

				case 12:
				$monthNameSpanish = "Diciembre";
				break;
				//...
			}

			$diza = array(
				"Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
				#Asigna al primer dato 0, al segundo 1, al tercero 2, etc.

			echo " - ".$diza[date("w")]," $dia de $monthNameSpanish del año $anio";

			?>

		</div>

		<div class="line"></div>
   
		</div>

		<div class="capa"></div>
		<!--	--------------->
		<input type="checkbox" id="btn-menu">
		<div class="container-menu">
			<div class="cont-menu top-fixed">
				<nav>
					<a href="<?=base_url();?>inicio">Inicio</a>
				
					<a href="<?=base_url();?>inicio/clima">Clima</a>
	

					<a href="<?=base_url();?>inicio/dolarhoy">Cotización del dolar</a>

					<a href="<?=base_url();?>inicio/mapa">¿Dónde estamos?</a>
				
					<a href="<?=base_url();?>inicio/formulario">Contáctanos</a>
					<a href="<?=base_url();?>inicio/login">Iniciar Sesión</a>
					<a href="<?=base_url();?>inicio/salir">Cerrar Sesión</a>
				</nav>
				<label for="btn-menu">✖️</label>
			</div>
		</div>

	</header>
