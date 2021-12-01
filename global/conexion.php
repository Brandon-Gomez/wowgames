<?php
if (isset($_POST['registro'])) {

if (strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1 ) {
   $nombre = $_POST['nombre'];
   $num_document = $_POST['id'];
   $ciudad= $_POST['ciudad'];
   $direccion= $_POST['direccion'];
   $f_nacimiento= $_POST['f_nacimiento'];
   $telefono= $_POST['telefono'];
   $email= $_POST['correo'];

   $consulta = "INSERT INTO cliente(nombre, num_documento, ciudad, direccion, f_nacimiento, telefono, email) 
   VALUES ('$nombre','$num_document','$ciudad','$direccion','$f_nacimiento','$telefono','$email')";
   $resultado = mysqli_query($enlace,$consulta);

   if ($resultado) {
       ?>
        <h2 class="ok">Te has registrado</h2>
       <?php
   }else{
    ?>
    <h2 class="bad">Ups, ha ocurrido un error</h2>
   <?php
   }

}
}
?>