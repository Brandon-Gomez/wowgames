<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hyper X</title>
  <link rel="stylesheet" href="css/styles.css" type="text/css">
  <link rel="stylesheet" href="css/hyperx.css">
  <link href = "https: //fonts.googleapis.com/css2? family = Mohave: wght @ 300 & display = swap "rel =" stylesheet ">
  <script src="main.js"></script>
  <script src="https://kit.fontawesome.com/d0dc7f6b6a.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


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
				<a href="#">Promociones</a>
				<a href="#">Mesa de Regalos</a>
				<a href="#">Carrito</a>
				<a href="login.html">Cuenta</a>

			</div>
		</div>

		<div class="contenedor contenedor-grid">
			<div class="grid" id="grid">
				<div class="categorias">
					<button class="btn-regresar"><i class="fas fa-arrow-left"></i> Regresar</button>
					<h3 class="subtitulo">Categorias</h3>

					<a href="#" data-categoria="logitech">Logitech<i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="hyperx">Hyperx<i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="razer">Razer<i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="redrago">Redragon<i class="fas fa-angle-right"></i></a>
					
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
								<img src="img/logitech/si.svg" alt="">
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
							<a href="#">
								<img src="img/hyperx/logohyperx.svg" alt="">
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
							<h3 class="subtitulo">Redragon</h3>
							<a href="#">Mouse</a>
							<a href="#">Teclado</a>
							<a href="#">Audifonos</a>
							<a href="#">Microfono</a>
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img src="img/redragon/1.png" alt="">
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

<!--Banner animado-->
  <section id="bannera">
    <div class="banner-content">
      <h1>Bienvenidos Seccion HyperX</h1>
      <a href="#slider">Mas info</a>
    </div>
  </section>
  <!--Slider-->
<div id="slider">
  <div class="boton">
    <a href="#titulo">PRODUCTOS</a>
  </div>
  <ul>
    <li><img src="img/hyperx/slider.jpg" alt=""></li>
    <li><img src="img/hyperx/slider2.jpg" alt=""></li>
    <li><img src="img/hyperx/slider3.jpg" alt=""></li>
    <li><img src="img/hyperx/slider4.jpg" alt=""></li>
  </ul>
</div>
<!--Titulo-->
<div id="titulo">
  <center>
  <h1>
    PRODUCTOS DESTACADOS
  </h1>
</center>
</div>
<!--Tarjetas-->
<div class="container">
  <div class="card">
    <figure>
      <img src="img/hyperx/mousv.jpg">
    </figure>
    <div class="contenido">
      <h3>Mouse Gaming HyperX Pulsefire Haste</h3>
      <p>$200.000</p>
      <a href="#">Agregar al carrito</a>
    </div>
  </div>
  <div class="card">
    <figure>
      <img src="img/hyperx/audiv.jpg">
    </figure>
    <div class="contenido">
      <h3>Audífonos HyperX Cloud </br> Alpha Pro</h3>
      <p>$310.000</p>
      <a href="#">Agregar al carrito</a>
    </div>
  </div>
  <div class="card">
    <figure>
      <img src="img/hyperx/teclav.jpg">
    </figure>
    <div class="contenido">
      <h3>Teclado mecánico para videojuegos HyperX Alloy Origins</h3>
      <p>$390.000</p>
      <a href="#">Agregar al carrito</a>
    </div>
  </div>
  <div class="card">
    <figure>
      <img src="img/hyperx/microv.jpg">
    </figure>
    <div class="contenido">
      <h3>HyperX </br> QuadCast</h3>
      <p>$650.000</p>
      <a href="#">Agregar al carrito</a>
    </div>
  </div>
</div>
<!--Boton2-->
<div class="boton2">
  <a href="#">Volver arriba</a>
</div>

<!--Footer-->
<footer>
        <div class="footer-content">
          
         <img src="img/wowgames_logo.svg" alt="" class="imgfoot">
          <ul class="socials">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          </ul>
        </div>
        <div class="footer-bottom">
          <p>&copy; 2021 Wowgames. Reservados todos los derechos. Designed By <span>TPS 109</span></p>
        </div>
    </footer>


</body>
</html>