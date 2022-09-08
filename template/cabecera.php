<?php session_start(); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/nav.css">
	<title>wowgames</title>
</head>
<body>
	<nav class="menu" id="menu">
		<div class="contenedor contenedor-botones-menu">
			<button id="btn-menu-barras" class="btn-menu-barras"><i class="fas fa-bars"></i></button>
			<button id="btn-menu-cerrar" class="btn-menu-cerrar"><i class="fas fa-times"></i></button>
		</div>

		<div class="contenedor contenedor-enlaces-nav">
			<div class="btn-departamentos" id="btn-departamentos">
				<p>Todos los<span>productos</span></p>
				<i class="fas fa-caret-down"></i>
			</div>

			<div class="enlaces">
				<a href="index.php">Inicio</a>
				<!-- <a href="login.php">Cuenta</a> -->
				<a href="" name="nombre" value=""><?php if ($_SESSION){
					echo $_SESSION['nombre'];
				} else {
					echo "Registrar";
				} ?></a>
				<a href="cerrar.php">Salir</a>

			</div>
		</div>

		<div class="contenedor contenedor-grid">
			<div class="grid" id="grid">
				<div class="categorias">
					<button class="btn-regresar"><i class="fas fa-arrow-left"></i> Regresar</button>
					<h3 class="subtitulo">Categorias</h3>

					<a href="logitech.php" data-categoria="logitech">Logitech<i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="hyperx">Hyperx<i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="razer">Razer<i class="fas fa-angle-right"></i></a>
					<a href="redragon.php" data-categoria="redrago">Redragon<i class="fas fa-angle-right"></i></a>
					
				</div>

				<div class="contenedor-subcategorias">
					<div class="subcategoria" data-categoria="logitech">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Logitech</h3>
							<a href="#">Mouse</a>
							<a href="#">Teclado</a>
							<a href="#">Audifonos</a>
							<a href="#">Equipo de sonido</a>
							
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img loading="lazy" src="img/logitech/si.svg" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="img/logitech/2.png" alt="">
							</a>
							<a href="#">
								<img src="img/logitech/3.png" alt="">
							</a>
							<a href="#">
								<img src="img/logitech/4.png" alt="">
							</a>
							<a href="#">
								<img src="img/logitech/5.png" alt="">
							</a>
						</div>
					</div>

					<div class="subcategoria" data-categoria="hyperx">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Hyperx</h3>
							<a href="#">Mouse</a>
							<a href="#">Teclado</a>
							<a href="#">Audifonos</a>
							<a href="#">Microfono</a>
						</div>

						<div class="banner-subcategoria">
							<a href="hyperx.php">
								<img loading="lazy" src="img/hyperx/logohyperx.svg" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="img/hyperx/2.png" alt="">
							</a>
							<a href="#">
								<img src="img/hyperx/3.png" alt="">
							</a>
							<a href="#">
								<img src="img/hyperx/4.png" alt="">
							</a>
							<a href="#">
								<img src="img/hyperx/5.png" alt="">
							</a>
						</div>
					</div>

					<div class="subcategoria" data-categoria="razer">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Razer</h3>
							<a href="#">Mouse</a>
							<a href="#">Teclado</a>
							<a href="#">Audifonos</a>
							<a href="#">Microfono</a>
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img loading="lazy" src="img/razer/1.png" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="img/razer/2.png" alt="">
							</a>
							<a href="#">
								<img src="img/razer/3.png" alt="">
							</a>
							<a href="#">
								<img src="img/razer/4.png" alt="">
							</a>
							<a href="#">
								<img src="img/razer/5.png" alt="">
							</a>
						</div>
					</div>


					<div class="subcategoria" data-categoria="redrago">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Redragon</h3>
							<a href="#">Mouse</a>
							<a href="#">Teclado</a>
							<a href="#">Audifonos</a>
							<a href="#">Microfono</a>
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img loading="lazy" src="img/redragon/1.png" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="img/redragon/2.png" alt="">
							</a>
							<a href="#">
								<img src="img/redragon/3.png" alt="">
							</a>
							<a href="#">
								<img src="img/redragon/4.png" alt="">
							</a>
							<a href="#">
								<img src="img/redragon/5.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

	
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
	<script src="main.js"></script>
</body>
</html>