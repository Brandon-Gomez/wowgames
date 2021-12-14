<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WOWGAMES</title>
  <link href = "https: //fonts.googleapis.com/css2? family = Mohave: wght @ 300 & display = swap "rel =" stylesheet ">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/nav.css">

</head>
<body>
<?php require("template/cabecera.php") ?>
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


<?php require ("template/pie.php")?>
<script src="https://kit.fontawesome.com/d0dc7f6b6a.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


