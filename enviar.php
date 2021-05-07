
<?php
   
  if(isset($_POST['Enviar']))
  {
      if(!empty($_POST['Nombre']) && !empty($_POST['Correo']) 
      && !empty($_POST['Telefono']) && !empty($_POST['Mensaje']))
      {
          $nombre = $_POST['Nombre'];
          $correo = $_POST['Correo'];
          $telefono = $_POST['Telefono'];
          $mensaje = $_POST['Mensaje'];

          $email ="itj.18469@gmail.com";

          $asunto = "Nombre:".$nombre."\n Telefono:".$telefono."\n Mensaje:".$mensaje."\n";
          $header= "From: itj.18469gmail.com" . "\r\n";
          $header.= "Reply-To: itj.18469gmail.com" . "\r\n";
          $header.= "X-Mailer: PHP/" . phpversion();
          mail($email,"Contacto",$asunto,$header);
          

      }
  }

?>
