<?php
    include 'conexion.php';
    $email = $_POST['email'];
    $clave = $_POST['clave'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE email='$email' and clave='$clave'");

    if (mysqli_num_rows($validar_login) >0) {
        echo '
            <script>
                window.location = "../index.php"
            </script>
        ';
    }else{
        echo '
        <script>
            alert("El usuario no existe")
        </script>
        ';
    }
?>