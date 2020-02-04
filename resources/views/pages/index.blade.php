@extends('layouts.base')
@section('title')
<title>Olimpiadas de Tecnología de la UAIE</title>
@stop
@section('content')
<header class="masthead" style="background-image: url('img/FotoGrupal.jpg')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="site-heading">
					<h1>Olimpiadas Estatales de Tecnologia UAIE-UAZ</h1>
					<span class="subheading">Bienvenido al sitio de las Olimpiadas Estatales de Tecnología de la Unidad Académica de Ingeniería Eléctrica de la Universidad Autónoma de Zacatecas.</span>
				</div>
			</div> <!-- Finish col-lg-8 -->
		</div> <!-- Finish row-->
	</div> <!-- Finish container -->
</header>

<!-- Main Content -->
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
			<h1 id="competencias">Competencias</h1>
			<h3 class="post-title">Nivel superior</h3>
			<div class="text-center" style="margin: 1rem">
				<img src="img/icpc_logo.png" class="img-fluid logo">
			</div>
			<div class="text-justify">
				El Gran Premio de México ICPC es un concurso de programación es el más importante y más prestigioso concurso de Programación en el mundo. Inició en la década de los 70 en Estados Unidos y en la década de los 90 se extendió rápidamente a todas las regiones del mundo. El concurso involucra a una red global de universidades que organizan anualmente competencias regionales con el propósito de obtener un lugar en las finales mundiales. Busca fomentar la creatividad, el trabajo en equipo y la innovación en la construcción de nuevos programas de software permitiéndoles al mismo tiempo a los estudiantes probar su habilidad para trabajar bajo presión.
			</div>
			<div class="clearfix" style="margin-top: 1rem">
				<a class="btn btn-primary float-right disabled" href="#">Descarga convocatoria  <i class="fa fa-download" aria-hidden="true"></i>
				</a>
			</div>
			<br>
			<h3 class="post-title">Nivel medio superior</h3>
			<div class="text-center" style="margin: 1rem">
				<img src="img/omi_logo.svg" class="img-fluid logo">
			</div>
			<div class="text-justify">
				Este concurso busca fomentar la creatividad y la innovación con el propósito de resolver problemas prácticos mediante el uso de lógica, algoritmos y programación de computadoras, y al mismo tiempo permitir a las instituciones de educación media superior encontrar a los mejores programadores jóvenes del estado con miras a formar parte de la selección estatal para participar en la Olimpiada Mexicana de Informática, el cual a su vez es un concurso a nivel nacional que promueve el desarrollo tecnológico en México.
			</div>
			<div class="clearfix" style="margin-top: 1rem">
				<a class="btn btn-primary float-right disabled" href="#">Descarga convocatoria  <i class="fa fa-download" aria-hidden="true"></i>
				</a>
			</div>
			<br>
			<h3 class="post-title">Primaria y secundaria</h3>
			<div class="text-center" style="margin: 1rem">
				<img src="img/omips_logo.png" class="img-fluid logo">
			</div>
			<div class="text-justify">
				Este concurso busca fomentar la creatividad y la innovación con el propósito de resolver problemas prácticos mediante el uso de lógica, algoritmos y programación de computadoras, y al mismo tiempo permitir a las instituciones de educación media superior encontrar a los mejores programadores jóvenes del estado con miras a formar parte de la selección estatal para participar en la Olimpiada Mexicana de Informática, el cual a su vez es un concurso a nivel nacional que promueve el desarrollo tecnológico en México.
			</div>
			<div class="clearfix" style="margin-top: 1rem">
				<a class="btn btn-primary float-right disabled" href="#">Descarga convocatoria  <i class="fa fa-download" aria-hidden="true"></i>
				</a>
			</div>
		</div> <!-- Finish col-lg-8 -->
	</div> <!-- Finish row-->
</div> <!-- Finish container-->
<hr>
<div class="container">
	<div class="row">
		<div class="col-lg-10 col-md-10 mx-auto">
			<div class="row">
				<div class="col-md-6">
					<h1 id="contacto">Información de contacto</h1>
					<div class="jumbotron" style="padding: 0.25rem">
						<h5>Dr. Roberto Solís Robles.</h5>
						<p style="margin:0px">Director de la sede Autónoma de Zacatecas del Gran Premio de México.</p>
						<p style="margin:0px">Delegado de la Olimpiada Mexicana de Informática en el estado de Zacatecas.</p>
						<p style="margin:0px">rsolis@uaz.edu.mx</p>
						<h5>Carlos Daniel Ruvalcaba Serrano.</h5>
						<p style="margin:0px">g.m.52830A@gmail.com</p>
					</div>
				</div> <!-- Finish col-md-6 -->
				<div class="col-md-6">
					<iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14715.308063014056!2d-102.64908204685291!3d22.771800072087526!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x51b0787b01175fa0!2sUAZ%3A+Edificio+de+Ingenier%C3%ADa+en+Computaci%C3%B3n+y+Software!5e0!3m2!1ses-419!2smx!4v1564714955357!5m2!1ses-419!2smx" frameborder="0" style="border:0; height: 100%; width: 100%" allowfullscreen></iframe>
				</div>
			</div> <!-- Finish row -->
		</div> <!-- Finish col-lg-8 -->
	</div> <!-- Finish row -->
</div> <!-- Finish container -->
@stop