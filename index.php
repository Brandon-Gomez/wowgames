<!doctype html>
<html lang="en">
  <head>
    <title>WowGames</title>
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
</head>
  <body>
      

  <nav class="navbar navbar-expand-sm navbar-dark bg-dark" height="4px">
      <a class="navbar-brand" href="index.php" alt="logo"> <img src="img/logo_transparente.png" width="120px" alt="logo"></a>
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
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <video width="320" height="240" autoplay>
  <source src="razer.mp4" type="video/mp4">
</video>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" type="video/ogg" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<div id="menu">
        <ul class="nav">
            <li><a href="">Productos</a>
            <ul>
                <li><a href="">Teclado</a></li>
                <li><a href="">Mouse</a></li>
                <li><a href="">Audifonos</a></li>
                <li><a href="">Computadores</a></li>
            </ul>
            </li>
            <li><a href="">Marcas</a>
            <ul>
                <li><a href="">Razer</a></li>
                <li><a href="">Logitech</a></li>
                <li><a href="">Redragon</a></li>
            </ul>
            </li>
            <li><a href="">Esports</a>
                <ul>
                    <li><a href="">League of Legends</a></li>
                    <li><a href="">Call of Duty:Warzone</a></li>
                    <li><a href="">Minecraft</a></li>
                    
                </ul>
            </li>

        </ul>
    </div>
    
  </body>
</html>