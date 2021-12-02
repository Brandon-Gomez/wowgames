<?php
require'global/conexion.php';

$message='';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $sql = "INSERT INTO users(email, password) VALUES (:email, :password)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':email',$_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT); 
  $stmt->bindParam(':password',$password);
  
  if ($stmt->execute()) {
    $message= 'Successfully created new user';
  }else{
    $message= 'Sorry there must have beed an issue creating your account';

  }
  
}
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
    <link rel="stylesheet" href="css/sylesregister.css">
    <link rel="stylesheet" href="main.js">

    <title>Cuenta</title>
</head>
<body class="bg-dark">

<?php if (!empty($message)): ?>
  <p><?php $message ?></p>
  <?php endif ?>
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
                <div class="px-lg-5 py-lg-4 p-4 w-100 ">
                    <h1 class="fw-bold mb-4">Registrate</h1>
                    <FORM class="mb-5" METHOD=POST>

                      <TABLE class="m-auto">
                      
                      <TR>
                         <TD><span>Nombre</span></TD>


                         <TD> <INPUT required TYPE="text" NAME="nombre" class="col-md-12 bg-ligt-x border-0 w-100" MAXLENGTH=18 placeholder="Ingrese su nombre">


                      <TR>
                         <TD>  
                          <button class="btn btn-outline-secondary dropdown-toggle col-md-12 " type="button" data-bs-toggle="dropdown" aria-expanded="false">T.D</button>
                          <ul class="dropdown-menu">
                            <li><option class="dropdown-item"><span>Tarjeta de indetidad</span></option></li>
                            <li><option class="dropdown-item"><span>Contraseña</span></option></li>
                            <li><option class="dropdown-item"><span>Cedula</span></option></li>

                          </ul>
                          </TD>
                          <td ><span class="col-md-12">


                            <INPUT required TYPE="num_document" NAME="id" class="col-md-12 me-1 bg-ligt-x border-0 w-100" MAXLENGTH=18  placeholder="Ingrese Nº documento "></span></td>                      


                      <TR>
                    
                      
                        <TR>

                          <TD><span>Ciudad</span>
                          <TD> 
                                        <select class="form-control bg-light border-0" id="inputCiudadLine2">
                                            <option value=""> Seleccione ciudad</option>
                                            <option value="Arauca">Arauca</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Barranquilla">Barranquilla</option>
                                            <option value="Bogotá">Bogotá</option>
                                            <option value="Bucaramanga">Bucaramanga</option>
                                            <option value="Cali">Cali</option>
                                            <option value="Cartagena">Cartagena</option>
                                            <option value="Cúcuta">Cúcuta</option>
                                            <option value="Florencia">Florencia</option>
                                            <option value="Ibagué">Ibagué</option>
                                            <option value="Leticia">Leticia</option>
                                            <option value="Manizales">Manizales</option>
                                            <option value="Medellín">Medellín</option>
                                            <option value="Mitú">Mitú</option>
                                            <option value="Mocoa">Mocoa</option>
                                            <option value="Montería">Montería</option>
                                            <option value="Neiva">Neiva</option>
                                            <option value="Pasto">Pasto</option>
                                            <option value="Pereira">Pereira</option>
                                            <option value="Popayán">Popayán</option>
                                            <option value="Puerto Carreño">Puerto Carreño</option>
                                            <option value="Puerto Inírida">Puerto Inírida</option>
                                            <option value="Quibdó">Quibdó</option>
                                            <option value="Riohacha">Riohacha</option>
                                            <option value="San Andrés">San Andrés</option>
                                            <option value="San José del Guaviare">San José del Guaviare</option>
                                            <option value="Santa Marta">Santa Marta</option>
                                            <option value="Sincelejo">Sincelejo</option>
                                            <option value="Tunja">Tunja</option>
                                            <option value="Valledupar">Valledupar</option>
                                            <option value="Villavicencio">Villavicencio</option>
                                            <option value="Yopal">Yopal</option>
                                        </select>            
                      <TR>
                        
                      <TR>
                        <TD>Direccion 


                        <TD><INPUT required TYPE="text" NAME="direccion" id="cityinput"  MAXLENGTH=20 class="col-md-12 me-1 bg-ligt-x border-0 w-100" placeholder="Ingrese su residencia">            


                      <TR>

                        <TR>
                          <TD>Fecha Nacimiento


                          <TD><INPUT required TYPE="date" NAME="f_nacimiento"  MAXLENGTH=20 class="col-md-12 me-1 bg-ligt-x border-0 w-100" placeholder="Ingrese">


                        </TR>

                        <TR>
                            <TD>Teléfono           


                              <TD><input required type="number" name="telefono" id="telinput"  class="col-md-12 bg-ligt-x border-0 w-100" maxlength="19" placeholder="Ingrese numero">                      



                        </TR>

                         <TR>
                        <TD><span>Correo electronico</span></TD>


                        <td><input required type="email" name="email" id="" class="col-md-12 bg-ligt-x border-0 w-100" placeholder="Ingrese su email" style="margin-left: 1px;"></td>


                      <TR>
                      <TD><span>Contraseña</span></TD>


                      <td><input required type="password" name="password" id="" class="col-md-12 bg-ligt-x border-0 w-100" placeholder="Ingrese su contraseña" style="margin-left: 1px;"></td>

                      <TR>
                      <TD><span>confirmar Contraseña</span></TD>


                      <td><input required type="password" name="confirm_password" id="" class="col-md-12 bg-ligt-x border-0 w-100" placeholder="confirme su contraseña" style="margin-left: 1px;"></td>

                      <TR>
                      </TABLE>
                      <button type="submit" class="btn btn-primary w-100 mt-3" >Registrarse</button>
                      </FORM>
                      <p class="font-weight-bold text-center text-muted">O registrate con</p>
                      <div class="d-flex justify-content-around">
                        <button type="submit" class="btn btn-outline-light flex-grow-1 me-2"><i class="fab fa-google lead me-2"></i>Google</button>
                        <button type="submit" class="btn btn-outline-light flex-grow-1 ms-2"><i class="fab fa-facebook-f lead me-2"></i>Facebook</button>
                      </div>
                </div>
                <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 w-100 mt-auto">
                    <p class="d-inline-block mb-0">¿Tienes una cuenta?</p> <a href="login.php" class="text-light font-weight-bold text-decoration-none"> Inicia sesion</a>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://kit.fontawesome.com/d0dc7f6b6a.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>