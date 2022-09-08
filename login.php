<?php
session_start();
 if( @$_SESSION["autentificado"] == 1)    
  header("location:index.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/syleslogin.css">
    <link rel="stylesheet" href="main.js">

    <title>Cuenta</title>
</head>
<body class="bg-dark">
    <section>
        <div class="row g-0">
            <div class="col-lg-7 d-none d-lg-block">
                
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item img-1 min-vh-100 active">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Logitech</h5>
                          <a href="#" class="text-muted text-decoration-none">Visita nuestra tienda</a>
                        </div>
                      </div>
                      <div class="carousel-item img-2 min-vh-100">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>HyperX</h5>
                          <a href="#" class="text-muted text-decoration-none">Visita nuestra tienda</a>
                        </div>
                      </div>
                      <div class="carousel-item img-3 min-vh-100">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Razer</h5>
                          <a href="#" class="text-muted text-decoration-none">Visita nuestra tienda</a>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Despues</span>
                    </button>
                  </div>
            </div>
            <div class="col-lg-5 d-flex flex-column align-items-end min-vh-100">
                <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100 mb-auto">
                    <a href="index.php"><img src="img/wowgames_logo.svg" alt="logo" class="img-fluid"></a>
                </div>
                <div class="px-lg-5 py-lg-4 p-4 w-100 align-self-center">
                    <h1 class="fw-bold mb-4">Bienvenido de vuelta</h1>
                    <form class="mb-5" method="POST" action="control_login.php">
                        <div class="form-group mb-4">
                          <label for="exampleInputEmail1" class="form-label font-weight-bold">Email</label>
                          <input type="email" name="email" class="form-control bg-white-x border-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu email">
                        </div>
                        <div class="form-group mb-4">
                          <label for="exampleInputPassword1" class="form-label font-weight-bold">Contraseña</label>
                          <input type="password" name="password" class="form-control bg-white-x border-0 mb-2" id="exampleInputPassword1" placeholder="Ingresa tu contraseña">
                          <a href="#" id="emailHelp" class="form-text text-muted text-decoration-none">¿Has olvidado la contraseña?</a>
                        </div>

                      
                        <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
                      </form>
                   
                </div>
                <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 w-100 mt-auto">
                    <p class="d-inline-block mb-0">¿No tienes una cuenta?</p> <a href="register.php" class="text-light font-weight-bold text-decoration-none"> Registrate</a>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://kit.fontawesome.com/d0dc7f6b6a.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>