<?php
    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $clave = $_POST['clave'];

    $query = "INSERT INTO usuario (nombre, apellido, email, celular, clave) VALUES ('$nombre','$apellido','$email','$celular','$clave')";

    $ejecutar = mysqli_query($conexion,$query);

    
    
    if ($ejecutar) {
        echo '
           <script>
            alert("Usuario ingresado");
            window.location = "../vista/ingreso.php";
           </script>
        ';
    }else{
        echo '
        <script>
            alert("Intentalo de nuevo");
            window.location = "../vista/ingreso.php";
        </script>
        ';
    }
    mysqli_close($conexion);
?>