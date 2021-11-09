<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WowGames</title>
	<link rel=" stylesheet " href="./css/styles.css">

</head>
<body>
	<nav class="menu" id="menu">
		<div class="contenedor contenedor-botones-menu ">
			<button id="btn-menu-barras " class="btn-menu-barras "> <i class="fas fa-bars "> </i> </button>
			<button id="btn-menu-cerrar " class="btn-menu-cerrar "> <i class="fas fa-times "> </i> </button>
		</div>
		<div class="contenedor contenedor-enlaces-nav">
			<div class="btn-departamentos " id="btn-departamentos ">
				<p>Todos los <span>productos</span></p>
				<i class=" fas fa-caret-down "></i>
			</div>

			<div class="enlaces ">
				<a href="# ">Promociones </a>
				<a href="# ">Mesa de Regalos </a>
				<a href="# ">Ayuda </a>
				<a href="cuenta.html">Cuenta </a>
			</div>
		</div>

		<div class="contenedor contenedor-grid">
			<div class="grid activo" id="grid">
				<div class="categorias">
					<button class="btn-regresar"><i class=" fas fa-arrow-left "></i> Regresar </button>
					<h3 class="subtitulo">Categorias</h3>
					<a href="#" data-categoria="logitech"> Logitech <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="hyperx"> HyperX <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="razer"> Razer <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="redragon"> Redragon <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="ryzen"> Ryzen <i class="fas fa-angle-right"></i></a>
				</div>
				
				<div  class = "contenedor-subcategorias" >
					<div class = "subcategoria activo" data-categoria = "logitech" >
						<div class = "enlaces-subcategoria" >
							<button  class = "btn-regresar" ><i  class = "fas fa-arrow-left" ></i >Regresar </button >
							<h3  class = "subtitulo" > Logitech </h3 >
							<a  href = "#" > mause </a >
							<a  href = "# " > teclado </a >
							<a  href = "# " > audifonos</a >
							<a  href = "# " > equipos de sonido</a >
							<a  href = "# " > Componentes </a >
						</div >

						<div  class = "banner-subcategoria" >
							<a  href = "#" >
								<img src = "./img/logitech1.png"  alt = "">
							</a >
						</div >

						<div  class = "galeria-subcategoria" >
							<Un  href = " # " >
								<img  src = "./img/Logitech2.png" alt = "" >
							</a >
							<Un  href = " # " >
								<img  src = "./img/logitech3.png " alt = "" >
							</a >
							<Un  href = " # " >
								<img  src = "./img/logitech4.png" alt = "" >
							</a >
							<Un  href = " # " >
								<img  src = "./img/logitech5.png" alt = "" >
							</a >
						</div >
					</div >
	
				<!--	<div  class = " subcategoria " data-categoria = " libros " >
						<div  class = " enlaces-subcategoria " >
							<button  class = " btn-regresar " > <i  class = " fas fa-arrow-left " > </i > Regresar </button >
							<h3  class = " subtitulo " > 1 </ h3 >
							<Un  href = " # " > Los más vendidos </a >
							<Un  href = " # " > 3 </a >
							<Un  href = " # " > 4 </a >
							<Un  href = " # " > 5 </a >
						</div >

						<div  class = " banner-subcategoria " >
							<Un  href = " # " >
								<img  src = " ./img/libros-banner-1.png " alt = "" >
							</a >
						</div >

						<div  class = " galeria-subcategoria " >
							<Un  href = " # " >
								<img  src = " #cualquierimg " alt = "" >
							</a >
							<Un  href = " # " >
								<img  src = " # " alt = "" >
							</a >
							<Un  href = " # " >
								<img  src = " # " alt = "" >
							</a >
							<Un  href = " # " >
								<img  src = " # " alt = "" >
							</a >
						</div >
					</div >

					<div  class = " subcategoria " data-categoria = " ropa-y-accesorios " >
						<div  class = " enlaces-subcategoria " >
							<button  class = " btn-regresar " > <i  class = " fas fa-arrow-left " > </i > Regresar </button >
							<h3  class = " subtitulo " > intel</h3 >
							<Un  href = " # " > 1 </a >
							<Un  href = " # " > 2 </a >
							<Un  href = " # " > 3 </a >
							<Un  href = " # " > 4 </a >
						</div >

						<div  class = " banner-subcategoria " >
							<Un  href = " # " >
								<img  src = " ./img/ropa-banner-1.png " alt = "" >
							</a >
						</div >
						<div  class = " galeria-subcategoria " >
							<Un  href = " # " >
								<img  src = " ./img/ropa-galeria-1.png " alt = "" >
							</a >
							<Un  href = " # " >
								<img  src = " ./img/ropa-galeria-2.png " alt = "" >
							</a >
							<Un  href = " # " >
								<img  src = " ./img/ropa-galeria-3.png " alt = "" >
							</a >
							<Un  href = " # " >
								<img  src = " ./img/ropa-galeria-4.png " alt = "" >
							</a >
						</div >
					</div >

					<div  class = " subcategoria " data-categoria = " hogar-y-cocina " >
						<div  class = " enlaces-subcategoria " >
							<button  class = " btn-regresar " > <i  class = " fas fa-arrow-left " > </i > Regresar </button >
							<h3  class = " subtitulo " > ryzen </h3 >
							<Un  href = " # " > 1 </a >
							<Un  href = " # " > 2 </a >
							<Un  href = " # " >  3</a >
							<Un  href = " # " > 4</a >
							<Un  href = " # " > 5 </a >
							<Un  href = " # " > 6 </a >
							<Un  href = " # " > 7 </a >
							<Un  href = " # " > 8 </a >
						</div >

						<div  class = " banner-subcategoria " >
							<Un  href = " # " >
								<img  src = " ./img/hogar-banner-1.png " alt = "" >
							</a >
						</div >

						<div  class = " galeria-subcategoria " >
							<Un  href = " # " >
								<img  src = " ./img/hogar-galeria-1.png " alt = "" >
							</a >
							<Un  href = " # " >
								<img  src = " ./img/hogar-galeria-2.png " alt = "" >
							</a >
							<Un  href = " # " >
								<img  src = " ./img/hogar-galeria-3.png " alt = "" >
							</a >
							<Un  href = " # " >
								<img  src = " ./img/hogar-galeria-4.png " alt = "" >
							</a >
						</div >
					</div >

					<div  class = " subcategoria " data-categoria = " juegos-y-juguetes " >
						<div  class = " enlaces-subcategoria " >
							<button  class = " btn-regresar " > <i  class = " fas fa-arrow-left " > </i > Regresar </button >
							<h3  class = " subtitulo " > Juegos  </h3 >
							<Un  href = " # " > 1</a >
							<Un  href = " # " > 2</a >
							<Un  href = " # " > 3 </a >
							<Un  href = " # " > 4</a >
						</div >

						<div  class = " banner-subcategoria " >
							<Un  href = " # " >
								<img  src = " ./img/juegos-banner-1.png " alt = "" >
							</a >
						</div >

						<div  class = " galeria-subcategoria " >
							<Un  href = " # " >
								<img  src = " ./img/juegos-galeria-1.png " alt = "" >
							</a >
							<Un  href = " # " >
								<img  src = " ./img/juegos-galeria-2.png " alt = "" >
							</a >
							<Un  href = " # " >
								<img  src = " ./img/juegos-galeria-3.png " alt = "" >
							</a >
							<Un  href = " # " >
								<img  src = " ./img/juegos-galeria-4.png " alt = "" >
							</a >
						</div >
					</div >

					<div  class = " subcategoria " data-categoria = " hyperx " >
						<div  class = " enlaces-subcategoria " >
							<button  class = " btn-regresar " > <i  class = " fas fa-arrow-left " > </i > Regresar </button >
							<h3  class = " subtitulo " > hyperx </h3 >
							<Un  href = " # " > 1 </a >
							<Un  href = " # " > 2 </a >
							<Un  href = " # " > 3 </a >
							<Un  href = " # " > 4</a >
						</div >

						<div  class = " banner-subcategoria " >
							<Un  href = " # " >
								<img  src = " img " alt = "" >
							</a >
						</div >

						<div  class = " galeria-subcategoria " >
							<Un  href = " # " >
								<img  src = " # " alt = "" >
							</a >
							<Un  href = " # " >
								<img  src = " # " alt = "" >
							</a >
							<Un  href = " # " >
								<img  src = " # " alt = "" >
							</a >
							<Un  href = " # " >
								<img  src = " # " alt = "" >
							</a >
						</div >
					</div >

					 <div  class = " subcategoria " data-categoria = " redragon" >
						<div  class = " enlaces-subcategoria " >
							<button  class = " btn-regresar " > <i  class = " fas fa-arrow-left " > </i > Regresar </button >
							<h3  class = " subtitulo " > redragon </h3 >
							<Un  href = " # " > 1 </a >
							<Un  href = " # " > 2 </a >

						</div >

						<div  class = " banner-subcategoria " >
							<Un  href = " # " >
								<img  src = "  " alt = "" >
							</a >
						</div >

						<div  class = " galeria-subcategoria " >
							<Un  href = " # " >
								<img  src = " # " alt = "" >
							</a >
							<Un  href = " # " >
								<img  src = " # " alt = "" >
							</a >
							<Un  href = " # " >
								<img  src = " # " alt = "" >
							</a >
							<Un  href = " # " >
								<img  src = " # " alt = "" >
							</a >
						</div >
					</div >
				</div >
			</div >
		</div >-->
		



	</nav>



	<main class=" contenedor ">
		<article></article>
	</main>

	<script src=" https://kit.fontawesome.com/2c36e9b7b1.js "> </script>
	<script src=" main.js "> </script>

	

    <link rel="stylesheet" href="styles.css">
</head>
<body>
<footer>
        <div class="footer-content">
          
         <img src="img/logo_transparent.png" alt="" class="imgfoot">
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


	