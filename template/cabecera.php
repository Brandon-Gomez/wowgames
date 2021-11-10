<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WowGames</title>
	<link rel="stylesheet " href="styles.css">
	<link rel="stylesheet" href="main.js">


</head>
<body>
	<nav class="menu" id="menu">
		<div class="contenedor contenedor-botones-menu ">
			<button id="btn-menu-barras" class="btn-menu-barras"><i class="fas fa-bars"></i></button>
			<button id="btn-menu-cerrar" class="btn-menu-cerrar"><i class="fas fa-times"></i></button>
		</div>

		<div class="contenedor contenedor-enlaces-nav">
			<div class="btn-departamentos" id="btn-departamentos">
				<p>Todos los<span>productos</span></p>
				<i class=" fas fa-caret-down "></i>
			</div>

			<div class="enlaces">
				<a href="# ">Promociones </a>
				<a href="# ">Mesa de Regalos </a>
				<a href="# ">Ayuda </a>
				<a href="login.html">Cuenta </a>
			</div>
		</div>

		<div class="contenedor contenedor-grid">
			<div class="grid activo" id="grid">
				<div class="categorias">
					<button class="btn-regresar"><i class="fas fa-arrow-left"></i> Regresar</button>
					<h3 class="subtitulo">Categorias</h3>
					<a href="#" data-categoria="logitech"> Logitech <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="hyperx">HyperX<i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="razer"> Razer <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="redragon">Redragon <i class="fas fa-angle-right"></i></a>
				</div>
				
				<div  class ="contenedor-subcategorias">
					
					<div class ="subcategoria activo"data-categoria ="logitech" >
						<div class ="enlaces-subcategoria" >
							<button class = "btn-regresar" ><i  class = "fas fa-arrow-left" ></i>Regresar</button >
							<h3  class = "subtitulo" >Logitech</h3 >
							<a href = "#" >mause</a>
							<a href = "#" >teclado</a>
							<a href = "#" >audifonos</a>
							<a href = "#" >equipos de sonido</a>
							<a href = "#" >Componentes</a>
						</div>

						<div  class ="banner-subcategoria" >
							<a href = "#">
								<img src = "img/logitech/1.png"  alt = "">
							</a>
						</div>

						<div  class ="galeria-subcategoria" >
							<a href = "#">
								<img src = "img/logitech/2.png" alt = "">
							</a>
							<a  href = "#">
								<img src = "img/logitech/3.png " alt = "">
							</a>
							<a href = "#">
								<img src = "img/logitech/4.png" alt = "">
							</a>
							<a href = "#">
								<img src = "img/logitech/5.png" alt = "">
							</a>
						</div>
					</div >

				
	                                   <!-- hyperx-->


					<div  class = "subcategoria" data-categoria = "hyperx">
						<div  class = "enlaces-subcategoria " >
							<button  class = "btn-regresar" ><i  class = "fas fa-arrow-left "></i >Regresar</button >
							<h3  class = "subtitulo " >hyperx</h3 >
							<a href = " # " > mause </a >
							<a href = " # " >teclado  </a >
							<a href = " # " > adifonos </a >
							<a href = " # " >  microfonos </a >
						</div >

						<div  class = " banner-subcategoria">
							<a href = " # ">
								<img  src = "img/hyperx/1.png " alt = "">
							</a >
						</div >

						<div  class = " galeria-subcategoria " >
							<a  href = " # " >
								<img  src = "img/hyperx/2.png" alt = "">
							</a>
							<a  href = " # " >
								<img  src = "img/hyperx/3.png" alt = "">
							</a>
							<a href = " # " >
								<img  src = "img/hyperx/4.png" alt = "">
							</a>
							<a  href = " # " >
								<img  src = "img/hyperx/5.png" alt = "">
							</a>

						</div >
					</div >

                                               <!--razer-->
				
					<div class="subcategoria" data-categoria="razer">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">razer</h3>
							<a href="#">mause</a>
							<a href="#">teclado</a>
							<a href="#">audifonos</a>
							<a href="#">microfonos</a>
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

                                  <!--redrago-->

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

	