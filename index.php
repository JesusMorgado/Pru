<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Contactanos</title>
</head>
<body>
    <form method="POST" >
        <h2>Contactanos</h2>
        <input type="text" name="Nombre" placeholder="Nombre" required>
        <input type="email" name="Correo" placeholder="Correo" required>
        <input type="text" name="Telefono" placeholder="Telefono" required>
        <textarea name="Mensaje" placeholder="Escribe aquí tu mensaje" required></textarea>
        <input type="submit" value="Enviar">
    </form>
    <?php
    include("enviar.php");  
    
    ?>
</body>
</html>