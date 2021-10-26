<?php 

include'global/config.php';
include'global/conexion.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WowGames</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <br>
    <div class="alert alert-success">
        Pantalla de mensaje.....
        <a href="#" class="badge bg-success">Ver carrito</a>
    </div>

    <div class="row">
        <?php

        $sentencia=$pdo->prepare("SELECT * FROM `tblproductos` ");
        $sentencia->execute();
        $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    // print_r($listaProductos);

        ?>
        <?php foreach($listaProductos as $producto){ ?>
            <div class="col-3">
            <div class="card">
                <img 
                alt="<?php echo $producto['Nombre'];?>"
                title="<?php echo $producto['Nombre'];?>"
                class="card-img-top"
                src="<?php echo $producto['Imagen'];?>" 
                data-toggle="popover"
                data-trigger="hover"
                data-content="<?php echo $producto['Descripcion'];?>"
                
                >
                <div class="card-body">
                    <span><?php echo $producto['Nombre'];?></span>
                    <h5 class="card-title">$<?php echo $producto['Precio'];?>.</h5>
                    <p class="card-text">Descripcion</p>
                    <button class="btn btn-primary" name="btnAccion" type="submit">
                        agregar al carrito
                    </button>
                </div>
            </div>
        </div>
    <?php } ?>
    

    
    </div>

</div>
    <script>    

$(function () {
  $('[data-toggle="popover"]').popover()
});

    </script>
</body>
</html>