<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>LOGITECH</title>
	<script src="https://kit.fontawesome.com/11614eb144.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Boostrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/syles.css">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js'></script>
    <link rel="stylesheet" href="css/menuu.css">
    <link rel="stylesheet" href="css/style.css">
</head>
</head>
<body>

	<nav class="navbar navbar-expand-sm navbar-dark bg-dark" height="4px">
		<a class="navbar-brand" href="index.php" alt="logo"> <img src="../logitech/imagenes/logo_transparente.png" width="120px" alt="logo"></a>
		<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
			aria-expanded="false" aria-label="Toggle navigation"></button>
		<div class="collapse navbar-collapse" id="collapsibleNavId">
			<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
			<form id="app" action="#">
		  <label :data-state="state" for="search">
		  <input type="text" placeholder="Buscar..." @click="state = 'opan'" @blur="state='close'"/>
		  <i class='bx bx-search' @click="" aria-hidden="true" width="2px"></i>
		  </label>
	  </form><a style="font-size: 8pt; text-decoration: none" target="_blank" href="http://www.frontendfreecode.com"></a>      
	  <script>var app = new Vue({
		  el: '#app',
		  data: { state: "close" } 
	  });
	  </script>   
				<li class="nav-item">
					<a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="19px" height="19px" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
					  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
					  </svg>Mi cuenta</a>
				  </li>
				  
				<li class="nav-item">
					
					<a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
					  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
					  </svg>Carrito</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
					<div class="dropdown-menu" aria-labelledby="dropdownId">
						<a class="dropdown-item" href="#">Mouse</a>
						<a class="dropdown-item" href="#">Teclados</a>
						<a class="dropdown-item" href="#">Diademas</a>
					</div>
				</li>
			</ul>                                     
	</nav>

	<div class="banner">
		<div style="color: white;" class="info">
			<h1 style="text-align: center;">BIENVENIDOS A LOGITECH</h1>
			<p >Ver online ahora! Mira la mayor selección de productos Logitech. Tienda online oficial con ofertas exclusivas.</p>		
		</div>
	</div>
	   <div class="nav">
		<h3 style="text-align: center;">DESCUBRÍ NUESTRO UNIVERSO DE PRODUCTOS RECOMENDADOS PARA VOS</h3>
	   </div>
      
	   <!-- <div class="uni"></div>
	   <div class="verso">
	   <img src="mouse.jpg" alt="">
		   <h3>MOUSE Y TECLADOS</h3>
		   <p>Mouse</p>
		   <p>Teclado</p>
		   <p>Teclados Multidospositivos<p>
		   <p>Combos</p>
	   </div>	 -->
      
		<div class="content">
		<div class="productos">
        <h3>MX ANIWHERE 3</h3>
		<img src="../logitech/imagenes/pro1.jpg">
		<h3>$200.000</h3>
		<button class="button-add">AGREGAR AL CARRITO</button>
		</div>

		
		<div class="productos">
        <h3>MX KEYS</h3>
		<img src="../logitech/imagenes/pro2.jpg">
		<h3>$200.000</h3>
		<button class="button-add">AGREGAR AL CARRITO</button>
		</div>

		
		<div class="productos">
        <h3>ERGO K860</h3>
		<img src="../logitech/imagenes/pro3.jpg">
		<h3>$200.000</h3>
		<button class="button-add">AGREGAR AL CARRITO</button>
		</div>

		
		<div class="productos">
        <h3>USB UNIFYING</h3>
		<img src="../logitech/imagenes/pro4.jpg">
		<h3>$200.000</h3>
		<button class="button-add">AGREGAR AL CARRITO</button>
		</div><br>

		
		<div class="productos"><br>
        <h3>LOGI BOLT USB RECEIVER</h3>
		<img src="../logitech/imagenes/pro5.jpg">
		<h3>$200.000</h3>
		<button class="button-add">AGREGAR AL CARRITO</button>
		</div>

		<div class="productos"><br>
        <h3>LOGI BOLT USB RECEIVER</h3>
		<img src="../logitech/imagenes/pro5.jpg">
		<h3>$200.000</h3>
		<button class="button-add">AGREGAR AL CARRITO</button>
		</div>
      </div>
     </div>

	

	  
</body>
</html>



