<?php
require"seguridad.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WOWGAMES</title>
  <link href = "https: //fonts.googleapis.com/css2? family = Mohave: wght @ 300 & display = swap "rel =" stylesheet ">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/nav_menu.css">
<!--En mi pc se ve bien-->
</head>
<body>
<nav class="menu" id="menu" style="background: #1d252e00;
">
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
					<a href="hyperx.php" data-categoria="hyperx">Hyperx<i class="fas fa-angle-right"></i></a>
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

  <!-- CONTAINER -->
<div class="responsive">
<!--Banner animado-->
  <section id="bannera">
    <div class="banner-content">
      <h1>Bienvenidos a WOWGAMES</h1>
      <a href="#slider">Mas info</a>
    </div>
  </section>
  <!--Slider-->
  <div id="slider">
  <div class="boton">
    <a href="#titulo">MARCAS</a>
  </div>
  <ul>
    <li><img loading="lazy" src="img/razer/banner.jpg" alt=""></li>
    <li><img loading="lazy" src="img/hyperx/banner.jpg" alt=""></li>
    <li><img loading="lazy" src="img/logitech/banner.jpg" alt=""></li>
    <li><img loading="lazy" src="img/redragon/bannern.jpg" alt=""></li>
  </ul>
</div>

<!--Titulo-->
<div id="titulo">
  <center>
  <h1>
    MARCAS DESTACADAS
  </h1>
</center>
</div>
<!--Tarjetas-->
<div class="container">
  <div class="card">
    <figure>
      <img loading="lazy" src="img/hyperx/tarjeta.png">
    </figure>
    <div class="contenido">
      <h3>HyperX</h3>
      <p>Ventaja decisiva, siempre en el mejor momento.</p>
      <a href="login.php">Ir a seccion</a>
    </div>
  </div>
  <div class="card">
    <figure>
      <img loading="lazy" src="img/logitech/1.png">
    </figure>
    <div class="contenido">
      <h3>Logitech</h3>
      <p>El espacio adecuado,</br> El momento adecuado.</p>
      <a href="#">Ir a seccion</a>
    </div>
  </div>
  <div class="card">
    <figure>
      <img loading="lazy" src="img/razer/tarjeta.png">
    </figure>
    <div class="contenido">
      <h3>Razer</h3>
      <p>Corre hacia tu proxima victoria.</br></br></p>
      <a href="#">Ir a seccion</a>
    </div>
  </div>
  <div class="card">
    <figure>
      <img loading="lazy" src="img/redragon/tarjeta.jpg">
    </figure>
    <div class="contenido">
      <h3>Redragon</h3>
      <p>Competir, cubrir una grieta,</br> cruzar fronteras.</p>
      <a href="#">Ir a seccion</a>
    </div>
  </div>
</div>
<!--Boton2-->
<div class="boton2">
  <a href="#">Volver arriba</a>
</div>
</div>
<?php require ("template/pie.php") ?>

<script src="main.js"></script>

<script src="https://kit.fontawesome.com/d0dc7f6b6a.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


