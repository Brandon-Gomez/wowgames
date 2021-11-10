<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="styles.css">
	<title>wongames</title>
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
				<a href="login.html">Cuenta</a>
				<a href="#">Promociones</a>
				<a href="#">Mesa de Regalos</a>
				<a href="#">Ayuda</a>
			</div>
		</div>

		<div class="contenedor contenedor-grid">
			<div class="grid" id="grid">
				<div class="categorias">
					<button class="btn-regresar"><i class="fas fa-arrow-left"></i> Regresar</button>
					<h3 class="subtitulo">Categorias</h3>

					<a href="#" data-categoria="logitech">logitech<i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="hyperx">hyperx<i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="razer">razer<i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="redrago">redragon<i class="fas fa-angle-right"></i></a>
					
				</div>

				<div class="contenedor-subcategorias">
					<div class="subcategoria" data-categoria="logitech">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">logitech</h3>
							<a href="#">mause</a>
							<a href="#">Teclado</a>
							<a href="#">audifonos eqipo de sonido</a>
							<a href="#">equipo de sonido</a>
							
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img src="img/logitech/1.png" alt="">
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
							<h3 class="subtitulo">hyperx</h3>
							<a href="#">mause</a>
							<a href="#">teclado</a>
							<a href="#">audifonos</a>
							<a href="#">microfono</a>
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img src="img/hyperx/1.png" alt="">
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
							<h3 class="subtitulo">razer</h3>
							<a href="#">mause</a>
							<a href="#">teclado</a>
							<a href="#">audifonos</a>
							<a href="#">microfono</a>
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img src="img/razer/1.png" alt="">
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
							<h3 class="subtitulo">redragon</h3>
							<a href="#">mause</a>
							<a href="#">teclado</a>
							<a href="#">audifonos</a>
							<a href="#">microfono</a>
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img src="img/redrago/1.png" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="img/redrago/2.png" alt="">
							</a>
							<a href="#">
								<img src="img/redrago/3.png" alt="">
							</a>
							<a href="#">
								<img src="img/redrago/4.png" alt="">
							</a>
							<a href="#">
								<img src="img/redrago/5.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

				
						
					
						

	<main class="contenedor">
		<article></article>
	</main>
	
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
	<script src="main.js"></script>
</body>
</html>