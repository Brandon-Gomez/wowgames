<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hyper X</title>

  <link href = "https: //fonts.googleapis.com/css2? family = Mohave: wght @ 300 & display = swap "rel =" stylesheet ">
  <link rel="stylesheet" href="css/hyperx.css">


</head>
<body>

<?php require("template/cabecera.php") ?>

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
    <li><img loading="lazy" src="img/hyperx/slider.jpg" alt=""></li>
    <li><img loading="lazy" src="img/hyperx/slider2.jpg" alt=""></li>
    <li><img loading="lazy" src="img/hyperx/slider3.jpg" alt=""></li>
    <li><img loading="lazy" src="img/hyperx/slider4.jpg" alt=""></li>
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
      <img loading="lazy" src="img/hyperx/mousv.jpg">
    </figure>
    <div class="contenido">
      <h3>Mouse Gaming HyperX Pulsefire Haste</h3>
      <p>$200.000</p>
      <a href="#">Agregar al carrito</a>
    </div>
  </div>
  <div class="card">
    <figure>
      <img loading="lazy" src="img/hyperx/audiv.jpg">
    </figure>
    <div class="contenido">
      <h3>Audífonos HyperX Cloud </br> Alpha Pro</h3>
      <p>$310.000</p>
      <a href="#">Agregar al carrito</a>
    </div>
  </div>
  <div class="card">
    <figure>
      <img loading="lazy" src="img/hyperx/teclav.jpg">
    </figure>
    <div class="contenido">
      <h3>Teclado mecánico para videojuegos HyperX Alloy Origins</h3>
      <p>$390.000</p>
      <a href="#">Agregar al carrito</a>
    </div>
  </div>
  <div class="card">
    <figure>
      <img loading="lazy" src="img/hyperx/microv.jpg">
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


<?php require("template/pie.php")?>

</body>
<script src="https://kit.fontawesome.com/d0dc7f6b6a.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>