<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar datos</title>
</head>
<body>
    <?php
        $server = "localhost";
        $usuario = "root";
        $contraseña = "";
        $bd = "contactos";

        $conexion = mysqli_connect($server, $usuario, $contraseña, $bd) or die ("Error en la conexion");

        $nombre = $_POST['txtNombre'];
        $correo = $_POST['txtCorreo'];
        $mensaje = $_POST['txtMensaje'];
        

        $insertar = "INSERT into contacto values ('$nombre', '$correo', '$mensaje')";
        $resultado = mysqli_query($conexion,$insertar) or die ("Error al insertar los registros.");

        mysqli_close($conexion);
        echo "Datos insertados correctamente";
    ?>
   
</body>
</html>